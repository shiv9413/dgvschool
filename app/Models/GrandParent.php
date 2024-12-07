<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandParent extends Model
{
    use HasFactory;
    
    protected $table = "grand_parents";
    
     protected $fillable = [
    	'admission_form_id', 'reside_with_child','occupation'
    ];
}
