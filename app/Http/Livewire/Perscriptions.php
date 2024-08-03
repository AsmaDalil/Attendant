<?php

namespace App\Http\Livewire;
use App\Models\School;
use App\Models\Student;
use Livewire\WithPagination;
use App\Models\Perscription;

use Livewire\Component;

class Perscriptions extends Component

{

    use WithPagination;
    public $school,$student_name,$student_id,$malady,$decsription,$doctor_name;
    public $upd_school,$upd_studnent_name,$upd_student_id,$upd_malady,$upd_decsription,$upd_doctor_name,$cid;
    protected $listeners = ['delete','deleteCheckedPerscriptions'];
    public $checkedPerscription = [];
   
    public function render()
    {
        
        return view('livewire.perscriptions',[
            'schools'=>School::orderBy('school_name','asc')->get(),
            'perscriptions'=>Perscription::orderBy('student_name','asc')->paginate(5)
        ]);
   
    }
  
    public function OpenAddPesrciptionModal(){
        $this->school = '';
        $this->student_name = '';
        $this->student_id = '';
        $this->malady = '';
        $this->decsription = '';
        $this->doctor_name = '';
        $this->dispatchBrowserEvent('OpenAddPerscriptionModal');
    }

    public function save(){
        $this->validate([
             'school'=>'required',
             'student_name'=>'required',
             'student_id'=>'required',
             'malady'=>'required',
             'decsription'=>'required',
             'doctor_name'=>'required'
        ]);

        $save = Perscription::insert([
              'school_id'=>$this->school,
              'student_name'=>$this->student_name,
              'student_id'=>$this->student_id,
              'malady'=>$this->malady,
              'decsription'=>$this->decsription,
              'doctor_name'=>$this->doctor_name,
            
        ]);

        if($save){
            $this->dispatchBrowserEvent('CloseAddPerscriptionModal');
            $this->checkedPerscription = [];
        }
    }

    public function OpenEditPerscriptionModal($id){
        $info = Perscription::find($id);
        $this->upd_school= $info->school_id;
        $this->upd_student_name = $info->student_name;
        $this->upd_student_id = $info->student_id;
        $this->upd_malady = $info->malady;
        $this->upd_decsription = $info->decsription;
        $this->upd_doctor_name = $info->doctor_name;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('OpenEditPerscriptionModal',[
            'id'=>$id
        ]);
    }

    public function update(){
        $cid = $this->cid;
        $this->validate([
            'school'=>'required',
            'student_name'=>'required'.$cid,
            'student_id'=>'required',
            'malady'=>'required',
            'decsription'=>'required',
            'doctor_name'=>'required'
              
             
              
        ],[
            'upd_school.required'=>'You must select a school',
            'upd_student_name.required'=>'Enter student name',
            'upd_student_id.required'=>'Enter student id',
            'upd_malady.required'=>'Enter illness',
            'upd_decsription.required'=>'Enter malady description',
            'upd_doctor_name.required'=>'Capital doctor name require'
        ]);

        $update = Perscription::find($cid)->update([
            'school_id'=>$this->upd_school,
            'student_name'=>$this->upd_student_name,
            'student_id'=>$this->upd_student_id,
            'malady'=>$this->upd_malady,
            'decsription'=>$this->upd_decsription,
            'doctor_name'=>$this->upd_doctor_name
        ]);

        if($update){
            $this->dispatchBrowserEvent('CloseEditPerscriptionModal');
            $this->checkedPerscription = [];
        }
    }

    public function deleteConfirm($id){
        $info = Perscription::find($id);
        $this->dispatchBrowserEvent('SwalConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->student_name.'</strong>',
            'id'=>$id
        ]);
    }


    public function delete($id){
        $del =  Perscription::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('deleted');
        }
        $this->checkedPerscription = [];
    }

    public function deletePerscriptions(){
        $this->dispatchBrowserEvent('swal:deletePerscriptions',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete this perscriptions',
            'checkedIDs'=>$this->checkedPerscription,
        ]);
    }
    public function deleteCheckedPerscriptions($ids){
        Perscription::whereKey($ids)->delete();
        $this->checkedPerscription = [];
    }

    public function isChecked($pesrciptionId){
        return in_array($pesrciptionId, $this->checkedPerscription) ? 'bg-info text-white' : '';
    }
}