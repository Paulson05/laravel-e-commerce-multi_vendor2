<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        Brand::factory(5)->create();
         Banner::factory(3)->create();
        Category::factory(20)->create();
        Product::factory(100)->create();


//         \App\Models\User::factory(10)->create();

    }
}
