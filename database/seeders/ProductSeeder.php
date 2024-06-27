<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'supplier_id' => 1,
                'category_id' => 1,
                'shop_id' => 1,
                'brand_id' => 1,
                'name' => 'Men\'s Slim Fit Jeans',
                'slug' => 'mens-slim-fit-jeans',
                'regular_price' => '49.99',
                'sale_price' => '39.99',
                'sku' => 'MSFJ001',
                'rating' => 4.5,
                'view_count' => 1000,
                'sold_count' => 500,
                'description' => 'Stay stylish and comfortable in these slim fit jeans for men.',
                'origin' => 'Vietnam',
                'meta_title' => 'Men\'s Slim Fit Jeans - Fashionista',
                'meta_description' => 'Discover the latest men\'s slim fit jeans at Fashionista.',
                'meta_keyword' => 'men, jeans, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'category_id' => 2,
                'shop_id' => 2,
                'brand_id' => 2,
                'name' => 'Women\'s Floral Print Dress',
                'slug' => 'womens-floral-print-dress',
                'regular_price' => '59.99',
                'sale_price' => '49.99',
                'sku' => 'WFPD001',
                'rating' => 4.8,
                'view_count' => 1200,
                'sold_count' => 600,
                'description' => 'Make a statement with this elegant floral print dress for women.',
                'origin' => 'Thailand',
                'meta_title' => 'Women\'s Floral Print Dress - Trendy Threads',
                'meta_description' => 'Shop the latest floral print dresses at Trendy Threads.',
                'meta_keyword' => 'women, dress, floral, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 3,
                'category_id' => 3,
                'shop_id' => 3,
                'brand_id' => 3,
                'name' => 'Kids\' Cotton T-Shirt',
                'slug' => 'kids-cotton-t-shirt',
                'regular_price' => '19.99',
                'sale_price' => '15.99',
                'sku' => 'KCTS001',
                'rating' => 4.3,
                'view_count' => 800,
                'sold_count' => 400,
                'description' => 'Keep your kids comfortable all day long with this cotton t-shirt.',
                'origin' => 'China',
                'meta_title' => 'Kids\' Cotton T-Shirt - Chic Boutique',
                'meta_description' => 'Discover comfortable kids\' cotton t-shirts at Chic Boutique.',
                'meta_keyword' => 'kids, t-shirt, cotton, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 4,
                'category_id' => 4,
                'shop_id' => 4,
                'brand_id' => 4,
                'name' => 'Unisex Beanie Hat',
                'slug' => 'unisex-beanie-hat',
                'regular_price' => '14.99',
                'sale_price' => '11.99',
                'sku' => 'UBH001',
                'rating' => 4.2,
                'view_count' => 700,
                'sold_count' => 350,
                'description' => 'Stay warm and stylish with this versatile unisex beanie hat.',
                'origin' => 'United States',
                'meta_title' => 'Unisex Beanie Hat - Urban Trends',
                'meta_description' => 'Explore our collection of unisex beanie hats at Urban Trends.',
                'meta_keyword' => 'beanie, hat, unisex, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 5,
                'category_id' => 5,
                'shop_id' => 5,
                'brand_id' => 5,
                'name' => 'Leather Crossbody Bag',
                'slug' => 'leather-crossbody-bag',
                'regular_price' => '79.99',
                'sale_price' => '69.99',
                'sku' => 'LCB001',
                'rating' => 4.7,
                'view_count' => 900,
                'sold_count' => 450,
                'description' => 'Add a touch of elegance to your outfit with this leather crossbody bag.',
                'origin' => 'Italy',
                'meta_title' => 'Leather Crossbody Bag - Vintage Vogue',
                'meta_description' => 'Shop for premium leather crossbody bags at Vintage Vogue.',
                'meta_keyword' => 'bag, leather, crossbody, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 6,
                'category_id' => 6,
                'shop_id' => 6,
                ' ' => 6,
                'name' => 'Classic Denim Jacket',
                'slug' => 'classic-denim-jacket',
                'regular_price' => '69.99',
                'sale_price' => '59.99',
                'sku' => 'CDJ001',
                'rating' => 4.6,
                'view_count' => 950,
                'sold_count' => 500,
                'description' => 'Add a timeless piece to your wardrobe with this classic denim jacket.',
                'origin' => 'United States',
                'meta_title' => 'Classic Denim Jacket - Couture Closet',
                'meta_description' => 'Discover the latest denim jackets at Couture Closet.',
                'meta_keyword' => 'denim, jacket, classic, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 7,
                'category_id' => 7,
                'shop_id' => 7,
                'brand_id' => 7,
                'name' => 'Knit Sweater Dress',
                'slug' => 'knit-sweater-dress',
                'regular_price' => '49.99',
                'sale_price' => '39.99',
                'sku' => 'KSD001',
                'rating' => 4.4,
                'view_count' => 850,
                'sold_count' => 400,
                'description' => 'Stay cozy and chic with this stylish knit sweater dress.',
                'origin' => 'Canada',
                'meta_title' => 'Knit Sweater Dress - Elegant Ensemble',
                'meta_description' => 'Shop for trendy knit sweater dresses at Elegant Ensemble.',
                'meta_keyword' => 'sweater, dress, knit, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 8,
                'category_id' => 8,
                'shop_id' => 8,
                'brand_id' => 8,
                'name' => 'Pleated Midi Skirt',
                'slug' => 'pleated-midi-skirt',
                'regular_price' => '34.99',
                'sale_price' => '29.99',
                'sku' => 'PMS001',
                'rating' => 4.3,
                'view_count' => 800,
                'sold_count' => 380,
                'description' => 'Add a touch of elegance to your look with this pleated midi skirt.',
                'origin' => 'France',
                'meta_title' => 'Pleated Midi Skirt - Modern Chic',
                'meta_description' => 'Explore our collection of pleated midi skirts at Modern Chic.',
                'meta_keyword' => 'skirt, pleated, midi, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 9,
                'category_id' => 8,
                'shop_id' => 9,
                'brand_id' => 9,
                'name' => 'Slim Fit Blazer',
                'slug' => 'slim-fit-blazer',
                'regular_price' => '89.99',
                'sale_price' => '79.99',
                'sku' => 'SFB001',
                'rating' => 4.5,
                'view_count' => 1000,
                'sold_count' => 480,
                'description' => 'Look sharp and sophisticated with this slim fit blazer for men.',
                'origin' => 'United Kingdom',
                'meta_title' => 'Slim Fit Blazer - Sassy Styles',
                'meta_description' => 'Shop for stylish slim fit blazers at Sassy Styles.',
                'meta_keyword' => 'blazer, slim fit, men, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_id' => 10,
                'category_id' => 10,
                'shop_id' => 10,
                'brand_id' => 10,
                'name' => 'Striped Polo Shirt',
                'slug' => 'striped-polo-shirt',
                'regular_price' => '29.99',
                'sale_price' => '24.99',
                'sku' => 'SPS001',
                'rating' => 4.6,
                'view_count' => 920,
                'sold_count' => 420,
                'description' => 'Stay casual and comfortable with this stylish striped polo shirt.',
                'origin' => 'United States',
                'meta_title' => 'Striped Polo Shirt - Casual Classics',
                'meta_description' => 'Shop for classic striped polo shirts at Casual Classics.',
                'meta_keyword' => 'polo shirt, striped, men, fashion',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
