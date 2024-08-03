<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class StudentsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
           
                'family_name'=> $row['family_name'],
                'given_name'=> $row['given_name'],
                'middle_name'=> $row['middle_name'],
                'gender'=> $row['gender'],
                'id_card_num'=> $row['id_card_num'],

                
                

               
        ]);
    }
}
