<?php
// use Image;
use App\Models\AdminRole;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

if (!function_exists('date_time_format')) {
    function date_time_format($date)
    {
        return \Carbon\Carbon::parse($date)->format('j F , Y');
    }
}

// custom function to store image
if (!function_exists('store_image')) {
    function store_image($imageFile, $path)
    {
        $image = request()->file($imageFile);
        $image_name = $image->getClientOriginalName();
        if (!is_dir(storage_path($path))) {
            mkdir(storage_path($path), 0775, true);
        }
        Image::make($image)->save(storage_path($path . $image_name));
        return $image_name;
    }
}


// custom function to store mulitple images
if (!function_exists('make_storage_dir')) {
    function make_storage_dir($storage_path)
    {
        if (!is_dir(storage_path($storage_path))) {
            mkdir(storage_path($storage_path), 0775, true);
        }
        return $storage_path;
    }
}


// custom function to unlink image or video from db
if (!function_exists('unlink_image_video_from_db')) {
    function unlink_image_video_from_db($storage_path, $image_or_video)
    {
        
        $image_video_to_be_deleted = $storage_path . $image_or_video;
        if (file_exists($image_video_to_be_deleted)) {
            unlink($image_video_to_be_deleted);
        }

        return $image_video_to_be_deleted;
    }
}


// set permissions for subadmins
if (!function_exists('set_persmission_for_subadmins')) {
    function set_persmission_for_subadmins($module_name)
    {

        //set admins / subadmins permissions
        $get_module = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => $module_name])->first();
        //    dd($get_module);
        if ($get_module == null) {
            return redirect()->route('admin.dashboard')->with('error', "This feature is restricted to you.");
        } else {


            //    dd($moduleCount);

            $moduleCount = $get_module->count();
            $module = [];
            // if logged in user is superadmin , then he can access all the products
            if (Auth::guard('admin')->user()->type == 'admin') {
                $module['view_access'] = 1;
                $module['edit_access'] = 1;
                $module['full_access'] = 1;
            } elseif ($moduleCount == 0) {
                return redirect()->route('admin.dashboard')->with('error', "This feature is restricted to you.");
            } else {
                $module = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => $module_name])->first();
            }
            return $module;
        }
    }
}




// custom function to update status
if (!function_exists('update_status')) {
    function update_status(Request $request)
    {
        if ($request->ajax()) {
            if ($request->status == 'Active') {
                $status = 0;
            } else {
                $status = 1;
            }
        }
        return $status;
    }
}
