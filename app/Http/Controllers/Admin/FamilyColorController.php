<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FamilyColor;
use App\Http\Requests\FamilyColorRequest;
use App\Models\AdminRole;
use Illuminate\Support\Facades\Auth;

class FamilyColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $family_colors=  FamilyColor::latest()->get();

       //set admins / subadmins permissions
       $familyColorsModuleCount = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id , 'module' => 'family_colors'])->count();
        // dd($familyColorsModuleCount);

       $family_colorsModule = [];
       // if logged in user is superadmin , then he can access all the family_colors
       if (Auth::guard('admin')->user()->type == 'admin') {
          $family_colorsModule['view_access'] = 1;
          $family_colorsModule['edit_access'] = 1;
          $family_colorsModule['full_access'] = 1;
       } elseif($familyColorsModuleCount == 0) {
          return redirect()->route('admin.dashboard')->with('error' , "This feature is restricted to you.");
       }
       else{
           $family_colorsModule = AdminRole::where(['subadmin_id' => Auth::guard('admin')->user()->id , 'module' => 'family_colors'])->first();
       }

        return view('admin.family_colors.index' , compact('family_colors' , 'family_colorsModule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.family_colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamilyColorRequest $request)
    {
        $family_colors = FamilyColor::create($request->all());
        if ($family_colors->id > 0) {
            return redirect()->route('admin.family-colors.index')->with('success' , 'Family color added successfully');
        } else {
            return redirect()->back()->with('error' , 'something went wrong! ');
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
        $family_color = FamilyColor::whereId($id)->first();
        return view('admin.family_colors.edit' , compact('family_color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FamilyColorRequest $request, string $id)
    {
        $family_color = FamilyColor::whereId($id)->update([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
        ]);
            return redirect()->route('admin.family-colors.index')->with('success' , 'Family color updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    public function delete($id)
    {
        FamilyColor::whereId($id)->delete();
         return redirect()->route('admin.family-colors.index')->with('success' , 'Family color deleted successfully');
    }



    public function updateFamilyColorStatus(Request $request)
    {
        $status =  update_status($request);
        FamilyColor::where('id', $request->family_colors_id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'family_colors_id' => $request->family_colors_id]);
    }

}
