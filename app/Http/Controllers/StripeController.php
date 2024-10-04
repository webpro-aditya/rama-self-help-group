<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{

    protected $stripeTestMode;
    protected $stripeKey;
    protected $stripeSecret;

    public function __construct()
    {
        $this->stripeTestMode = config('constants.stripe_test_mode');
        $this->stripeKey = $this->stripeTestMode ? config('constants.stripe_test_key') : config('constants.stripe_key');
        $this->stripeSecret = $this->stripeTestMode ? config('constants.stripe_test_secret') : config('constants.stripe_secret');
    }

    public function checkout($id)
    {
        $stripe = new Stripe\StripeClient($this->stripeSecret);

        $product = Product::find($id);

        $price = $this->createStripePrice($product);

        $checkout = $stripe->checkout->sessions->create([
            'success_url' => route('page.thanks'),
            'line_items' => [
                [
                    'price' => $price->id,
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
        ]);

        return redirect()->to($checkout->url);
    }

    private function createStripePrice($product)
    {
        $stripe = new Stripe\StripeClient($this->stripeSecret);
        $price = $stripe->prices->create([
            'currency' => 'inr',
            'unit_amount' => $product->price * 100,
            'product_data' => ['name' => $product->name]
        ]);
        return $price;
    }
}
