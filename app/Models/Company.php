<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Company extends Model
{
    use HasFactory;
    use Billable;

    protected $guarded = [];

    protected function casts(): array
    {
        return ['trial_ends_at' => 'datetime'];
    }
}
