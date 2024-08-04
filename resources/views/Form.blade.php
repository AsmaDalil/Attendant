
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Form</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#BtnNext').click(function() {
                $('#form1').hide('fast', function() {
                    $('#form2').show('fast');
                });
            });
        });
    $(document).ready(function() {
            $('#btnPrev').click(function() {
                $('#form2').hide('fast', function() {
                    $('#form1').show('fast');
                });
            });
        });
        $('.datepicker').datepicker({
  labelMonthNext: 'Go to the next month',
  labelMonthPrev: 'Go to the previous month',
  labelMonthSelect: 'Pick a month from the dropdown',
  labelYearSelect: 'Pick a year from the dropdown',
  selectMonths: true,
  selectYears: true
})
</script> 

    <style>
.button {
  background-color: #FFD700;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


</style> 

        
    </style>
    @livewireStyles
    </head>
    <body class="p-5 m-5" style="width: 90%; background-color: #80808017;">
       
        <center ><style>
                    img {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    }
                    #myDiv {
                    border: 1px solid #FF0000;
                    }
                    
                </style>
            <img src="https://www.maroccampus.com/ma/images/schools/student/logo-aui.png" alt="Trulli" width="200" height="100">
            <p class="text-center ">AUI Heath Center </p>
            <p class="font-weight-bold">Patient Medical History Form</p>
            <div id="myDiv" style="margin:1cm 2cm 0.5cm 3cm;">***All information on this form is kept strictly confidential***</div>
        </center>
        <!-- end Head  -->
        @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif

        <!-- Form - START -->
        @livewire('multi-step-form')
        

        <!-- Form - END -->

        <!-- Navigation Button - START -->
        <!--div class="ml-25 border rounded m-5 p-5" style="width: 100%; background-color: white;">
            {{-- <button type="button" class="btn btn-primary float-right p-1" src="questionaireStag.php" onclick="nextPrev(1)" id="nextBtn">suivant</button>
            <button type="button" class="btn btn-warning float-right p-1" src="annonceStag.php" onclick="nextPrev(-1)" id="btnPrev">Precedant</button> --}}
            {{-- <button type="button" class="btn btn-warning float-right p-1" src="annonceStag.php" onclick="nextPrev(-1)">Precedant</button> --}}
        </div-->
        <!--  Navigation Button - END -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
        <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
        <script src="https://unpkg.com/dropzone"></script>
        <script src="https://unpkg.com/cropperjs"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

        <!-- Js code for modale Cropper Image -->
        <script type="test/javascript" src="assets/js.js"></script>

        {{-- PDF js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.10.100/pdf.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.10.100/pdf.worker.min.js" ></script>
        @livewireScripts
    </body>
</html>



