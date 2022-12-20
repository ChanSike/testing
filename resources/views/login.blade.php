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
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header text-center fs-3">
                    Login Page
                </div>

                <form action="{{route('userLogin')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        {{-- session message --}}
                        @if (Session::has('loginSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('loginSuccess')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        @endif

                        @if (Session::has('loginFail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{Session::get('loginFail')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        @endif

                        <div class="mb-3 px-5">
                            <label for="">Email</label>
                            <input type="email" name="email"  class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control">
                        </div>
                        <div class="float-end px-5 mb-3">
                            <input type="submit" value="Login" class="btn bg-dark text-white">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
