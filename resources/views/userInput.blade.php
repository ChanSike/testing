<!DO
CTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('cal')}}" method="POST">
        @csrf
        Number1 : <input type="number" name="num1" ><br>
        Number2 : <input type="number" name="num2"><br>
        <input type="submit" value="sum">

        @if (Session::has('result'))
            {{Session::get('result')}}

        @endif

    </form>
</body>
</html>
