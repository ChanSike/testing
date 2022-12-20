@extends('Session.Layouts.style')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header text-center">
                    User Infomation
                </div>

                <div class="card-body">


                    @if($userInfo != null)

                        <div class="mt-3">
                            <label for="">Name : {{$userInfo['name']}}</label>
                        </div>
                        <div class="mt-3">
                            <label for="">Email: {{$userInfo['email']}}</label>
                        </div>
                        <div class="mt-3">
                            <label for="">Address: {{$userInfo['address']}}</label>
                        </div>
                        <div class="mt-3">
                            <label for="">Phone Number: {{$userInfo['phone']}}</label>
                        </div>


                    @else

                    <div class="text-center">
                        There is no data........
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
