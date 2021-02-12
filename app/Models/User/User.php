<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    private $id;
    private $name;
    private $pass;
    
    public function User($id,$name,$pass){
        $this->id = $id;
        $this->name = $name;
        $this->pass = $pass;
    }
    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getPass(){return $this->pass;}
    
    public function getData()
    {
        return $this->id.':'.$this->name;
    }
    
    public function userCheck($name,$pass){
        if($name != "" && $pass != 0){return true;}
        else return false;
    }
    
    public function generateId(){
        $id = mt_rand(10000000,99999999);
        return $id;
    }
    
    public function tableSelect($name,$pass){
        
    }
    
    public function tableInsert($id,$name,$pass){
        DB::table('users')->insert([
            'id'=>$id,
            'name'=>$name,
            'pass'=>$pass
        ]);
    }
}
