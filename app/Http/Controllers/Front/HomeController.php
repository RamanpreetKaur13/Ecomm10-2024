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
        // $grids = GridCard::with('homepage_section')->orderBy('display_order')->get();
        // dd($grids);
        // echo "<pre>";
        // print_r($grids);
        // die();
        return view('front.home' ,compact('banners', 'grids'));
    }

    public function header(){

        return view('front.header');

    }
}
