<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\FormatFormData;

class PayslipController extends Controller
{
    //Generate Payslip
    public function getPaySlip(Request $request){
        $formatDataObj = new FormatFormData();
        $formatDataObj->setData($request);
        return view('payslip')->with('paySlipData',$formatDataObj->getData());
    }
}
