<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{
    public function __construct() {
        parent::__construct(new Company());
    }
}
