<!DO
CTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>
   <div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 text-center mt-5">
            <a href="{{url('pageOne')}}"><button class="btn btn-danger mx-3">Home</button></a>
            <a href="{{url('pageTwo')}}"><button class="btn btn-success mx-3">Service</button></a>
            <a href="{{url('pageThree')}}"><button class="btn btn-primary mx-3">Contect</button></a>
        </div>
    </div>

    @yield('content')
   </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
