<?php

declare(strict_types=1);

namespace App\Enums;

enum StockMovementTypeEnum: string
{
    case In = 'in';
    case Out = 'out';
    case Adjustment = 'adjustment';
}
