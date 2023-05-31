<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function tinh(Request $request)
    {
        $number1= $request -> input('soA');
        $number2= $request -> input('soB');
        $result =$number1 + $number2;
        return view('test',['result' => $result]);
    }

}
