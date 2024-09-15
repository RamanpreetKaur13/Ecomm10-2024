<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Carousel;
use App\Models\HomepageSection;
use App\Models\CarouselItem;
use App\Http\Requests\CarouselItemRequest;

class CarouselItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel_items = CarouselItem::with('homepage_section')->get();
        return view('admin.carouselItem.index', compact('carousel_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $carousels = Carousel::get();
        $homepage_section = HomepageSection::where(['section_type' => 'carousel', 'status' =>1])->orderBy('display_order' , 'asc')->get();
    $all_carousel_item_display_orders = CarouselItem::select('display_order')->get()->pluck('display_order')->toArray();
    // dd(  $all_carousel_item_display_orders );
    // if (!empty(  $all_carousel_item_display_orders )) {
    //     $display_order_count = 
    // }
        return view('admin.carouselItem.create', compact('homepage_section' , 'all_carousel_item_display_orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     try {
    //         $carousel_item = CarouselItem::create($request->all());
    //         if ($carousel_item->id > 0) {
    //             return redirect()->route('admin.carousel-items.index')->with('success', 'Carousel Item added successfully');
    //         } else {
    //             return redirect()->back()->with('error', 'something went wrong! ');
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'something went wrong! ' . $e->getMessage());
    //     }
    // }

    public function store(CarouselItemRequest $request)
    {
        // dd($request);
        try {
            $data = [];
            if($request->hasFile('image_url')){
                $data['image_url']= store_image('image_url' ,'app/public/front/images/carousels/' );
            }
            $data['homepage_section_id'] = $request->homepage_section_id;
            $data['item_type'] = $request->item_type;
            // $data['title'] = $request->title;
            // $data['subtitle'] = $request->subtitle;
            $data['display_order'] = $request->display_order;
            $data['status'] =1;
    
            CarouselItem::create($data);
            return redirect()->route('admin.carousel-items.index')->with('success' , 'Carousel Items created successfully');
            
          } catch (\Exception $e) {
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
        $carouselitem = CarouselItem::find($id); 
        // $carousels = Carousel::get();
        //  return view('admin.carouselItem.edit')->with(compact('carouselitem' ,'carousels'));
         $homepage_section = HomepageSection::where(['section_type' => 'carousel', 'status' =>1])->get();
         $all_carousel_item_display_orders = CarouselItem::select('display_order')->get()->pluck('display_order')->toArray();
         return view('admin.carouselItem.edit')->with(compact('carouselitem' ,'homepage_section' ,'all_carousel_item_display_orders'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselItemRequest $request, string $id)
    {
        try {
            if ($request->hasFile('image_url')) {
                $data['image_url'] = store_image('image_url', 'app/public/front/images/carousels/');
            }
            
            $data['homepage_section_id'] = $request->homepage_section_id;
            $data['item_type'] = $request->item_type;
            $data['display_order'] = $request->display_order;
            $data['status'] = $request->status;
            $carousel_item =  CarouselItem::where('id', $id)->update($data);
            if ($carousel_item) {
                return redirect()->route('admin.carousel-items.index')->with('success', 'Carousel Item updated successfully');
            } else {
                return redirect()->back()->with('error','Something went wrong!');
            }
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Something went wrong!'.$e->getMessage());
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
