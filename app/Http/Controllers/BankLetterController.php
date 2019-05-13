<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class BankLetterController extends Controller
{
    //
    public function generateBankLetter(Request $request){
        $bankLetterData = $request;

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // pass view file
        $pdf = PDF::loadView('bank-letter',compact('bankLetterData'))->setPaper('a4', 'potrait');
        // download pdf
        return $pdf->download('bank-letter.pdf');

        // return view('bank-letter')->with(compact('bankLetterData'));
    }
}
