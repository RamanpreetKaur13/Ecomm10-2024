<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomepageSection;
use App\Models\Carousel;
use Exception;
use App\Http\Requests\CarouselRequest;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::with('homepage_section')->get();
        return view('admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $homepage_section = HomepageSection::where('section_type', 'carousel')->get();
        return view('admin.carousel.create', compact('homepage_section'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselRequest $request)
    {
        try {
            $carousel = Carousel::create($request->all());
            if ($carousel->id > 0) {
                return redirect()->route('admin.carousel.index')->with('success', 'Carousel added successfully');
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
        $carousel = Carousel::find($id); 
        $homepage_section = HomepageSection::where('section_type','carousel')->get();
         return view('admin.carousel.edit')->with(compact('carousel' ,'homepage_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselRequest $request, string $id)
    {
        try {
            $carousel = Carousel::whereId($id)->update([
                'name' => $request->name,
                'homepage_section_id' => $request->homepage_section_id,
                'display_order' => $request->display_order,
            ]);
                return redirect()->route('admin.carousel.index')->with('success' , 'Carousel updated successfully');
    
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateCarouselStatus(Request $request)
    {
        try {
            $status =  update_status($request);
            Carousel::where('id', $request->id)->update(['status' => $status]);
            return response()->json(['status' => $status, 'carousel_id' => $request->id]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
        }
    }


    public function delete($id)
    {
        try {
            Carousel::whereId($id)->delete();
         return redirect()->route('admin.carousel.index')->with('success' , 'carousel deleted successfully');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
        }

    }


}
