<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\GridCard;
use App\Models\HomepageSection;

class HomeController extends Controller
{
    public function home()  {

        // $getSliderBanners = Banner::where(['status' => 1,'type' => 'Slider'])->get();
        // $getFixedBanners = Banner::where(['status' => 1 ,'type' => 'Fixed'])->get();
        // return view('front.home' ,compact('getSliderBanners' , 'getFixedBanners'));

        $banners = Banner::with('homepage_section')->where('status' ,1)->orderBy('display_order')->get();
        $grids = HomepageSection::with('grid')->orderBy('display_order')->where(['section_type' => 'grid' , 'status' => 1])->get()->toArray();
        $single_grid_item_1 = HomepageSection::where(['section_type' => 'single-grid-item-1' , 'status' => 1])->first();
        $single_grid_item_2 = HomepageSection::where(['section_type' => 'single-grid-item-2' , 'status' => 1])->first();
        $carousels = HomepageSection::with('carousel_item')->orderBy('display_order')->where(['section_type' => 'carousel' , 'status' => 1])->get()->toArray();
       $promo_banner_1= HomepageSection::where(['section_type' => 'promotional-banner-1' , 'status' => 1])->first();
       $promo_banner_2= HomepageSection::where(['section_type' => 'promotional-banner-2' , 'status' => 1])->first();
    //    dd($single_grid_item_2);
        // $grids = GridCard::with('homepage_section')->orderBy('display_order')->get();
        // dd($carousels);
        // echo "<pre>";
        // print_r($grids);
        // die();
        return view('front.home' ,compact('banners', 'grids' , 'single_grid_item_1','single_grid_item_2','carousels','promo_banner_1' ,'promo_banner_2' ));
    }

    public function header(){

        return view('front.header');

    }
}
