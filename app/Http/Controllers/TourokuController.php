<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Number;

class TourokuController extends Controller
{
    public function index()
    {
        return view('touroku');
    }

    public function touroku(Request $request)
    {
        $pass = 0;
        $name = $request->input('name');
        $p = $request->input('pass');
        if ($p != "") {
            $pass = (int)$p;
        }

        $user = new User();

        if ($user->userCheck($name, $pass) == true) {
            $id = $user->generateId();
            $user->tableInsert($id, $name, $pass);

            $user->User($id, $name, $pass);
            $number = new Number(0);
            $request->session('number', $number);
            $request->session('user', $user);
            return view('tourokuResult', compact('user', 'number'));
        }
        $number = new Number(1);
        $request->session('number', $number);
        return view('tourokuResult', compact('number'));

        // $isFlag = 0;
        // if($a!=0)
        // if(!($a==0))
        // if(!($user->userCheck($name,$pass))){
        //     $id = $user->generateId();
        //     $user->tableInsert($id,$name,$pass);

        //     $user->User($id,$name,$pass);
        //     $isFlag = 0;
        //     $number = new Number($isFlag);
        //     $request->session('number',$number);
        //     $request->session('user',$user);
        //     return view('tourokuResult',compact('user','number'));
        // }
        // $isFlag = 1;
        // $number = new Number($isFlag);
        // $request->session('number',$number);
        // return view('tourokuResult',compact('number'));
    }
}
