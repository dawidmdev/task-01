<?php

namespace App\Repositories;

use App\Models\CompanyEmployee;

class CompanyEmployeeRepository extends BaseRepository implements CompanyEmployeeRepositoryInterface
{
    public function __construct() {
        parent::__construct(new CompanyEmployee());
    }
}
