@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Perscription')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All prescription </h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('perscription.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add New prescription
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Student ID</th>
                        <th class="pt-0">Student Name </th>
                        <th class="pt-0">School Name</th>
                        <th class="pt-0">Malady</th>
                        <th class="pt-0">medication Name</th>
                        <th class="pt-0">decsription </th>

                        <th class="pt-0">Doctor Name</th>

                        <th class="pt-0">prescription At</th>
                        <th class="pt-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prescriptions as $index => $prescription)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$prescription->student_id}}</td>
                            <td>{{$prescription->student_name}}</td>
                            <td>{{$prescription->school_name}}</td>
                            <td>{{$prescription->malady}}</td>
                            <td>{{$prescription->medication}}</td>
                            <td>{{$prescription->decsription}}</td>

                            <td>{{$prescription->doctor_name}}</td>
                            <td>{{ $prescription->created_at }}</td>
                            <td>
                                <form action="{{ route('perscription.destroy',$prescription->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{route('perscription.show', $prescription->id)}}"><i data-feather="eye"></i> Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('perscription.edit', $prescription->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>
@endsection