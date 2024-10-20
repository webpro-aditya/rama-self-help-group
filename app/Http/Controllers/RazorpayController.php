<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class RazorpayController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($id)
    {        
        $productId = decrypt($id);
        $product = Product::find($productId);
        return view('frontend.razorpayView', ['product' => $product]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api("rzp_test_RDSdt5JqgmuM39", "RMaqDg8oPHnAeMBE1Oa5msbi");
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
          
        Session::put('success', 'Payment successful');
        return redirect()->route('page.thanks');
    }
}
