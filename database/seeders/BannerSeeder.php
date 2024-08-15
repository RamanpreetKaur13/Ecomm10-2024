<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bannerRecords = [
            [ 'id' => 1 , 'image' => '',  'type' => 'fixed' , 'link' => 'ttitleelink' , 'title' => 'ttitlee' , 'alt' => 'taltgkfg' ,  'sort' => 1 , 'status' => 1],
            [ 'id' => 2 , 'image' => '',  'type' => 'slider' , 'link' => 'ttitleelink' , 'title' => 'ttitlee' , 'alt' => 'taltgkfg' , 'sort' => 2 , 'status' => 1],
           
        ];

        Banner::insert($bannerRecords);
    }
}
