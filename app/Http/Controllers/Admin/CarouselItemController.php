<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\CarouselItem;

class CarouselItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel_items = CarouselItem::with('carousel')->get();
        return view('admin.carouselItem.index', compact('carousel_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carousels = Carousel::get();
        return view('admin.carouselItem.create', compact('carousels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $carousel_item = CarouselItem::create($request->all());
            if ($carousel_item->id > 0) {
                return redirect()->route('admin.carousel-items.index')->with('success', 'Carousel Item added successfully');
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
        $carouselitem = CarouselItem::find($id); 
        $carousels = Carousel::get();
         return view('admin.carouselItem.edit')->with(compact('carouselitem' ,'carousels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $carouselitem = CarouselItem::whereId($id)->update([
                'carousel_id' => $request->carousel_id,
                'item_id' => $request->item_id,
                'item_type' => $request->item_type,
                'display_order' => $request->display_order,
            ]);
                return redirect()->route('admin.carousel-items.index')->with('success' , 'Carousel Item updated successfully');
    
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

    public function updateCarouselitemStatus(Request $request)
    {
        try {
            $status =  update_status($request);
            CarouselItem::where('id', $request->id)->update(['status' => $status]);
            return response()->json(['status' => $status, 'carouselitem_id' => $request->id]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
        }
    }
    
    public function delete($id)
    {
        try {
            CarouselItem::whereId($id)->delete();
         return redirect()->route('admin.carousel-items.index')->with('success' , 'carousel item deleted successfully');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
        }

    }



}
