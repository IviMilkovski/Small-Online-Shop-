<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $names = ["Home", "About", "Shop", "Contact", "Register", "Login"];
    private $urls = ["home", "about", "products.index", "contact.create", "register.create", "login.create"];

    public function run()
    {
        for ($i = 0;$i < count($this->names);$i++){
            DB::table('menus')->insert([
               'name' => $this->names[$i],
               'url'=> $this->urls[$i],
               'order' => $i
            ]);
        }
    }
}
