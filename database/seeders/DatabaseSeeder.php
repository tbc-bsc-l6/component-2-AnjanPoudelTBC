<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->delete();
        DB::table('users')->delete();
        DB::table('orders')->delete();
        DB::table('order_items')->delete();
        DB::table('categories')->delete();
        DB::table('products')->delete();
        // Product::truncate();
        // Category::truncate();
        // User::truncate();
        // Cart::truncate();


        User::factory(12)->create();

        Category::factory(5)->create();

        Product::factory(60)->create();

        Order::factory(5)->create();

        OrderItems::factory(20)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'user_role' => 'admin',
        ]);
    }
}
