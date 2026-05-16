<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRoleEnum: string
{
    case Admin = 'admin';
    case Manager = 'manager';
    case Vendeur = 'vendeur';
    case Mecanicien = 'mecanicien';
}
