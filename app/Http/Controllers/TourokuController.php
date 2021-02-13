<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Flag;

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
        $isFlag = 0;

        if ($user->userCheck($name, $pass)) {
            $id = $user->generateId();
            $user->tableInsert($id, $name, $pass);

            $user->User($id, $name, $pass);
            
            $flag = new Flag($isFlag);
            $request->session('user', $user);
            return view('tourokuResult', compact('user', 'flag'));
        }
        $isFlag = 1;
        $flag = new Flag($isFlag);
        return view('tourokuResult', compact('flag'));

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
