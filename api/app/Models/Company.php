<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'title', 'nip', 'address', 'city', 'post_code'
    ];
}
