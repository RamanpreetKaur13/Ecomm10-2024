<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use App\Models\Product;
use App\Models\AdminRole;

use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::get();

        //set admins / subadmins permissions
        //    $brandModule =  set_persmission_for_subadmins('brand');
        //    dd($brandModule);

        //set admins / subadmins permissions
        $brandModuleCount = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'brand'])->count();
        // dd($cmsPageModuleCount);

        $brandModule = [];
        // if logged in user is superadmin , then he can access all the brand
        if (Auth::guard('admin')->user()->type == 'admin') {
            $brandModule['view_access'] = 1;
            $brandModule['edit_access'] = 1;
            $brandModule['full_access'] = 1;
        } elseif ($brandModuleCount == 0) {
            return redirect()->route('admin.dashboard')->with('error', "This feature is restricted to you.");
        } else {
            $brandModule = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'brand'])->first();
        }
        return view('admin.brands.index', compact('brands', 'brandModule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [];
        if ($request->hasFile('brand_logo')) {
            $data['brand_logo'] = store_image('brand_logo', 'app/public/front/images/brands/');
        }
        if ($request->hasFile('brand_image')) {
            $data['brand_image'] = store_image('brand_image', 'app/public/front/images/brands/');
        }

        $data['brand_name'] = $request->brand_name;
        $data['brand_url'] = $request->brand_url;
        $data['brand_description'] = $request->brand_description;
        $data['brand_discount'] = $request->brand_discount;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['status'] = 1;
        $brand =  Brand::create($data);

        //    // Remove brand discount from all the products related to that specific brand
        //    if (empty($request->brand_discount)) {
        //     $data['brand_discount'] = 0;
        //     $get_products_related_to_this_brand = Product::where('brand_id' , $brand->id)->get();
        //     dd($get_products_related_to_this_brand);
        // }

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully');
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
        $brand = Brand::find($id);
        return view('admin.brands.edit')->with(compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $data = [];
        if ($request->hasFile('brand_logo')) {
            $data['brand_logo'] = store_image('brand_logo', 'app/public/front/images/brands/');
        }
        if ($request->hasFile('brand_image')) {
            $data['brand_image'] = store_image('brand_image', 'app/public/front/images/brands/');
        }

        
        //    // Remove brand discount from all the products related to that specific brand
        if (empty($request->brand_discount)) {
            $data['brand_discount'] = 0;
            $get_products_related_to_this_brand = Product::where('brand_id', $id)->get();
            foreach ($get_products_related_to_this_brand as $key => $product) {
                if ($product->discount_type == 'brand') {
                    Product::where('id', $product->id)->update(
                        [
                            'discount_type' => '',
                            'final_price' =>  $product->product_price
                        ]
                    );
                }
            }
           
        }

        $data['brand_name'] = $request->brand_name;
        $data['brand_url'] = $request->brand_url;
        $data['brand_description'] = $request->brand_description;
        $data['brand_discount'] = $request->brand_discount;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['status'] = 1;
        $brand =  Brand::where('id', $id)->update($data);
        //    Category::whereId($id)->update($data);
        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateBrandStatus(Request $request)
    {
        $status =  update_status($request);
        Brand::where('id', $request->brand_id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'brand_id' => $request->brand_id]);

    }


    public function delete($id)
    {
        Brand::whereId($id)->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully');
    }

    // deleting image from db and folder
    public function deleteImage($id)
    {
        // get image path
        $image_path = storage_path("app/public/front/images/brands/");
        //get image from table
        $get_image =  Brand::whereId($id)->select('brand_image')->first();
        $image =  $image_path . $get_image->brand_image;

        if (file_exists($image)) {
            unlink($image);
        }
        // delete from db
        Brand::whereId($id)->update(['brand_image' => '']);
        return redirect()->back()->with('success', 'Brand Image deleted successfully');
    }

    // deleting logo from db and folder
    public function deleteLogo($id)
    {
        // get image path
        $image_path = storage_path("app/public/front/images/brands/");
        //get image from table
        $get_image =  Brand::whereId($id)->select('brand_logo')->first();
        $image =  $image_path . $get_image->brand_logo;

        if (file_exists($image)) {
            unlink($image);
        }
        // delete from db
        Brand::whereId($id)->update(['brand_logo' => '']);
        return redirect()->back()->with('success', 'Brand Logo deleted successfully');
    }
}
