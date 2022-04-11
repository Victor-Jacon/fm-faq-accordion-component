<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReviews;

class ProductReviewsController extends Controller
{
    public function index()
    {
        $productReviews = ProductReviews::all();
        return view('livewire.wirecutter-clone')->with('productReviews', $productReviews);
    }
}
