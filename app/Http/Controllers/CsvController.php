<?php


namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\Request;

class CsvController extends Controller
{
      /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $students = Student::get();
  
        return view('records', compact('students'));
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new StudentsExport, 'Students.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new studentsImport,request()->file('file'));
        return back();
    }

}

