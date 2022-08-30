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
        $categories = ['Pants', 'Shirts', 'Jackets & Coats', 'Skirts', 'Cardigans & Sweaters', 'Jumpsuits & Dresses', 'Jeans', 'Blazers', 'Tops'];


        foreach ($categories as $cat){
            DB::table('categories')->insert(['name' => $cat]);
        }
    }
}
