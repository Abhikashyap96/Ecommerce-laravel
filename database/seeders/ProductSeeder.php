<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'OPPO mobile',
                "price"=>"20000",
                "category"=>"Mobile",
                "gallery"=>"https://img4.gadgetsnow.com/gd/images/products/additional/large/G354734_View_1/mobiles/smartphones/oppo-a96-128-gb-sunset-blue-8-gb-ram-.jpg",
                "discription"=>"a smart phone with 8gb ram and much more features",
            ],
            [
                'name'=>'Samsung tv',
                "price"=>"25000",
                "category"=>"Smart tv",
                "gallery"=>"https://images.samsung.com/is/image/samsung/in-full-hd-tv-te50fa-ua43te50fakxxl-frontblack-231881877?$650_519_PNG$",
                "discription"=>"a smart tv with 4gb ram and much more features",
            ],
            [
                'name'=>'Lg tv',
                "price"=>"25000",
                "category"=>"Smart tv",
                "gallery"=>"https://www.lg.com/in/images/tvs/md07554739/gallery/43UQ7550PSF-D-03.jpg",
                "discription"=>"a smart tv with 4gb ram and much more features",
            ],
            [
                'name'=>'panasonic fridge',
                "price"=>"12500",
                "category"=>"fridge",
                "gallery"=>"https://www.panasonic.com/content/dam/pim/in/en/NR/NR-TH2/NR-TH272CDRN/ast-1544379.png.pub.png?resize=272%3A204",
                "discription"=>"a fridge with much more features",
            ]
            
        ]);
    }
}
