@extends('dashboards.admins.layouts.admin-dash-layout')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Detail  of the student</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('students.records')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All students
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="#" method="POST">
            <div class="mb-3">
                    <label for="given_name" class="form-label">Student First  Name</label>
                    <input value="{{$student->given_name}}" disabled id="name" name="given_name" type="text" class="form-control" placeholder="student given name">
                </div>
                <div class="mb-3">
                    <label for="middle_name" class="form-label">Student Middle Name</label>
                    <input value="{{$student->middle_name}}" disabled id="name" name="middle_name" type="text" class="form-control" placeholder="student middle name">
                </div>
                <div class="mb-3">
                    <label for="family_name" class="form-label">Student Family Name</label>
                    <input value="{{$student->family_name}}" disabled id="name" name="family_name" type="text" class="form-control" placeholder="student family name">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Student Gender</label>
                    <input value="{{$student->gender}}" disabled id="name" name="gender" type="text" class="form-control" placeholder="student gender ">
                </div>
                <div class="mb-3">
                    <label for="date_Birth" class="form-label">Student Birth date</label>
                    <input value="{{$student->date_Birth}}" disabled id="name" name="date_Birth" type="text" class="form-control" placeholder="student date of birth">
                </div>
                <div class="mb-3">
                    <label for="place_Birth" class="form-label">Student Place date</label>
                    <input value="{{$student->place_Birth}}" disabled id="name" name="place_Birth" type="text" class="form-control" placeholder="student place of birth">
                </div>
                <div class="mb-3">
                    <label for="familial_situation" class="form-label">Student family situation</label>
                    <input value="{{$student->familial_situation}}" disabled id="name" name="familial_situation" type="text" class="form-control" placeholder="student  family situation">
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Student weight</label>
                    <input value="{{$student->weight}}" disabled id="name" name="weight" type="text" class="form-control" placeholder="student weight">
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Student height</label>
                    <input value="{{$student->height}}" disabled id="name" name="height" type="text" class="form-control" placeholder="student height">
                </div>
                <div class="mb-3">
                    <label for="permanent_address" class="form-label">Student Permanent Address</label>
                    <input value="{{$student->permanent_address}}" disabled id="name" name="permanent_address" type="text" class="form-control" placeholder="student permanent address">
                </div>
                <div class="mb-3">
                    <label for="country_citizenship" class="form-label">Student Citizenship</label>
                    <input value="{{$student->country_citizenship}}" disabled id="name" name="country_citizenship" type="text" class="form-control" placeholder="student country citizenship">
                </div>
                <div class="mb-3">
                    <label for="id_card_num" class="form-label">Student Id Card Number</label>
                    <input value="{{$student->id_card_num}}" disabled id="name" name="id_card_num" type="text" class="form-control" placeholder="student id_card_num">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Student status</label>
                    <input value="{{$student->status}}" disabled id="name" name="status" type="text" class="form-control" placeholder="student status">
                </div>
                <div class="mb-3">
                    <label for="name1_Em" class="form-label">Student Emergency</label>
                    <input value="{{$student->name1_Em}}" disabled id="name" name="name1_Em" type="text" class="form-control" placeholder="student Emergency">
                </div>
                

                <div class="mb-3">
                    <label for="image" class="form-label">student Image</label>
                    <div>
                        <img class="mt-2" src="/img/{{ $student->image }}" width="300px">
                    </div>
                </div>

                

            </form>
        </div>

    </div>

@endsection