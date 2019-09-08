<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    public function insert(Request $req){

        

        $firstname= $req->input('firstname');
        $lastname= $req->input('lastname');
        $username= $req->input('username');
        $password= $req->input('password');

        $data = array('firstname'=>$firstname,'lastname'=>$lastname,'username'=>$username,'password'=>$password);

        DB::table('aman')->insert($data);

        echo "Success";




    }
}
