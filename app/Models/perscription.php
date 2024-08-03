<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perscription extends Model
{
    use HasFactory;
     protected $fillable = [
        'school_id','student_id','student_name','malady','medication','decsription','doctor_name'
    ];
    public function school(){
        return $this->belongsTo(school::class,'school_id','id');
    }
   
}
