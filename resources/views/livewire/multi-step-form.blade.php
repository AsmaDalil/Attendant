
<form wire:submit.prevent="register">

{{-- STEP 1 --}}

    
@if ($currentStep == 1)
<div class="step-one">
    <div class="card">
        <div class="card-header bg-secondary text-white"> Personal Information</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">First name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" wire:model="family_name">
                       <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                       <label for="">Given name</label>
                       <input type="text" class="form-control" placeholder="Enter last name" wire:model="given_name">
                       <span class="text-danger">@error('given_name'){{ $message }}@enderror</span>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group">
                       <label for="">Middle name</label>
                       <input type="text" class="form-control" placeholder="Middle" wire:model="middle_name">
                       <span class="text-danger">@error('middle_name'){{ $message }}@enderror</span>
                   </div>
               </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select  class="form-control" wire:model="gender">
                               <option value="" selected>Choose gender</option>
                               <option value="male">Male</option>
                               <option value="female">Female</option>
                        </select>
                        <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of birth</label>
                        <input type="text" class="form-control" placeholder="Enter your date of birth" wire:model="date_Birth">
                        <span class="text-danger">@error('date_Birth'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of birth</label>
                        <input type="text" class="form-control" placeholder="Enter your place of birth" wire:model="place_Birth">
                        <span class="text-danger">@error('place_Birth'){{ $message }}@enderror</span>
                    </div>
                </div>
                
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="">Family situation</label>
                        <select  class="form-control" wire:model="familial_situation">
                        <option value="" selected>Choose Family situation</option>
                            <option> Single</option>
                            <option>Married</option>
                            <option>Others</option>
                        </select>
                        <span class="text-danger">@error('familial_situation'){{ $message }}@enderror</span>
                    </div>

                    <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Weight</label>
                        <input type="text" class="form-control" placeholder="Enter your weight" wire:model="weight">
                        <span class="text-danger">@error('weight'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Height</label>
                        <input type="text" class="form-control" placeholder="Enter your Height" wire:model="height">
                        <span class="text-danger">@error('height'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Permanent Address</label>
                <textarea class="form-control" cols="1" rows="1" wire:model="permanent_address"></textarea>
                <span class="text-danger">@error('permanent_address'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="">Country of citizenship </label>
                <textarea class="form-control" cols="1" rows="1" wire:model="country_citizenship"></textarea>
                <span class="text-danger">@error('country_citizenship'){{ $message }}@enderror</span>
            </div>
          
                <h3 style="border:orange; border-width:5px; border-style:solid;"> 
              
                    <div class="form-row">
                    <div class="col-md-2">
                    <div class="form-group">
                    <label for=""></label>
                        <input type="text" class="form-control" placeholder="ID Card No" wire:model="id_card_num">
                        <span class="text-danger">@error('id_card_num'){{ $message }}@enderror</span>
                     </div>
                    </div>
                    <div class="form-group col-md-6">
                    <label for=""></label>
                        <select  class="form-control" wire:model="status">
                            <option selected>Regular</option>
                            <option> Summer or special program</option>
                            <option>Exchange or study abroad</option>  
                        </select>
                        <span class="text-danger">@error('status'){{ $message }}@enderror</span>
                    </div>
                   </div>

            
        </div>
    </div>
</div>

</div>
@endif

{{-- STEP 2 --}}

@if ($currentStep == 2)
    

<div class="step-two">
    <div class="card">
        <div class="card-header bg-secondary text-white">Persons to contact in case of emergency</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name1</label>
                        <input type="text" class="form-control" placeholder="Enter Name of the 1st person" wire:model="name1_Em">
                        <span class="text-danger">@error('name1_Em'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                       <label for="">Relationship</label>
                       <input type="text" class="form-control" placeholder="Enter Relationship" wire:model="relationship1_Em">
                       <span class="text-danger">@error('relationship1_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                   <div class="form-group">
                       <label for=""> Home Phone</label>
                       <input type="text" class="form-control" placeholder="Enter phone number" wire:model="homephone1_Em">
                       <span class="text-danger">@error('homephone1_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <label for=""> Cell Phone</label>
                       <input type="text" class="form-control" placeholder="Enter phone number" wire:model="cellphone1_Em">
                       <span class="text-danger">@error('cellphone1_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
            </div>

               <div class="form-group">
                <label for=""> Address</label>
                <textarea class="form-control" cols="1" rows="1" wire:model="address1_Em"></textarea>
                <span class="text-danger">@error('address1_Em'){{ $message }}@enderror</span>
            </div>
        </div>
        <hr>
        <div class="card-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name2</label>
                        <input type="text" class="form-control" placeholder="Enter Name of the 2nd person" wire:model="name2_Em">
                        <span class="text-danger">@error('name2_Em'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                       <label for="">Relationship</label>
                       <input type="text" class="form-control" placeholder="Enter Relationship" wire:model="relationship2_Em">
                       <span class="text-danger">@error('relationship2_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                   <div class="form-group">
                       <label for=""> Home Phone</label>
                       <input type="text" class="form-control" placeholder="Enter phone number" wire:model="homephone2_Em">
                       <span class="text-danger">@error('homephone2_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <label for=""> Cell Phone</label>
                       <input type="text" class="form-control" placeholder="Enter phone number" wire:model="cellphone2_Em">
                       <span class="text-danger">@error('cellphone2_Em'){{ $message }}@enderror</span>
                   </div>
               </div>
            </div>
             <div class="form-group">
                <label for=""> Address</label>
                <textarea class="form-control" cols="1" rows="1" wire:model="address2_Em"></textarea>
                <span class="text-danger">@error('address2_Em'){{ $message }}@enderror</span>
            </div>

            </div>

    </div>
</div>

@endif


{{-- STEP 3 --}}

@if ($currentStep == 3)

<div class="step-three">
             <div class="card">
                 <div class="card-header bg-secondary text-white">Current and previous medical treatment</div>
                 <div class="card-body">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> Allergies</label>
                        <select  class="form-control" wire:model="alergy">
                               <option value="" selected>If any</option>
                               <option value="male">yes</option>
                               <option value="female">no</option>
                        </select>
                        <span class="text-danger">@error('alergy'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="form-group">
                <label for=""> Drugs( list drugs)</label>
                <textarea class="form-control" cols="3" rows="3" wire:model="drug"></textarea>
                </div>
                <div class="form-group">
                <label for=""> Others?(food,bee-stings,etc)</label>
                <textarea class="form-control" cols="3" rows="3" wire:model="drug"></textarea>
                </div>
                <div class="form-group">
                <label for=""> Medical treatment</label>
                <textarea class="form-control" cols="3" rows="3" wire:model="treatment"></textarea>
                </div>
                <div class="form-group">
                <label for=""> Surgical treatment</label>
                <textarea class="form-control" cols="3" rows="3" wire:model="treatment"></textarea>
                </div>
           </div>

             </div>
</div>
@endif



{{-- STEP 4 --}}
@if ($currentStep == 4)

<div class="step-four">
             <div class="card">
                 <div class="card-header bg-secondary text-white">Medical questions</div>
                 <div class="card-body">
                 Do you have or have any ever had.....?
                     <div class="Medical d-flex flex-column align-items-left mt-2">
                         <label for="Epilepsy ">
                             <input type="checkbox" id="Epilepsy" value="Epilepsy" wire:model="medical_Questions"> Epilepsy or convulsions/Epilepsie ou convulsion
                         </label>
                         <label for="Diabetes/Diabète">
                            <input type="checkbox" id="Diabetes/Diabète" value="Diabetes/Diabète" wire:model="medical_Questions"> Diabetes/Diabète
                        </label>
                        <label for="Rheumatic">
                            <input type="checkbox" id="Rheumatic" value="Rheumatic" wire:model="medical_Questions"> Rheumatic Fever / Fièvre rthumatismale
                        </label>
                        <label for="Cough">
                            <input type="checkbox" id="Cough" value="Cough" wire:model="medical_Questions"> Chronic Cough/Toux chronique
                        </label>
                        </label>
                        <label for="Tuberculosis">
                            <input type="checkbox" id="Tuberculosis" value="Tuberculosis" wire:model="medical_Questions"> Tuberculosis / Tuberculose
                        </label>
                        </label>
                        <label for="Respiratory">
                            <input type="checkbox" id="Respiratory" value="Respiratory" wire:model="medical_Questions"> Respiratory Problems / Problèmes respiratoires(asthma,bronchitis)
                        </label>
                        </label>
                        <label for="Deafness">
                            <input type="checkbox" id="Deafness" value="Deafness" wire:model="medical_Questions"> Deafness / Surdité
                        </label>
                        </label>
                        <label for="Visual">
                            <input type="checkbox" id="Visual" value="Visual" wire:model="medical_Questions"> Visual Problems / Problèmes de vue (do you wear glasses?) 
                        </label>
                        </label>
                        <label for="Alcohol">
                            <input type="checkbox" id="Alcohol" value="Alcohol" wire:model="medical_Questions"> Alcohol use/Utilisation d’alcool
                        </label>
                        <label for="Gynecology">
                            <input type="checkbox" id="Gynecology" value="Gynecology" wire:model="medical_Questions"> Gynecology problems/ Problèmes gynécologiques.
                        </label>
                        <label for="Gastrointestinal">
                            <input type="checkbox" id="Gastrointestinal" value="Gastrointestinal" wire:model="medical_Questions"> Gastrointestinal Problems/ Problèmes gastro-intestinales(ucler,diarrhea,constipation)
                        </label><label for="Thyroid">
                            <input type="checkbox" id="Thyroid" value="Thyroid" wire:model="medical_Questions"> Thyroid Problrms/Problèmes de thyroïde
                        </label><label for="Blood">
                            <input type="checkbox" id="Blood" value="Blood" wire:model="medical_Questions"> High Blood Pressure / Hypertension
                        </label><label for="Drug">
                            <input type="checkbox" id="Drug" value="Drug" wire:model="medical_Questions"> Drug Abuse/ abus de drogue
                        </label><label for="Headaches">
                            <input type="checkbox" id="Headaches" value="Headaches" wire:model="medical_Questions"> Headaches or migraines /Maux de téte ou migraines
                        </label><label for="Fainting">
                            <input type="checkbox" id="Fainting" value="Fainting" wire:model="medical_Questions">  Fainting/ Evanouissements
                        </label><label for="Bleeding">
                            <input type="checkbox" id="Bleeding" value="Bleeding" wire:model="medical_Questions"> Bleeding Tendencies/Diathèses hémorragiques
                        </label><label for="Tobacco">
                            <input type="checkbox" id="Tobacco" value="Tobacco" wire:model="medical_Questions"> Tobacco use/Usage de tabac
                        </label><label for="Sexually">
                            <input type="checkbox" id="Sexually" value="Sexually" wire:model="medical_Questions"> Sexually Transmitted Disease / Maladies sexuellement transmissibles 
                        </label>
                     </div>
                     <div class="form-group">
                <label for=""> Others</label>
                <textarea class="form-control" cols="2" rows="2" wire:model="medical_Questions"></textarea>
                </div>
                 </div>
             </div>
         </div>
@endif


{{-- STEP 5 --}}
@if ($currentStep == 5)

<div class="step-five">
             <div class="card">
                 <div class="card-header bg-secondary text-white">Evaluate your physical condition</div>
                 <div class="card-body">
                   How is  your physical condition?
                     <div class="  condition d-flex flex-column align-items-left mt-2">
                         <label for="below">
                             <input type="checkbox" id="below" value="below" wire:model="phy_condition"> Below average
                         </label>
                         <label for="average">
                            <input type="checkbox" id="average" value="average" wire:model="phy_condition"> Average
                        </label>
                        <label for="above">
                            <input type="checkbox" id="above" value="above" wire:model="phy_condition"> Above
                        </label>
                        <label for="excellent">
                            <input type="checkbox" id="excellent" value="excellent" wire:model="phy_condition"> Excellent
                        </label>
                     <span class="text-danger">@error('phy_condition'){{ $message }}@enderror</span>
                 </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> Do you practice sport</label>
                        <select  class="form-control" wire:model="sport">
                               <option value="" selected></option>
                               <option value="yes">yes</option>
                               <option value="none">no</option>
                        </select>
                        <span class="text-danger">@error('sport'){{ $message }}@enderror</span>
                    </div>
                </div>

               <div class="form-group">
                <label for=""> if yes, which one ..?</label>
                <textarea class="form-control" cols="2" rows="2" wire:model="sport"></textarea>
                </div>
             </div>
         </div>
         </div>
@endif



{{-- STEP 6 --}}

@if ($currentStep == 6)
         <div class="step-six">
             <div class="card">
                 <div class="card-header bg-secondary  text-white">Attachments</div>
                 <div class="card-body">
                 Signature, 
                    I certify that the information given in this form is true and the correct to the best of my knowledge, I understand that all this information will be kept confidential except for the authorized medical personnel.
                     <div class="form-group">
                         <label for="image">Plesae upload your image </label>
                         <input type="file" class="form-control" wire:model="image">
                         <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="terms" class="d-block">
                             <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                         </label>
                         <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                     </div>
                 </div>
             </div>
@endif

         <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
        

         @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4|| $currentStep == 5 || $currentStep == 6)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif
            
            @if ($currentStep == 6)
                 <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif
         </div>
         </div>
</form>

