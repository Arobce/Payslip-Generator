<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::post('/generate-payslip','PaySlipController@getPaySlip')->name('generate-payslip');

Route::get('/bank-letter',function(){
    return view('bank-form');
});

Route::post('/generate-bank-letter','BankLetterController@generateBankLetter')->name('generate-bank-letter');