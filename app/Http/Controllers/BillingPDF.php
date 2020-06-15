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

use App;
use PDF;

class BillingPDF extends Controller
{
	public function attachment_email() {
      $data = array('name'=>"Elite Car Rentals");
      $pdf = PDF::loadView('mails.mymail',$data);

      Mail::send('mail', $data, function($message) use($pdf){
         $message->to('nkirote.mutabari@gmail.com', 'Peter Pan')->subject
            ('Invoice - Elite Car Rentals ');
     
         $message->attachData($pdf->output(),"Invoice.pdf");

         $message->from('babygirllove396@gmail.com','Elite Car Rentals');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}