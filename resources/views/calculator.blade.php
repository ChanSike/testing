<!DO
CTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{route('calculator#calculate')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="">Number 1</label>
                        <input type="digit" name='numberOne' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Number2</label>
                        <input type="digit" name='numberTwo' class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Number2</label>
                        <select class="form-control" name="operator" ">
                            <option value="empty">Choose Option</option>
                            <option value="add">+</option>
                            <option value="minus">-</option>
                            <option value="multi">*</option>
                            <option value="division">/</option>
                        </select>
                    </div>

                    <div class="mb-3 float-end">
                        <input type="submit" value="calculate" class="btn btn-dark text-center">
                    </div>


                </form>

                <div class="mt-5">
                    @if (Session::has('result'))
                    <h1 class="text-danger">{{Session::get('result')}}</h1>

                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
