<?php

use Illuminate\Database\Seeder;
use Delivery\Models\Category;
use Delivery\Models\Product;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /*
         iremos criar 10 category 
        */

         factory(Category::class, 10)->create()->each(function ($c) {
              
              for ($i = 0; $i <= 5 ; $i++) { 
                  $c->products()->save(factory(Product::class)->make());
              }

         });
        /*
          Ou seja Para cada categoria criada, iremos  criar cinco Produtos
          each = cada;  
        */

    }
}
