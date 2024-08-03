<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        
        'family_name' ,
        'given_name' ,
        'middle_name' ,
        'gender' ,
        'date_Birth' ,
        'place_Birth' ,
        'familial_situation' ,
        'weight' ,
        'height' ,
        'permanent_address' ,
        'country_citizenship' ,
        'id_card_num' ,
        'status' ,
        'name1_Em' ,
        'relationship1_Em' ,
        'homephone1_Em' ,
        'cellphone1_Em' ,
        'address1_Em' ,
        'name2_Em' ,
        'relationship2_Em' ,
        'homephone2_Em' ,
        'cellphone2_Em' ,
        'address2_Em' ,
        'alergy' ,
        'drug' ,
        'treatment' ,
        'medical_Questions' ,
        'phy_condition' ,
        'sport' ,
        'image' ,
    ];
}
