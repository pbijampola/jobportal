<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['comp_name','job_title','job_description','benefit','country','state','city','position','carrier_level','gender','skills','salary_from',
    'salary_to','salaray_period','functional_area','job_type','job_shift','job_expire_date'
];

//Relationship btn company and job
public function company(){
    return $this->hasMany(Company::class);
}
}
