@extends('Session.Layouts.style')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="">
                <form action="{{route('saveSession')}}" method="POST">
                    @csrf

                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                    @endif

                    @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                    @endif


                    <div class="mt-2">
                        <label for="">Name</label>
                    <input type="name" name="name" id="" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="">Address</label>
                    <input type="text" name="address" id="" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="">PhoneNumber</label>
                    <input type="number" name="phone" id="" class="form-control">
                    </div>

                    <div class="mt-4 float-end">
                        <input type="submit" value="Save" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
