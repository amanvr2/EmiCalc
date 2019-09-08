@extends('layouts.master')
@section('calc')
<h1>EMI Calculator</h1>
<br>
<br>

 <form action="emi-calc/submit" method="POST"  >
    
<div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="loan">Loan In INR : </label>
    <input type="text" class="form-control" name="loan" id="loan" placeholder=" INR" /><br><br>
    <label for="rate">Rate P/A : </label>
    <input type="text" class="form-control" name="rate" placeholder="%" /><br><br>
    <label for="tenure">Tenure (yr) </label>
    <input type="text" class="form-control" name="tenure" placeholder="Years" /><br><br>
    <button class="btn btn-success" type="submit"  name = "submit">Submit</button><br>
 </form>
</div>

@endsection