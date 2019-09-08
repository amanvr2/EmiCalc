<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Emicontroller extends Controller
{
    public function submit(Request $request )
    {
        $loan = $request->input('loan');
        $intrestRate = $request->input('rate');
        $tenure = $request->input('tenure');
        $intrestRate = ($intrestRate / 1200);
        $tenure = $tenure * 12;
        $result_emi = ($loan * $intrestRate * pow((1 + $intrestRate), $tenure)) / (pow((1 + $intrestRate), $tenure) - 1);
        $openingPrincipal = $loan;
        $closingPrincipal = $loan;
        $monthlyEMI = round($result_emi, 2);
        $monthlyIntrest = round($openingPrincipal * $intrestRate, 2);
        $monthlyPrincipal = $monthlyEMI - $monthlyIntrest;
        $closingPrincipal = $openingPrincipal - $monthlyPrincipal;
        $tenure = $tenure - 1;
        echo("your EMI is: ".$monthlyEMI."<br>");
        echo ' opening principal '.$openingPrincipal.' EMI '.$monthlyEMI.' Principal '.$monthlyPrincipal.' monthlyIntrest '.$monthlyIntrest.' closing principal '.$closingPrincipal.'<br/>';
        while ($tenure > 0) {
            $tenure = $tenure - 1;
            $openingPrincipal = $closingPrincipal;
            $monthlyIntrest = round($openingPrincipal * $intrestRate, 2);
            $monthlyPrincipal = $monthlyEMI - $monthlyIntrest;
            $closingPrincipal = $openingPrincipal - $monthlyPrincipal;
            $closingPrincipal = round($closingPrincipal, 2);
            if ($closingPrincipal < 0.05) {
                $closingPrincipal = 0;
            }
            echo ' opening principal '.$openingPrincipal.' EMI '.$monthlyEMI.' Principal '.$monthlyPrincipal.' monthlyIntrest '.$monthlyIntrest.' closing principal '.$closingPrincipal.'<br/>';
        }
    }

    
}
