<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Redirect;

use Illuminate\Http\Request;
// use Auth;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{   

    public function login()
    {
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,'laravel') or die("plz check database");
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=mysqli_query($con,"select * from users where username='$username' and password='$password'");
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            return view('chat');
        }
        else{
            echo"<script>alert('user and pass not valid')</script>";
        }
    }


    // $rules = array(
    //     'username'    => 'required|email', // make sure the email is an actual email
    //     'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    // );
    
    //     $userdata = array(
    //         'username'     => Input::get('username'),
    //         'password'  => Input::get('password')
    //     );
    
    //     // attempt to do the login
    //     if (Auth::attempt($userdata)) {
    
    //         // validation successful!
    //         // redirect them to the secure section or whatever
    //         // return Redirect::to('secure');
    //         // for now we'll just echo success (even though echoing in a controller is bad)
    //         echo 'SUCCESS!';
    
    //     } else {        
    
    //         // validation not successful, send back to form 
    //         // return Redirect::to('login');
    //         return view('login');
    
    //     }
    
    }
    }


