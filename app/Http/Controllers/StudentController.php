<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        function index(){

            return view('/form');
        }
       

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly 
     *   ]);created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([

            'family_name'=>'required|string',
                'given_name'=>'required|string',
                'gender'=>'required',
                'date_Birth'=>'required',
                'place_Birth'=>'required',
                'familial_situation'=>'required',
                'weight'=>'required',
                'height'=>'required',
                'permanent_address'=>'required',
                'country_citizenship'=>'required',
                'id_card_num'=>'required',
                'status'=>'required',
                'name1_Em'=>'required',
                 'relationship1_Em'=>'required',
                 'homephone1_Em'=>'required',
                 'cellphone1_Em'=>'required',
                 'address1_Em'=>'required',
                 'alergy'=>'required',
                 'medical_Questions'=>'required|array|min:1|max:20',
                 'phy_condition'=>'required|array|min:1|max:2',
                 'sport'=>'required',
                 'image'=>'required|mimes:jpg,png,pdf|max:1024',
                
        ]);
        Student::create($request->all());

     

        return redirect()->route('students.index')

                        ->with('success','Student created successfully.');


    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)

    {

        return view('show',compact('student'));

    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'family_name'=>'required|string',
            'given_name'=>'required|string',
            'gender'=>'required',
            'date_Birth'=>'required',
            'place_Birth'=>'required',
            'familial_situation'=>'required',
            'weight'=>'required',
            'height'=>'required',
            'permanent_address'=>'required',
            'country_citizenship'=>'required',
            'id_card_num'=>'required',
            'status'=>'required',
            'name1_Em'=>'required',
            'relationship1_Em'=>'required',
            'homephone1_Em'=>'required',
            'cellphone1_Em'=>'required',
            'address1_Em'=>'required',
            'alergy'=>'required',
            'medical_Questions'=>'required|array|min:1|max:20',
            'phy_condition'=>'required|array|min:1|max:2',
            'sport'=>'required',
            'image'=>'required|mimes:jpg,png,pdf|max:1024',
        ]);

    

        $student->update($request->all());


        return redirect()->route('students.index')

                        ->with('success','Student updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();


        return redirect()->route('students.records')

                        ->with('success','Student deleted successfully');
    }
}
