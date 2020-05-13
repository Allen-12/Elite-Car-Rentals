<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;

class BillingPDF extends Controller
{
    //

    function generate()
    {
    	$pdf = PDF::loadView('pdf');

    	return $pdf->stream('bill.pdf');
    }
}
