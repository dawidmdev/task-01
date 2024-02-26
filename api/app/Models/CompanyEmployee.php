<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyEmployee extends Model
{
    protected $fillable = [
        'company_id', 'first_name', 'second_name', 'email', 'telephone_number'
    ];
}
