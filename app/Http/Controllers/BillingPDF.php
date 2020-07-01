<?php
/*namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;
use PDF;
class BillingPDF extends Controller
{
    function generate()
    {
    	$pdf = PDF::loadView('pdf');
    	return $pdf->stream('bill.pdf');
    }
}*/
namespace App\Http\Controllers;
ini_set('max_execution_time', 300); // 5 minutes

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App;
use PDF;
use App\User;
class BillingPDF extends Controller
{
	public function attachment_email()
    {
      $data = array('name'=>"Elite Car Rentals");
      $pdf = PDF::loadView('mails.mymail',$data);

    

     Mail::send('mail', $data, function($message) use($pdf)
     {
        $message->to(Auth::user()->email, Auth::user()->last_name)->subject
           ('Invoice - Elite Car Rentals ');

        $message->attachData($pdf->output(),"Invoice.pdf");

        $message->from('elitecarrentals.2020@gmail.com','Elite Car Rentals');
     });
     
       return view('mails.response');
   }
}
