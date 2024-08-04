<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration success!</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
        <div class="card-header bg-success text-white">Registration complete</div>
        <div class="card-body">
            Hello <b>{{ request()->name }}</b>, thank you for joining us, soon we will approve your registration. </br>
            When your account approved, you will receive your credentials on <b>{{ request()->id_card_num }}</b> </br>
            Thank you </br></br>
            <a href="/form" class="btn btn-sm btn-primary">Back to home</a>
        </div>
    </div>
</body>
</html>