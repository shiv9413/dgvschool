<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    
    protected $table = "transports";
    
    protected $fillable = [
    	'admission_form_id','child_transport','personal_transport'
    ];
}
