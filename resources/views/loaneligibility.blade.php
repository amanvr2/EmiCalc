@extends('layouts.master')
@section('calc')
<h1>Loan Eligibility Calculator</h1>
<br>
<br>

<form action="loan-eligibility/result" method="POST"  >
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="salary">Salary In INR : </label>
    <input type="text" class="form-control" name="salary" id="salary" placeholder=" INR" /><br><br>
    <label for="rate">Interest Rate : </label>
    <input type="text" class="form-control" name="rate" id="rate" placeholder="%" /><br><br>
    <label for="tenure">Tenure (yr): </label>
    <input type="text" class="form-control" name="tenure" id="tenure" placeholder="years" /><br><br>
    <button class="btn btn-success" type="submit"  name = "result">Submit</button><br>
    </div>
</form>
@endsection