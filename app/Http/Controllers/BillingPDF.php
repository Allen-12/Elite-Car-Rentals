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
use Illuminate\Support\Facades\Session;

use App;
use PDF;
use App\User;
class BillingPDF extends Controller
{
	public function attachment_email()
    {
        $sessionData = session()->all();
        $data = array('name'=>"Elite Car Rentals");
        $pdf = PDF::loadView('mails.mymail',$data);

        $userData = Auth::user()->all();

        Mail::send('mail', $data, function($message) use($pdf)
        {
            $message->to(Auth::user()->email, Auth::user()->last_name)->subject
            ('Invoice - Elite Car Rentals ');

            $message->attachData($pdf->output(),"Invoice.pdf");

            $message->from('elitecarrentals.2020@gmail.com','Elite Car Rentals');
        });

        return view('mails.response');
   }

   public function getData(Request $request)
   {
       # code...

       $response = $request->pickDate;

       $tot = $request->total;
       $days = $request->days;
       $desc= $request->desc;
       $dropDate = $request->dropDate;
       $dropLocation = $request->dropOffLocation;
       $pickUpLocation=$request->pickUpLocation;
       $basePrice = $tot/$days;
       $service = 1500;
       $g_total = $service+$tot;

       $sessionData = session()->all();

       \request()->session()->put('pickDate', $response);
       \request()->session()->put('pickLocation', $pickUpLocation);
       \request()->session()->put('dropDate', $dropDate);
       \request()->session()->put('desc', $desc);
       \request()->session()->put('totalPay', $tot);
       \request()->session()->put('days', $days);
       \request()->session()->put('basePrice', $basePrice);
       \request()->session()->put('service', $service);
       \request()->session()->put('gtotal', $g_total);

       // var_dump($sessionData['pickDate']);

       echo json_encode($response);

   }

}
