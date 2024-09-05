<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\HomepageSection;
use App\Models\AdminRole;
use Exception;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::with('homepage_section')->orderBy('id','DESC')->get();
        // dd($banners);
        //set admins / subadmins permissions
        $bannerModuleCount = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'banner'])->count();
        // dd($cmsPageModuleCount);

        $bannerModule = [];
        // if logged in user is superadmin , then he can access all the banner
        if (Auth::guard('admin')->user()->type == 'admin') {
            $bannerModule['view_access'] = 1;
            $bannerModule['edit_access'] = 1;
            $bannerModule['full_access'] = 1;
        } elseif ($bannerModuleCount == 0) {
            return redirect()->route('admin.dashboard')->with('error', "This feature is restricted to you.");
        } else {
            $bannerModule = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'banner'])->first();
        }
        return view('admin.banners.index', compact('banners', 'bannerModule'));

        return view('admin.banners.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $homepage_section = HomepageSection::where('section_type','banner')->get();
        return view('admin.banners.create' ,compact('homepage_section'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
      try {
        $data = [];
        if($request->hasFile('image_url')){
            $data['image_url']= store_image('image_url' ,'app/public/front/images/banners/' );
        }
        $data['homepage_section_id'] = $request->homepage_section_id;
        $data['link_url'] = $request->link_url;
        $data['alt_text'] = $request->alt_text;
        $data['display_order'] = $request->display_order;
        $data['status'] =1;

        Banner::create($data);
        return redirect()->route('admin.banners.index')->with('success' , 'Banners created successfully');
        
      } catch (Exception $e) {
        return redirect()->back()->with('error' , 'Something went Wrong! Please Try Again.'.$e->getMessage());
      }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id); 
        $homepage_section = HomepageSection::where('section_type','banner')->get();
        return view('admin.banners.edit')->with(compact('banner' ,'homepage_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, string $id)
    {
        
        if ($request->hasFile('image_url')) {
            $data['image_url'] = store_image('image_url', 'app/public/front/images/banners/');
        }
        
        $data['homepage_section_id'] = $request->homepage_section_id;
        $data['link_url'] = $request->link_url;
        $data['alt_text'] = $request->alt_text;
        $data['display_order'] = $request->display_order;
        $data['status'] = $request->status;
        $banner =  Banner::where('id', $id)->update($data);
        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function updateBannerStatus(Request $request)
    {
        // dd($request);
        $status =  update_status($request);
        Banner::where('id', $request->id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'banner_id' => $request->id]);
    }

    public function delete($id)
    {
         // get image  path
         $image_path = storage_path("app/public/front/images/banners/");
         
         //get image  from table
         $get_image  =  Banner::whereId($id)->select('image_url')->first();
         
         unlink_image_video_from_db($image_path , $get_image->image_url );
         // delete from db
         Banner::whereId($id)->delete();
         return redirect()->back()->with('success' , 'Banner image  deleted successfully');

    }

}
