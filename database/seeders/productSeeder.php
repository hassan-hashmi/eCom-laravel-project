<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name"=>"Huawei Mobile",
                "price"=>"20000",
                "category"=>"mobile",
                "description"=>"A SmartPhone with 8GB RAM and much more features.",
                "gallery"=>"images\imagePhone.jpg",
            ],
            [
                "name"=>"laptop",
                "price"=>"50000",
                "category"=>"laptop",
                "description"=>"A laptop with 16GB RAM and much more features.",
                "gallery"=>"images\imageLaptop.jpg",
            ],
            [
                "name"=>"Fridge",
                "price"=>"100000",
                "category"=>"Electronics",
                "description"=>"A Fridge compatible with UPS , Generator and Solar Panel and much more features.",
                "gallery"=>"images\imageFridge.jpg",
            ],
            [
                "name"=>"Mouse",
                "price"=>"400",
                "category"=>"Electronics",
                "description"=>"A gammer mouse with much more features.",
                "gallery"=>"images\imageMouse.jpg",
            ],
        ]);
    }
}
// C:\xampp\htdocs\laravel\E_CommereceProject\