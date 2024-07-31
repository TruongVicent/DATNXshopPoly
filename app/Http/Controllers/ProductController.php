<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\ProductVariation;
use App\Models\ProductVariationValue;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $itemsPerPage = $request->input('items_per_page', 9);
        $categoryId = $request->input('category_id');
        $brandIds = $request->input('brand_ids', []);
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 500000000); // Set a default max price if not provided
        $sortBy = $request->input('sort', '0'); // Default sorting option

        $query = Product::query();

        $query->select('*')->selectRaw('IF(sale_price IS NOT NULL, sale_price, regular_price) AS displayedPrice');

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if (!empty($brandIds)) {
            $query->whereIn('brand_id', $brandIds);
        }

        if ($minPrice !== null && $maxPrice !== null) {
            $query->havingBetween('displayedPrice', [(float)$minPrice, (float)$maxPrice]);
        } elseif ($minPrice !== null) {
            $query->having('displayedPrice', '>=', (float)$minPrice);
        } elseif ($maxPrice !== null) {
            $query->having('displayedPrice', '<=', (float)$maxPrice);
        }

        switch ($sortBy) {
            case '1':
                $query->orderBy('displayedPrice', 'asc');
                break;
            case '2':
                $query->orderBy('displayedPrice', 'desc');
                break;
            case '3':
                $query->whereNotNull('sale_price')
                    ->orderByRaw('(100 - (sale_price * 100 / regular_price)) DESC');
                break;
            default:
                $query->latest();
                break;
        }

        $products = $query->paginate($itemsPerPage)->appends($request->except('page'));

        $Categories = Category::all();
        $Brands = Brand::all();
        $productVariations = ProductVariation::all();
        $productProductVariationValue = ProductVariationValue::all();
        $maxProductPrice = Product::max('sale_price');

        foreach ($products as $product) {
            $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();
            $product->main_image = $productMedia ? $productMedia->media : null;
            $product->formattedRegularPrice = number_format($product->regular_price, 0, ',', '.');
            $product->formattedSalePrice = number_format($product->sale_price, 0, ',', '.');

            $product->displayedPrice = $product->sale_price ? $product->sale_price : $product->regular_price;
            $product->formattedDisplayedPrice = number_format($product->displayedPrice, 0, ',', '.');
        }

        return view('layouts.product', [
            'products' => $products,
            'Brands' => $Brands,
            'Categories' => $Categories,
            'productVariations' => $productVariations,
            'itemsPerPage' => $itemsPerPage,
            'selectedCategory' => $categoryId,
            'selectedBrands' => $brandIds,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'maxProductPrice' => $maxProductPrice,
            'sortBy' => $sortBy,
        ]);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $itemsPerPage = $request->input('items_per_page', 9);
        $sortBy = $request->input('sort', '0'); // Default sorting option

        $queryBuilder = Product::query();
        $queryBuilder->where('name', 'like', '%' . $query . '%')
            ->select('*')
            ->selectRaw('IF(sale_price IS NOT NULL, sale_price, regular_price) AS displayedPrice');

        switch ($sortBy) {
            case '1':
                $queryBuilder->orderBy('displayedPrice', 'asc');
                break;
            case '2':
                $queryBuilder->orderBy('displayedPrice', 'desc');
                break;
            case '3':
                $queryBuilder->whereNotNull('sale_price')
                    ->orderByRaw('(100 - (sale_price * 100 / regular_price)) DESC');
                break;
            default:
                $queryBuilder->latest();
                break;
        }

        $products = $queryBuilder->paginate($itemsPerPage)->appends($request->except('page'));

        foreach ($products as $product) {
            $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();
            $product->main_image = $productMedia ? $productMedia->media : null;
            $product->formattedRegularPrice = number_format($product->regular_price, 0, ',', '.');
            $product->formattedSalePrice = number_format($product->sale_price, 0, ',', '.');
            $product->displayedPrice = $product->sale_price ? $product->sale_price : $product->regular_price;
            $product->formattedDisplayedPrice = number_format($product->displayedPrice, 0, ',', '.');
        }

        $Categories = Category::all();
        $Brands = Brand::all();

        return view('layouts.product', [
            'products' => $products,
            'Brands' => $Brands,
            'Categories' => $Categories,
            'searchQuery' => $query,
            'sortBy' => $sortBy,
            'itemsPerPage' => $itemsPerPage,
        ]);
    }


    public function showByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $products = Product::where('category_id', $category->id)->get();
        $Brands = Brand::all();
        foreach ($products as $product) {
            $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();
            $product->main_image = $productMedia ? $productMedia->media : null;
            $product->formattedRegularPrice = number_format($product->regular_price, 0, ',', '.');
            $product->formattedSalePrice = number_format($product->sale_price, 0, ',', '.');
        }
        return view('layouts.product', [
            'Categories' => Category::all(),
            'products' => $products,
            'Brands' => $Brands,
            'selectedCategory' => $category
        ]);
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        $products->view_count++;
        $products->save();
        $productMedia = ProductMedia::where('product_id', $products->id)->get();
        $products->main_image = $productMedia->isNotEmpty() ? $productMedia->first()->media : null;
        $formattedRegularPrice = number_format($products->regular_price, 0, ',', '.');
        $formattedSalePrice = number_format($products->sale_price, 0, ',', '.');
        $productVariations = ProductVariation::where('product_id', $products->id)->with('productVariationValue')->get();


        $favoriteProductIds = Wishlist::where('user_id', auth()->id())->pluck('product_id');
        $favoriteProducts = Product::whereIn('id', $favoriteProductIds)->get();
        foreach ($favoriteProducts as $favoriteProduct) {
            $favoriteProductMedia = ProductMedia::where('product_id', $favoriteProduct->id)->first();
            $favoriteProduct->main_image = $favoriteProductMedia ? $favoriteProductMedia->media : null;
            $favoriteProduct->formattedRegularPrice = number_format($favoriteProduct->regular_price, 0, ',', '.');
            $favoriteProduct->formattedSalePrice = number_format($favoriteProduct->sale_price, 0, ',', '.');
        }

        Session::forget('uploaded_files');
        //show comment
        $listComment = Review::with('user')
            ->with('reviewMedia')
            ->where('product_id', $id)
            ->paginate(5);

        return view('layouts.detail', [
            'product' => $products,
            'productMedia' => $productMedia,
            'productVariations' => $productVariations,
            'formattedRegularPrice' => $formattedRegularPrice,
            'formattedSalePrice' => $formattedSalePrice,
            'favoriteProducts' => $favoriteProducts,
            'listComment' => $listComment,
        ]);
    }

    public function showPost()
    {
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);
        $productMedia = ProductMedia::where('product_id', $product->id)->where('is_main', 1)->first();
        $productImage = $productMedia ? $productMedia->media : null;

        $productVariation = ProductVariation::where('product_id', $productId)->first();
        $variationName = null;
        $variationValueName = null;
        if ($productVariation) {
            $variationName = $productVariation->variation_name;
            $variationValue = ProductVariationValue::where('product_variation_id', $productVariation->id)->first();
            if ($variationValue) {
                $variationValueName = $variationValue->variation_value_name;
            }
        }
        $cartItems = Session::get('cartItems', []);
        $found = false;
        foreach ($cartItems as &$cartItem) {
            if ($cartItem['id'] == $product->id) {
                $cartItem['quantity'] += 1;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $cartItems[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->sale_price,
                'quantity' => 1,
                'image' => $productImage,
                'variation_name' => $variationName,
                'variation_value_name' => $variationValueName,
            ];
        }
        Session::put('cartItems', $cartItems);
        return redirect()->route('cart.view');
    }
}

