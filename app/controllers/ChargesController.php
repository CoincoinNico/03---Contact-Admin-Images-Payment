<?php

class ChargesController extends BaseController {

	public function payment()
	{
		// Use the config for the stripe secret key
		Stripe::setApiKey(Config::get('stripe.stripe.secret'));

		// Get the credit card details submitted by the form
		$token = Input::get('stripeToken');

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		    $charge = Stripe_Charge::create(array(
		      "amount" => 2000, // amount in cents
		      "currency" => "eur",
		      "card"  => $token,
		      "description" => 'Achat du selfie')
		    );

		} catch(Stripe_CardError $e) {
		    $e_json = $e->getJsonBody();
		    $error = $e_json['error'];
		    // The card has been declined
		    // redirect back to checkout page
		    return Redirect::to('pay')
		        ->withInput()->with('stripe_errors',$error['message']);
		}
		// Maybe add an entry to your DB that the charge was successful, or at least Log the charge or errors
		// Stripe charge was successfull, continue by redirecting to a page with a thank you message
		return Redirect::to('pay/success');
	}

}