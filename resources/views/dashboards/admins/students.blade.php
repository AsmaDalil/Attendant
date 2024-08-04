@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Students')

@section('content')

<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://industries.ma/wp-content/uploads/2020/07/al-akhawayn.jpg');
        height: 500px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        ">
    
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Students List</h2>
          </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="d-grid gap-2  col-6 mx-auto">
            <a class="btn btn-primary" href="{{ route('form') }}">Form </a>
          
            <a class="btn btn-info" href="{{ route('students.records') }}">List </a>
          </div>
          

 
</div>
            
    </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection