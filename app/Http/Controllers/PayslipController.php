<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\FormatFormData;
use Illuminate\Support\Facades\View;

use PDF;

class PayslipController extends Controller
{
    //Generate Payslip
    public function getPaySlip(Request $request){
        $formatDataObj = new FormatFormData();
        $formatDataObj->setData($request);
        $paySlipData = $formatDataObj->getData();

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // pass view file
        $pdf = PDF::loadView('payslip',compact('paySlipData'))->setPaper('a4', 'potrait');
        // download pdf
        return $pdf->download('payslip.pdf');
      
    }
   
}
