<div>
<div>
 
 <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddPerscriptionModal()">Add New perscription</button>
 <div>
    @if ($checkedPerscription)
         <button class="btn btn-danger" wire:click="deletePerscriptions()">Selected perscriptions ({{ count($checkedPerscription) }})</button>
    @endif
 </div>
 <table class="table table-hover">
     <thead class="thead-inverse">
         <tr>
             <th></th>
             <th>school</th>
             <th>Student Name</th>
             <th>Student ID</th>
             <th>Student illness</th>
             <th>Perscription</th>
             <th>Description</th>
             <th>Doctor Name</th>
             <th>Actions</th>
             <th></th>
         </tr>
         </thead>
         <tbody>
         
             @forelse ($perscriptions as $perscription)
                 <tr class="{{ $this->isChecked($perscription->id) }}">
                 <td><input type="checkbox" value="{{ $perscription->id }}" wire:model="checkedPerscription"></td>
                 <td>{{ $perscription->school->school_name }}</td>
                 <td>{{ $perscription->student_name }}</td>
                 <td>{{ $perscription->student_id }}</td>
                 <td>{{ $perscription->malady }}</td>
                 <td>{{ $perscription->decsription }}</td>
                 <td>{{ $perscription->doctor_name }}</td>

 
                 <td>
                     <div class="btn-group">
                         <button class="btn btn-danger btn-sm" wire:click="deleteConfirm({{$perscription->id}})">Delete</button>
                         <button class="btn btn-success btn-sm" wire:click="OpenEditPerscriptionModal({{$perscription->id}})">Edit</button>
                     </div>
                 </td>
             </tr>
             @empty
                 <code>No perscription found!</code>
             @endforelse
             
         </tbody>
 </table>
 @if (count($perscriptions))
     {{ $perscriptions->links('livewire-pagination-links') }}
 @endif
 @include('modals.add-modal')
 @include('modals.edit-modal')
</div>
</div>
