<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Men\'s Clothing',
                'image' => 'http://menscraze.com/wp-content/uploads/2016/05/David-Gandy-Style.jpg',
                'category_id' => null,
                'category_slug' => 'mens-clothing',
                'status' => 1,
                'shop_id' => 1,
                'meta_title' => 'Men\'s Clothing',
                'meta_description' => 'Explore the latest trends in men\'s clothing.',
                'meta_keyword' => 'men, clothing, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Women\'s Clothing',
                'image' => 'https://www.forevernew.com.au/media/catalog/product/A/l/AllTerritories_OnBody_25717201_F5.jpg',
                'category_id' => null,
                'category_slug' => 'womens-clothing',
                'status' => 1,
                'shop_id' => 2,
                'meta_title' => 'Women\'s Clothing',
                'meta_description' => 'Discover the latest styles in women\'s clothing.',
                'meta_keyword' => 'women, clothing, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kids\' Clothing',
                'image' => 'https://i5.walmartimages.com/asr/3ac42fc3-ca33-429c-b48f-9679786b3d16_1.f3647e93ea755ec903bc201da2a6bc0a.jpeg',
                'category_id' => null,
                'category_slug' => 'kids-clothing',
                'status' => 1,
                'shop_id' => 3,
                'meta_title' => 'Kids\' Clothing',
                'meta_description' => 'Find fashionable clothing for kids.',
                'meta_keyword' => 'kids, clothing, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'image' => 'https://fashionquo.com/wp-content/uploads/2021/05/Types-of-fashion-accessories-758x502.jpg',
                'category_id' => null,
                'category_slug' => 'accessories',
                'status' => 1,
                'shop_id' => 4,
                'meta_title' => 'Fashion Accessories',
                'meta_description' => 'Complete your outfit with the latest accessories.',
                'meta_keyword' => 'accessories, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Footwear',
                'image' => 'https://www.popoptiq.com/wp-content/uploads/2019/01/4-25-1-870x646.jpg',
                'category_id' => null,
                'category_slug' => 'footwear',
                'status' => 1,
                'shop_id' => 5,
                'meta_title' => 'Footwear',
                'meta_description' => 'Explore our range of stylish footwear.',
                'meta_keyword' => 'footwear, shoes, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sportswear',
                'image' => 'https://imgmedia.lbb.in/media/2023/01/63c65e541d43b562bfdbff51_1673944660849.jpg',
                'category_id' => null,
                'category_slug' => 'sportswear',
                'status' => 1,
                'shop_id' => 6,
                'meta_title' => 'Sportswear',
                'meta_description' => 'Get the latest in sportswear fashion.',
                'meta_keyword' => 'sportswear, fitness, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Outerwear',
                'image' => 'https://www.themodestman.com/wp-content/uploads/2021/01/Minimalist-outerwear-collection-1536x1536.jpg',
                'category_id' => null,
                'category_slug' => 'outerwear',
                'status' => 1,
                'shop_id' => 7,
                'meta_title' => 'Outerwear',
                'meta_description' => 'Stay warm and stylish with our outerwear.',
                'meta_keyword' => 'outerwear, jackets, coats',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Swimwear',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/91s91op8veL._AC_UL1500_.jpg',
                'category_id' => null,
                'category_slug' => 'swimwear',
                'status' => 1,
                'shop_id' => 8,
                'meta_title' => 'Swimwear',
                'meta_description' => 'Dive into our collection of swimwear.',
                'meta_keyword' => 'swimwear, beachwear, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Loungewear',
                'image' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https:%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F13%2F2021%2F01%2F12%2Floungewear.jpg',
                'category_id' => null,
                'category_slug' => 'loungewear',
                'status' => 1,
                'shop_id' => 9,
                'meta_title' => 'Loungewear',
                'meta_description' => 'Relax in style with our loungewear.',
                'meta_keyword' => 'loungewear, comfort, fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Formalwear',
                'image' => 'https://www.ferrariformal.com.au/wp-content/uploads/2017/05/Ferrari-12876.jpg?x79758',
                'category_id' => null,
                'category_slug' => 'formalwear',
                'status' => 1,
                'shop_id' => 10,
                'meta_title' => 'Formalwear',
                'meta_description' => 'Dress to impress with our formalwear.',
                'meta_keyword' => 'formalwear, suits, dresses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
