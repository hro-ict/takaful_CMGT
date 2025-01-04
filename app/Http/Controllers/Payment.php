<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class Payment extends Controller
{
    public function  __construct() {
        Mollie::api()->setApiKey('test_nQHKrCfqTr9hsUzaVyhJBKQJWRUg4N'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment($amount, $desc)
    {   
        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => $amount, // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => $desc, 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);
    
        $payment = Mollie::api()->payments()->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess() {
        //echo 'payment has been received';
        

         return redirect()->to("/payment_success");

    }
}
