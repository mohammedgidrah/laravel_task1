<?php
namespace App\Http\Controllers;

use App\Models\Product; 

use Illuminate\Http\Request;
use App\Http\Controllers\Products;


class ProductController extends Controller
{
    public function test()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Pass the products to the view
        return view('product', compact('products'));
    }
}
