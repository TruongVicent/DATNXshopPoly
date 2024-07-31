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
                'name' => 'Áo Dài',
                'image' => 'https://example.com/aodai.jpg',
                'category_id' => null,
                'category_slug' => 'aodai-1',
                'status' => 1,
                'shop_id' => 1,
                'meta_title' => 'Áo Dài',
                'meta_description' => 'Khám phá các mẫu áo dài truyền thống và hiện đại.',
                'meta_keyword' => 'áo dài, thời trang, truyền thống',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quần Áo Nam',
                'image' => 'https://example.com/quan-ao-nam.jpg',
                'category_id' => null,
                'category_slug' => 'quan-ao-nam',
                'status' => 1,
                'shop_id' => 2,
                'meta_title' => 'Quần Áo Nam',
                'meta_description' => 'Thời trang nam mới nhất.',
                'meta_keyword' => 'quần áo nam, thời trang, nam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quần Áo Nữ',
                'image' => 'https://example.com/quan-ao-nu.jpg',
                'category_id' => null,
                'category_slug' => 'quan-ao-nu',
                'status' => 1,
                'shop_id' => 3,
                'meta_title' => 'Quần Áo Nữ',
                'meta_description' => 'Thời trang nữ mới nhất.',
                'meta_keyword' => 'quần áo nữ, thời trang, nữ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Giày Dép',
                'image' => 'https://example.com/giay-dep.jpg',
                'category_id' => null,
                'category_slug' => 'giay-dep',
                'status' => 1,
                'shop_id' => 4,
                'meta_title' => 'Giày Dép',
                'meta_description' => 'Bộ sưu tập giày dép thời trang.',
                'meta_keyword' => 'giày dép, thời trang, giày',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phụ Kiện',
                'image' => 'https://example.com/phu-kien.jpg',
                'category_id' => null,
                'category_slug' => 'phu-kien',
                'status' => 1,
                'shop_id' => 5,
                'meta_title' => 'Phụ Kiện',
                'meta_description' => 'Phụ kiện thời trang đa dạng.',
                'meta_keyword' => 'phụ kiện, thời trang, túi xách',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đồ Bơi',
                'image' => 'https://example.com/do-boi.jpg',
                'category_id' => null,
                'category_slug' => 'do-boi',
                'status' => 1,
                'shop_id' => 6,
                'meta_title' => 'Đồ Bơi',
                'meta_description' => 'Trang phục bơi lội thời trang.',
                'meta_keyword' => 'đồ bơi, thời trang, bơi lội',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đồ Thể Thao',
                'image' => 'https://example.com/do-the-thao.jpg',
                'category_id' => null,
                'category_slug' => 'do-the-thao',
                'status' => 1,
                'shop_id' => 7,
                'meta_title' => 'Đồ Thể Thao',
                'meta_description' => 'Trang phục thể thao phong cách.',
                'meta_keyword' => 'đồ thể thao, thời trang, thể thao',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trang Sức',
                'image' => 'https://example.com/trang-suc.jpg',
                'category_id' => null,
                'category_slug' => 'trang-suc',
                'status' => 1,
                'shop_id' => 8,
                'meta_title' => 'Trang Sức',
                'meta_description' => 'Trang sức phong cách và tinh tế.',
                'meta_keyword' => 'trang sức, thời trang, phụ kiện',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đồng Hồ',
                'image' => 'https://example.com/dong-ho.jpg',
                'category_id' => null,
                'category_slug' => 'dong-ho',
                'status' => 1,
                'shop_id' => 9,
                'meta_title' => 'Đồng Hồ',
                'meta_description' => 'Bộ sưu tập đồng hồ thời trang.',
                'meta_keyword' => 'đồng hồ, thời trang, phụ kiện',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mỹ Phẩm',
                'image' => 'https://example.com/my-pham.jpg',
                'category_id' => null,
                'category_slug' => 'my-pham',
                'status' => 1,
                'shop_id' => 10,
                'meta_title' => 'Mỹ Phẩm',
                'meta_description' => 'Mỹ phẩm chăm sóc sắc đẹp.',
                'meta_keyword' => 'mỹ phẩm, thời trang, làm đẹp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
