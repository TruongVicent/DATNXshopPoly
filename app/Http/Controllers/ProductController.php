<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\ProductVariation;
use App\Models\ProductVariationValue;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $itemsPerPage = $request->input('items_per_page', 9);
        $products = Product::paginate($itemsPerPage);
        $Categories = Category::all();
        $Brands = Brand::all();
        $productVariations = ProductVariation::all();
        $productProductVariationValue = ProductVariationValue::all();
        foreach ($products as $product) {
            $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();
            $product->main_image = $productMedia ? $productMedia->media : null;
        }
        return view('layouts.product', [
            'products' => $products,
            'Brands' => $Brands,
            'Categories' => $Categories,
            'productVariations' => $productVariations],
            compact('products', 'itemsPerPage'));
    }

    public function filter(Request $request)
    {
        $categoryId = $request->input('category_id');
        $brandId = $request->input('brand_id');

        $query = Product::query();

        if ($categoryId) {
            $query->whereHas('category', function ($q) use ($categoryId) {
                $q->where('id', $categoryId);
            });
        }

        if ($brandId) {
            $query->whereHas('brand', function ($q) use ($brandId) {
                $q->where('id', $brandId);
            });
        }

        $products = $query->paginate(9);

        return view('layouts.product', compact('products', 'Categories', 'Brands'));
    }

}

