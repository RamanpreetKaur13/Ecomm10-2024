<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(AdminsTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        // $this->call(ProductTableSeeder::class);
        // $this->call(FamilyColorSeeder::class);
        // $this->call(ProductImageSeeder::class);
        // $this->call(ProductAttributeSeeder::class);
        // $this->call(BrandSeeder::class);
        $this->call(BannerSeeder::class);

    }
}
