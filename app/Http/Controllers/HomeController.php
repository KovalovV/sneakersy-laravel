<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feedback = new Feedback();
        $product = new Product();

        $most_popular = $product::orderBy('shoppings', 'DESC')->get();
        return view('home', ['feedbacks' => $feedback->all(), 'products' => $product->all(), 'most_popular' => $most_popular]);
    }
}
