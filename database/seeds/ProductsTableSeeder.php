<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Site Web / Une page',
            'slug' => 'siteweb-unepage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 500,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Deux page',
            'slug' => 'siteweb-deuxpage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 650,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Trois page',
            'slug' => 'siteweb-troispage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 800,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Quatre page',
            'slug' => 'siteweb-quatrepage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 950,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Cinq page',
            'slug' => 'siteweb-cinqpage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 1100,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Six page',
            'slug' => 'siteweb-sixpage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 1250,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / Sept page',
            'slug' => 'siteweb-septpage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 1400,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Site Web / huit page',
            'slug' => 'siteweb-huitpage',
            'details' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ex eum rem obcaecati iste est minima dolor deleniti et laborum.',
            'price' => 1500,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit. Est culpa, voluptatibus quos dolorum facilis cumque, doloremque reprehenderit, ex libero quae consequatur modi recusandae esse magni, sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit,sit amet consectetur adipisicing elit. Rerum cupiditate sit accusamus fugit!',
            'category_id' => Category::all()->random()->id
        ]);
    }
}
