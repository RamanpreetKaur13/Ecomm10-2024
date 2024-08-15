<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\AdminRole;

use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->get();
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
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
      
        $data = [];
        if($request->hasFile('image')){
            $data['image']= store_image('image' ,'app/public/front/images/banners/' );
        }
        $data['title'] = $request->title;
        $data['link'] = $request->link;
        $data['type'] = $request->type;
        $data['alt'] = $request->alt;
        $data['sort'] = $request->sort;
        $data['status'] =1;

        Banner::create($data);
        return redirect()->route('admin.banners.index')->with('success' , 'Banners created successfully');
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
        return view('admin.banners.edit')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, string $id)
    {
        
        if ($request->hasFile('image')) {
            $data['image'] = store_image('image', 'app/public/front/images/banners/');
        }
        
        $data['title'] = $request->title;
        $data['link'] = $request->link;
        $data['type'] = $request->type;
        $data['alt'] = $request->alt;
        $data['sort'] = $request->sort;
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
        $status =  update_status($request);
        Banner::where('id', $request->banner_id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'banner_id' => $request->banner_id]);
    }

    public function delete($id)
    {
        // Banner::whereId($id)->delete();
        // return redirect()->back()->with('success', 'Banner deleted successfully');

         // get image  path
         $image_path = storage_path("app/public/front/images/banners/");
         
         //get image  from table
         $get_image  =  Banner::whereId($id)->select('image')->first();
         
         unlink_image_video_from_db($image_path , $get_image->image );
         // delete from db
         Banner::whereId($id)->delete();
         return redirect()->back()->with('success' , 'Banner image  deleted successfully');

    }

}
