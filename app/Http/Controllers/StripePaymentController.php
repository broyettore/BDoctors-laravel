<?php

namespace App\Http\Controllers;

use App\Models\Sponsorship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $sponsorship = Sponsorship::find($request['sponsorship']);

        return view('stripe', compact('sponsorship'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        // dd($request);

        $sponsorshipInput = $request->input('sponsorship');
        $sponsorship = Sponsorship::find($sponsorshipInput);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => 100 * $sponsorship->price,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment BDoctors"
        ]);

        $user = auth()->user();
        
        $end_date = date("Y-m-d H:i:s", strtotime("+{$sponsorship->duration} hours"));
        $syncData = array_fill_keys([$sponsorshipInput], ['end_date' => $end_date]);

        $user->doctor->sponsorships()->attach($syncData);

        return redirect('/admin')->with('user');  

        return view('admin.user.show', compact('user'));
    }
}
