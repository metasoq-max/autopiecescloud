<?php

declare(strict_types=1);

namespace App\DTOs;

readonly class CompanyRegistrationData
{
    public function __construct(
        public string $companyName,
        public string $companyEmail,
        public string $userName,
        public string $userEmail,
        public string $password,
    ) {}
}
