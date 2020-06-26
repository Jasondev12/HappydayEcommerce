<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Blog',
                'slug' => 'blog',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Vitrine',
                'slug' => 'vitrine',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'E-commerce',
                'slug' => 'ecommerce',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Dropshipping',
                'slug' => 'dropshipping',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
