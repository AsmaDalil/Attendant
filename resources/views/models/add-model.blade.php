<div class="modal fade addPerscription" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Perscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="save">
                     <div class="form-group">
                         <label for="">school</label>
                         <select class="form-control" wire:model="school">
                               <option value="">No selected</option>
                               @foreach ($schools as $school)
                                   <option value="{{ $school->id }}">{{ $school->school_name }}</option>
                               @endforeach
                               
                         </select>
                         <span class="text-danger"> @error('school') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Student ID</label>
                         <input type="text" class="form-control" placeholder="student Id" wire:model="student_id">
                         <span class="text-danger"> @error('student_id') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Student Name</label>
                         <input type="text" class="form-control" placeholder="student name" wire:model="student_name">
                         <span class="text-danger"> @error('student_name') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Illness</label>
                         <input type="text" class="form-control" placeholder="malady" wire:model="malady">
                         <span class="text-danger"> @error('malady') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Medication</label>
                         <input type="text" class="form-control" placeholder="medication" wire:model="medication">
                         <span class="text-danger"> @error('medication') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Decsription</label>
                         <input type="text" class="form-control" placeholder="decsription" wire:model="decsription">
                         <span class="text-danger"> @error('decsription') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Doctor Name</label>
                         <input type="text" class="form-control" placeholder="doctor_name" wire:model="doctor_name">
                         <span class="text-danger"> @error('doctor_name') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary btn-sm">Save</button>
                     </div>
                 </form>
                
            </div>
        </div>
    </div>
</div>


