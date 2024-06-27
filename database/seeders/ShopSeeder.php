<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('shops')->insert([
            [
                'name' => 'Fashionista',
                'avatar' => 'https://example.com/images/fashionista-avatar.jpg',
                'email' => 'info@fashionista.com',
                'phone' => '0365464532',
                'address' => '123 Fashion Street, New York, NY',
                'description' => 'Fashionista is your ultimate destination for trendy clothing.',
                'rating' => 4.5,
                'status' => 1,
                'follower' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trendy Threads',
                'avatar' => 'https://example.com/images/trendy-threads-avatar.jpg',
                'email' => 'contact@trendythreads.com',
                'phone' => '9876543210',
                'address' => '456 Trendy Avenue, Los Angeles, CA',
                'description' => 'Discover the latest trends at Trendy Threads.',
                'rating' => 4.2,
                'status' => 1,
                'follower' => 800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chic Boutique',
                'avatar' => 'https://example.com/images/chic-boutique-avatar.jpg',
                'email' => 'sales@chicboutique.com',
                'phone' => '1234567890',
                'address' => '789 Chic Lane, Chicago, IL',
                'description' => 'Find chic and stylish clothing at Chic Boutique.',
                'rating' => 4.7,
                'status' => 1,
                'follower' => 1200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Urban Trends',
                'avatar' => 'https://example.com/images/urban-trends-avatar.jpg',
                'email' => 'info@urbantrends.com',
                'phone' => '2345678901',
                'address' => '101 Urban Road, San Francisco, CA',
                'description' => 'Stay ahead with the latest urban fashion trends.',
                'rating' => 4.0,
                'status' => 1,
                'follower' => 950,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vintage Vogue',
                'avatar' => 'https://example.com/images/vintage-vogue-avatar.jpg',
                'email' => 'contact@vintagevogue.com',
                'phone' => '3456789012',
                'address' => '202 Vintage Avenue, Miami, FL',
                'description' => 'Discover timeless fashion at Vintage Vogue.',
                'rating' => 4.3,
                'status' => 1,
                'follower' => 850,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Couture Closet',
                'avatar' => 'https://example.com/images/couture-closet-avatar.jpg',
                'email' => 'sales@couturecloset.com',
                'phone' => '4567890123',
                'address' => '303 Couture Street, Austin, TX',
                'description' => 'Experience luxury fashion at Couture Closet.',
                'rating' => 4.8,
                'status' => 1,
                'follower' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Elegant Ensemble',
                'avatar' => 'https://example.com/images/elegant-ensemble-avatar.jpg',
                'email' => 'info@elegantensemble.com',
                'phone' => '5678901234',
                'address' => '404 Elegant Way, Boston, MA',
                'description' => 'Shop for elegant and sophisticated ensembles.',
                'rating' => 4.6,
                'status' => 1,
                'follower' => 1100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Modern Chic',
                'avatar' => 'https://example.com/images/modern-chic-avatar.jpg',
                'email' => 'contact@modernchic.com',
                'phone' => '6789012345',
                'address' => '505 Modern Street, Seattle, WA',
                'description' => 'Stay chic and stylish with our modern fashion collection.',
                'rating' => 4.4,
                'status' => 1,
                'follower' => 950,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sassy Styles',
                'avatar' => 'https://example.com/images/sassy-styles-avatar.jpg',
                'email' => 'sales@sassystyles.com',
                'phone' => '7890123456',
                'address' => '606 Sassy Blvd, Denver, CO',
                'description' => 'Get your sass on with our trendy fashion styles.',
                'rating' => 4.1,
                'status' => 1,
                'follower' => 700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

