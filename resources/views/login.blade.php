@extends('layouts.master')
@section('calc')

<div class="container">
    
    <h1> WELCOME TO LOG IN PAGE</h1>
    <br>
    <form action="/log-in/chat" method="POST">
      <div class="forms">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="username"> Username</label>
        <input class="form-control"id="username" type="email" name="username" placeholder="username@email.com" required>
        <br>
        <label for="password"> Password</label>
        <input class="form-control"id="password" type="password" name="password" required>
        <input type="checkbox">
        <small class="form-text text-muted"> remember me</small>
        <br><button class="btn btn-success btn-lg" type="submit" name="submit"> log in</button>
      </div>
        
    
    </form>
</div>



@endsection