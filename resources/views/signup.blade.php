@extends('layouts.master')
@section('calc')


<form action="/sign-up/insert" method="POST">
  
   <div class="container">
    <div class="jumbotron">
    <h1> Course Sign up page </h1>
    <h5> please note : first name, last name, email and password are required </h5>
    
    <div class="form group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="frst"> First name :</label>
        <input class="form-control" type="text" name="firstname" placeholder="first name"required>
        <label for="lst"> last name :</label>
        <input class="form-control" type= "text" name="lastname" placeholder="last name"required>
         <p></p>
        <label for="mail"> Email :</label>
        <input class="form-control" type="email" name="username" placeholder="name@email.com"required>
        <label for="pss"> Password</label> :
        <input class="form-control" type ="password" name="password" value=""required>
        <br>
        <button class="btn btn-warning btn-lg" type="submit" name="submit"> sign up</button>
      
        
    </div>
 
      </div>
    </div>
</form>

@endsection
    