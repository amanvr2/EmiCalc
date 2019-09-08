<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loancontroller extends Controller
{
    public function loaneligibility()
    {
        $salary=$_POST['salary'];
        $rate=$_POST['rate'];
        $tenure=$_POST['tenure'];
        $tenure = $tenure * 12;
        $r= $rate/1200;
        $salary=$salary/12;
        $emi= $salary/2;
        $loan= ($emi*(pow((1+$r),$tenure)-1))/($r*pow((1+$r),$tenure));
        echo " Loan can be given: ",$loan;

    }
}
