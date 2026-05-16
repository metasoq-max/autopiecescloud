<?php

declare(strict_types=1);

namespace App\Actions;

use App\DTOs\CompanyRegistrationData;
use App\Enums\UserRoleEnum;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterCompanyAction
{
    public function execute(CompanyRegistrationData $data): User
    {
        return DB::transaction(function () use ($data): User {
            $company = Company::query()->create([
                'uuid' => (string) Str::uuid(),
                'name' => $data->companyName,
                'slug' => Str::slug($data->companyName) . '-' . Str::lower(Str::random(6)),
                'email' => $data->companyEmail,
                'trial_ends_at' => now()->addDays(14),
            ]);

            return User::query()->create([
                'uuid' => (string) Str::uuid(),
                'company_id' => $company->id,
                'name' => $data->userName,
                'email' => $data->userEmail,
                'password' => Hash::make($data->password),
                'role' => UserRoleEnum::Admin->value,
            ]);
        });
    }
}
