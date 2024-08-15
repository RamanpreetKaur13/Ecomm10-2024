<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function home()  {

        $getSliderBanners = Banner::where(['status' => 1,'type' => 'Slider'])->get();
        $getFixedBanners = Banner::where(['status' => 1 ,'type' => 'Fixed'])->get();
        return view('front.home' ,compact('getSliderBanners' , 'getFixedBanners'));
    }

    public function header(){

        return view('front.header');

    }
}
