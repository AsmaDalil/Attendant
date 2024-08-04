
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('content')

<head>
    <title>Student's Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>

  <!-- Background image -->
 
  <!-- Background image -->

    
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Student's Records</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary">Import student Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                        List Of students
                        <a class="btn btn-danger float-end" href="{{ route('students.export') }}">Export student Data</a>
                    
                </tr>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Card ID Number</th>


                  
                </tr>
                @foreach($students as $student)
                <tr>
                

                    <td>{{ $student->id }}</td>
                    <td>{{ $student->given_name }}</td>
                    <td>{{ $student->middle_name }}</td>
                    <td>{{ $student-> family_name}}</td>
                    <td>{{ $student-> gender}}</td>
                    <td>{{ $student-> id_card_num}}</td>      
                    <td>{{$student->created_at }}</td>
                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>  
                </tr>   
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
@endsection