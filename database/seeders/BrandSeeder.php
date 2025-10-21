<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name'=>'HONDA',
        ]);
        Brand::create([
            'name'=>'BAJAJ',
        ]);
        Brand::create([
            'name'=>'RONCO',
        ]);
        Brand::create([
            'name'=>'BERA',
        ]);
        Brand::create([
            'name'=>'BRUNO',
        ]);
        Brand::create([
            'name'=>'YAMAHA',
        ]);
        Brand::create([
            'name'=>'KAWASAKI',
        ]);
    }
}
