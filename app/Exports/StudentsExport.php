<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class StudentsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return Student::all();
        return Student::select("id", "family_name","given_name","middle_name","gender","date_Birth","place_Birth","weight","height","permanent_address","country_citizenship","id_card_num","status","name1_Em","relationship1_Em","homephone1_Em","cellphone1_Em","address1_Em","name2_Em","relationship2_Em","homephone2_Em","cellphone2_Em","address2_Em","alergy","drug","treatment","medical_Questions","phy_condition","sport","image")->get();
        
        
    }
    public function headings(): array
        {
            return ["ID","Family name","Given name","Middle name","Gender","Date of Birth","Place of Birth","Weight","Height","Permanent Address","Country of Citizenship","Id Card num","Status","Name1 of Emergency","Relationship1","Homephone1","Cell phone1","Address1","Name2 of Emergency","Relationship2","Homephone2","Cellphone2","Address2","Alergy","Drug","Treatment","Medical Questions","Physical Condition","Sport","Image"];
        }
}
