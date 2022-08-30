<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $header = ["Lil'Shop", "Classic Pieces", "Free Worldwide Shipping"];
    private $subheader = ["A little shop for all you need", "Everything you need", "Get it quick and wear it anyway any day."];
    private $text = ["Try our clothes that can feat in any closet and discover the comfort of having a small number of pieces but infinite combinations.", "One color cloths that can be wore any year and still go with any current trend. Classic colors and designs.", "High quality clothing for a great price and free worldwide shipping all in one place.Find what you need and get it on your address in just a couple of days."];


    public function run()
    {
        for ($i = 1;$i < 4;$i++){
            DB::table('slider_images')->insert([
                'image' => "banner$i.jpg",
                'alt' => "banner$i image",
                'header' => $this->header[$i - 1],
                'subheader' => $this->subheader[$i - 1],
                'text' => $this->text[$i - 1],
                'active' => 1
            ]);
        }
    }
}
