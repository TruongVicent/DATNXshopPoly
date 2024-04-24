<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMedia;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $Categories = Category::all();
        $Brands = Brand::all();
        foreach ($products as $product) {
            $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();

            $product->main_image = $productMedia ? $productMedia->media : null;
        }
        return view('layouts.product', ['products' => $products, 'Brands' => $Brands, 'Categories' => $Categories]);
    }

}

