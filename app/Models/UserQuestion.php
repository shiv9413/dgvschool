<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    use HasFactory;
    
    protected $table = "user_questions";
    
    protected $fillable = [
    	'admission_form_id','question1','question2','question3'
    ];
}
