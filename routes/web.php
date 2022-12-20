<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Admin\AdminController;






Route::get('/', function () {
    return view('welcome');
});

//ex-5
Route::get('home',function()
{
    dd('home page');
});

//ex-6
Route::get('info/{name}/{age}',function($name,$age)
{
    dd($name.$age);
});

//ex-7
Route::get('home',function()
{
    return view('home');
});

Route::get('contact',function()
{
    return view('user.contact');
});

//ex-8 and ex-9 and ex-10
Route::get('user',function()
{
    return view('userInput');
})->name('sumPage');

Route::post('calculate',function(Request $request){
    $numberOne=$request->num1;
    $numberTwo=$request->num2;
    $result=$numberOne+$numberTwo;
    return back()->with(["result"=>$result]);
    // return redirect()->route('sumPage')->with(['result'=>$result]);
})->name('cal');

//ex-12
Route::get('login',function(){
    return view('login');
});

Route::post('loginProcess',function(Request $request)
{
    $email='admin@gmail.com';
    $password='admin123';

    $userEmail=$request->email;
    $userPassword=$request->password;

    if($email==$userEmail && $password==$userPassword)
    {
        return back()->with(['loginSuccess'=>"Account login succefully!"]);
    }
    else{
        return back()->with(['loginFail'=>'Account login fail!']);
    }
})->name('userLogin');

//ex-13
Route::get('pageOne',function()
{
    return view('pageOne');
});
Route::get('pageTwo',function()
{
    return view('pageTwo');
});
Route::get('pageThree',function()
{
    return view('pageThree');
});

//ex-14 && ex-15 && ex-16
Route::get('sessionPut',function()
{
    return view('Session.put');
})->name('put');

Route::get('sessionShow',function()
{
    //ex-14
    // $data=Session::get('USER_DATA');
    // dd($data);

    //ex-15
//     $data=Session::get('USER_DATA');
//     return view('Session.show')->with(['userInfo'=>$data]);

    //ex-16
    if(Session::has('USER_DATA'))
    {
        $data=Session::get('USER_DATA');
    }
    else{
        $data=null;
    }
    return view('Session.show')->with(['userInfo'=>$data]);

})->name('show');


Route::post('saveSession',function(Request $request)
{
    //array
    $data=[
        'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone'=>$request->phone
    ];
    // dd($data['name']);

    if( $data['name'] !=null && $data['email'] !=null && $data['address'] !=null && $data['phone'] !=null )
    {
        Session::put('USER_DATA',$data);
        return back()->with(['success'=>'User info ']);
    }

    else{
        return back()->with(['error'=>'Please fill all!']);
    }



    //object
    // $data =new stdClass();
    // $data->name=$request->name;
    // $data->email=$request->email;
    // $data->address=$request->address;
    // $data->phone=$request->phone;

    // dd($data->name);
})->name('saveSession');

Route::get('removeSession',function()
{
   if(Session::has('USER_DATA'))
   {
    Session::forget('USER_DATA');
    return redirect('remove')->with(['success'=>'User data deleted....']);
   }
   else
   {
    return redirect('remove')->with(['error'=>'There is no data for deleted....']);
   }
})->name('removeSession');

Route::get('remove',function()
{
    return view('Session.remove');
});


//Controller Lesson
//ex-17
Route::get('customerDetails',[CustomerController::class,'getDetails']);
Route::get('adminDetails',[AdminController::class,'getDetails']);

//ex-19
Route::get('calculator',[CalculatorController::class,'index'])->name('calculator#index');
Route::post('calculate',[CalculatorController::class,'calculate'])->name('calculator#calculate');

//ex-20
Route::group(['prefix'=>'admin'],function()
{
    Route::get('one',[AdminController::class,'one']);
    Route::get('two',[AdminController::class,'two']);
    Route::get('three',[AdminController::class,'three']);
});
