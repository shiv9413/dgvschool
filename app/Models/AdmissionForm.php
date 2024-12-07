<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionForm extends Model
{
    use HasFactory;
    
    protected $table = "admission_forms";
    
    protected $fillable = [
        'child_name',
        'date_of_birth',
        'admission_seeking_class',
        'gender',
        'previous_school',
        'sibling_name',
        'sibling_relation',
        'sibling_age',
        'sibling_school',
        'father_name',
        'father_qualifications',
        'father_mobile',
        'father_occupation',
        'father_designation',
        'father_annual_income',
        'mother_name',
        'mother_qualifications',
        'mother_mobile',
        'mother_occupation',
        'mother_designation',
        'mother_annual_income',
        'address',
    ];
    
     public function grandParents()
    {
        return $this->hasMany(GrandParent::class, 'admission_form_id');
    }

    public function transports()
    {
        return $this->hasMany(Transport::class, 'admission_form_id');
    }

    public function attractions()
    {
        return $this->hasMany(Attraction::class, 'admission_form_id');
    }

    public function userQuestions()
    {
        return $this->hasMany(UserQuestion::class, 'admission_form_id');
    }
}
