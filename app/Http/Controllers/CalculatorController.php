<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //calculator home page
    public function index()
    {
        return view('calculator');
    }

    //calculate process
    public function calculate(Request $request)
    {
        $data=$this->getSumData($request);
        $response=$this->calculateProcess($data);
        return back()->with(['result'=>$response]);


    }

    //request client data
    private function getSumData($request)
    {
        return[
            'num1'=>$request->numberOne,
            'num2'=>$request->numberTwo,
            'operator'=>$request->operator,
        ];
    }

    private function calculateProcess($data)
    {
        $result="";

        switch($data['operator'])
        {
            case 'empty':$result='Choose Operator.....';
            break;
            case 'add':$result=$data['num1']+$data['num2'];
            break;
            case 'minus':$result=$data['num1']-$data['num2'];
            break;
            case 'multi':$result=$data['num1']*$data['num2'];
            break;
            case 'division':$result=$data['num1']/$data['num2'];
            break;
           default:$result='error';
            break;
        }

        return $result;
    }
}
