<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

class BaseCompanyPolicy
{
    public function before(User $user): ?bool
    {
        return $user->hasRole('admin') ? true : null;
    }

    public function access(User $user, $model): bool
    {
        return (int) $user->company_id === (int) $model->company_id;
    }
}
