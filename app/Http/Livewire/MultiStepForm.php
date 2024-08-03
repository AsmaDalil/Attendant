<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $family_name;
    public $given_name;
    public $middle_name;
    public $gender;
    public $date_Birth;
    public $place_Birth;
    public $familial_situation;
    public $weight;
    public $height;   
    public $permanent_address;
    public $country_citizenship;
    public $id_card_num;
    public $status;
    public $name1_Em;    
    public $relationship1_Em;
    public $homephone1_Em;
    public $cellphone1_Em;
    public $address1_Em;
    public $name2_Em;
    public $relationship2_Em;
    public $homephone2_Em;
    public $cellphone2_Em;
    public $address2_Em;
    public $drug;
    public $alergy;
    public $treatment;
    public $medical_Questions = [];
    public $phy_condition = [];
    public $sport;
    public $image;
    public $terms;
    public $totalSteps = 6;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
    public function increaseStep(){
       $this->resetErrorBag();
       $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
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
                //'id_card_num'=>'required|ID Card No|unique:students',
                'status'=>'required',
                
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'name1_Em'=>'required',
                 'relationship1_Em'=>'required',
                 'homephone1_Em'=>'required',
                 'cellphone1_Em'=>'required',
                 'address1_Em'=>'required',
                 
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                    'alergy'=>'required',
                    
              ]);
        }
        elseif($this->currentStep == 4){
            $this->validate([
                'medical_Questions'=>'required|array|min:1|max:20'
                  
            ]);
        }
        elseif($this->currentStep == 5){
                $this->validate([
                    'phy_condition'=>'required|array|min:1|max:2',
                    'sport'=>'required',
                    

                      
                ]);
   
        }
       
    }
    public function register(){
    $this->resetErrorBag();
    if($this->currentStep == 6){
        $this->validate([
            'image'=>'required|mimes:jpg,png,pdf|max:1024',
            'terms'=>'accepted'
        ]);
    }

    $image_name = 'image_'.$this->image->getClientOriginalName();
    $upload_image = $this->image->storeAs('students_images', $image_name);
    
    if($upload_image){
        $values = array(
            "family_name"=>$this->family_name,
            "given_name"=>$this->given_name,
            "middle_name"=>$this->middle_name,
            "gender"=>$this->gender,
            "date_Birth"=>$this->date_Birth,
            "place_Birth"=>$this->place_Birth,
            "familial_situation"=>$this->familial_situation,
            "weight"=>$this->weight,
            "height"=>$this->height,
            "permanent_address"=>$this->permanent_address,
            "country_citizenship"=>$this->country_citizenship,
            "id_card_num"=>$this->id_card_num,
            "status"=>$this->status,
            "name1_Em"=>$this->name1_Em,
            "relationship1_Em"=>$this->relationship1_Em,
            "homephone1_Em"=>$this->homephone1_Em,
            "cellphone1_Em"=>$this->cellphone1_Em,
            "address1_Em"=>$this->address1_Em,
            "name2_Em"=>$this->name2_Em,
            "relationship2_Em"=>$this->relationship2_Em,
            "homephone2_Em"=>$this->homephone2_Em,
            "cellphone2_Em"=>$this->cellphone2_Em,
            "address2_Em"=>$this->address2_Em,
            "alergy"=>$this->alergy,
            "drug"=>$this->drug,
            "treatment"=>$this->treatment,
            "medical_Questions"=>json_encode($this->medical_Questions),
            "phy_condition"=>json_encode($this->phy_condition),
            "sport"=>$this->sport,
            "image"=>$image_name,
        );
        Student::insert($values);
       // $this->reset();
     //   $this->currentStep = 1;
     $data = ['name'=>$this->family_name.' '.$this->given_name,'id_card_num'=>$this->id_card_num];
     return redirect()->route('registration.success', $data);
        }
    }
}


 
