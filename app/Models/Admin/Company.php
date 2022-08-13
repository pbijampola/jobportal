<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'logo', 'industry',
        'ownership_type', 'company_description',
        'established_in', 'package',
        'phone_number', 'no_of_offices',
        'no_of_employees', 'country', 'city', 'state'
    ];
}
