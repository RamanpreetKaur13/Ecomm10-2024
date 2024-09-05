<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomepageSection;

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
        return view('admin.section_mgmt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $homepage_section = HomepageSection::create($request->all());
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
        return view('admin.section_mgmt.edit')->with(compact('homepage_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $homepage_section = HomepageSection::whereId($id)->update([
            'name' => $request->name,
            'section_type' => $request->section_type,
            'display_order' => $request->display_order,
        ]);
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
