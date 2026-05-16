<?php

declare(strict_types=1);

namespace App\Enums;

enum InvoiceStatusEnum: string
{
    case Draft = 'draft';
    case Sent = 'sent';
    case Paid = 'paid';
    case Unpaid = 'unpaid';
    case Partial = 'partial';
}
