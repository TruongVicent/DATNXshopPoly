<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request, $id)
    {
        $informationShop = Shop::withCount('products')->findOrFail($id);
        $categoryShop = $informationShop->Category()->orderBy('name', 'asc')->get();

        $query = Product::where('shop_id', $id);
        $productShop = $this->filter($request, $query)->paginate(4);

        foreach ($productShop as $productItem) {
            $productMedia = ProductMedia::where('product_id', $productItem->id)->get();
            $productItem->main_image = $productMedia->isNotEmpty() ? $productMedia->first()->media : null;
        }

        return view('layouts.shop', [
            'informationShop' => $informationShop,
            'categoryShop' => $categoryShop,
            'products' => $productShop,
            'orderBy' => $request->query('orderBy'),
            'page' => $request->query('page'),
        ]);
    }

    public function getProductsByCategory(Request $request, $shopId, $categoryId)
    {
        $informationShop = Shop::withCount('products')->findOrFail($shopId);
        $categoryShop = $informationShop->Category()->orderBy('name', 'asc')->get();

        $query = Product::where('shop_id', $shopId)->where('category_id', $categoryId);
        $productShop = $this->filter($request, $query)->paginate(4);

        foreach ($productShop as $productItem) {
            $productMedia = ProductMedia::where('product_id', $productItem->id)->get();
            $productItem->main_image = $productMedia->isNotEmpty() ? $productMedia->first()->media : null;
        }

        return view('layouts.shop', [
            'informationShop' => $informationShop,
            'categoryShop' => $categoryShop,
            'orderBy' => $request->query('orderBy'),
            'page' => $request->query('page'),
            'products' => $productShop,
        ]);
    }

    public function filter(Request $request, $query)
    {
        $page = $request->query('page');
        $orderBy = $request->query('orderBy');

        if (!$page) {
            $page = 1;
        }
        if (!$orderBy) {
            $orderBy = 'default';
        }
        $order_column = '';
        $order_value = '';

        switch ($orderBy) {
            case 'price_asc':
                $order_column = 'price';
                $order_value = 'asc';
                break;
            case 'price_desc':
                $order_column = 'price';
                $order_value = 'desc';
                break;
            case 'default':
                $order_column = 'created_at';
                $order_value = 'desc';
                break;
            default:
                $order_column = 'created_at';
                $order_value = 'desc';
        }

        $query->selectRaw('*, IF(sale_price != 0, sale_price, regular_price) AS price')
            ->orderBy($order_column, $order_value);

        return $query;
    }

}
