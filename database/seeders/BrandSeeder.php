<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandRecords = [

        ['id' => 1 ,  'brand_name' => 'Allen Solly', 'brand_logo' => '' ,   'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'Allen Solly is a popular brand that specializes in casual and smart casual wear for men and women. ',
        'brand_url' => 'allen-solly','meta_title' => 'Allen Solly',
        'meta_keyword' => 'Allen Solly','meta_description' => 'Allen Solly','status' => 1, ],

        ['id' => 2 ,  'brand_name' => 'Peter England', 'brand_logo' => '' , 'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'One of India s most trusted apparel brands, Peter England specializes in mens clothing and considered among the famous fashion brands in India.',
        'brand_url' => 'peter-england',
        'meta_title' => 'Peter England',
        'meta_keyword' => 'Peter England','meta_description' => 'Peter England','status' => 1, ],

        ['id' => 3 ,  'brand_name' => 'Tommy Hilfiger', 'brand_logo' => '' , 'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'Although Tommy Hilfiger was founded in 1985, it took a long time for it to make its debut in Indian stores. The first Tommy Hilfiger store in India opened only ...',
        'brand_url' => 'tommy-hilfiger','meta_title' => 'Tommy Hilfiger',
        'meta_keyword' => 'Tommy Hilfiger','meta_description' => 'Tommy Hilfiger','status' => 1, ],

        ['id' => 4 ,  'brand_name' => 'Biba',  'brand_logo' => '' , 'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'Biba is an Indian fashion clothing brand best recognized for its designs for ladies and girls. In India, it has more than 150 stores and 250 multi-brand outlets .',
        'brand_url' => 'biba','meta_title' => 'Biba',
        'meta_keyword' => 'Biba','meta_description' => 'Biba','status' => 1, ],

        ['id' => 5 ,  'brand_name' => 'Zara', 'brand_logo' => '' ,  'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'Zara was started by Ortega Gaona and Rosalia Mera and is currently one of India s most popular clothing brands. It is a subsidiary of the Inditex Group and ...',
        'brand_url' => 'zara','meta_title' => 'Zara',
        'meta_keyword' => 'Zara','meta_description' => 'Zara','status' => 1, ],

        ['id' => 6 ,  'brand_name' => 'Van Heusen', 'brand_logo' => '' , 'brand_image' => '',
        'brand_discount' => 0, 'brand_description' => 'Van Heusen is owned by Philips Van Heusen Corporation, more commonly known as PVH Corp, which is an American clothing company that also owns brands like Tommy ...',
        'brand_url' => 'van-heusen','meta_title' => 'Van Heusen',
        'meta_keyword' => 'Van Heusen','meta_description' => 'Van Heusen','status' => 1, ],
        ];

        Brand::insert($brandRecords);
    }
}
