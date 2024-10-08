<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomepageSection;
use App\Http\Requests\sectionmgmtRequest;
class SectionMgmtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homepage_sections = HomepageSection::get();

        return view('admin.section_mgmt.index',compact('homepage_sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_homepage_sections_display_orders = HomepageSection::select('display_order')->get()->pluck('display_order')->toArray(); 
        return view('admin.section_mgmt.create',compact('all_homepage_sections_display_orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sectionmgmtRequest $request)
    {
        try {
           
            // $homepage_section = HomepageSection::create($request->all());
              // Check if the request has an image file
        if ($request->hasFile('image_url')) {
            // Store the image and set the image path in the request data
            $data['image_url'] = store_image('image_url', 'app/public/front/images/section/');
        }

        // Merge the $data array (containing the image_url) with the request data
        $homepage_section = HomepageSection::create(array_merge($request->all(), $data ?? []));
            
            if ($homepage_section->id > 0) {
                return redirect()->route('admin.section-management.index')->with('success', 'Section added successfully');
            } else {
                return redirect()->back()->with('error', 'something went wrong! ');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
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
        $homepage_section = HomepageSection::find($id);
        $all_homepage_sections_display_orders = HomepageSection::select('display_order')->get()->pluck('display_order')->toArray(); 
        return view('admin.section_mgmt.edit')->with(compact('homepage_section' ,'all_homepage_sections_display_orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(sectionmgmtRequest $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'section_type' => $request->section_type,
            'display_order' => $request->display_order,
        ];

        // Check if the request has an image file
        if ($request->hasFile('image_url')) {
            // Store the new image and add the image URL to the $data array
            $data['image_url'] = store_image('image_url', 'app/public/front/images/section/');
        }

        // Update the record in the database with the updated $data
        $homepage_section = HomepageSection::whereId($id)->update($data);
            return redirect()->route('admin.section-management.index')->with('success' , 'Homepage section updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function updateHomepageSectionStatus(Request $request)
    {
        try {
        $status =  update_status($request);
        HomepageSection::where('id', $request->id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'homepage_section_id' => $request->id]);
        
        } catch (\Exception $e) {
            return response()->json(['Error : '.$e->getMessage() , 'status' =>400]);
        }

    }

    public function delete($id)
    {
        HomepageSection::whereId($id)->delete();
         return redirect()->route('admin.section-management.index')->with('success' , 'Homepage section deleted successfully');
    }


}
