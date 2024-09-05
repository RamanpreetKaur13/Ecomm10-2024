<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomepageSection;
use App\Models\GridCard;
use Exception;
use App\Http\Requests\GridCardRequest;

class GridCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grids = GridCard::with('homepage_section')->orderBy('id','DESC')->get();
        return view('admin.grid_cards.index', compact('grids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $homepage_section = HomepageSection::where('section_type','grid')->get();
        return view('admin.grid_cards.create',compact('homepage_section'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GridCardRequest $request)
    {
        try {
            $data = [];
            if($request->hasFile('image_url')){
                $data['image_url']= store_image('image_url' ,'app/public/front/images/gridCards/' );
            }
            $data['homepage_section_id'] = $request->homepage_section_id;
            $data['link_url'] = $request->link_url;
            $data['title'] = $request->title;
            $data['subtitle'] = $request->subtitle;
            $data['display_order'] = $request->display_order;
            $data['status'] =1;
    
            GridCard::create($data);
            return redirect()->route('admin.grid-cards.index')->with('success' , 'Grid card created successfully');
            
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
        $gridCard = GridCard::find($id); 
       $homepage_section = HomepageSection::where('section_type','grid')->get();
        return view('admin.grid_cards.edit')->with(compact('gridCard' ,'homepage_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            if ($request->hasFile('image_url')) {
                $data['image_url'] = store_image('image_url', 'app/public/front/images/gridCards/');
            }
            
            $data['homepage_section_id'] = $request->homepage_section_id;
            $data['link_url'] = $request->link_url;
            $data['title'] = $request->title;
            $data['subtitle'] = $request->subtitle;
            $data['display_order'] = $request->display_order;
            $data['status'] = $request->status;
            $grid_card =  GridCard::where('id', $id)->update($data);
            if ($grid_card) {
                return redirect()->route('admin.grid-cards.index')->with('success', 'Grid card updated successfully');
            } else {
                return redirect()->back()->with('error','Something went wrong!');
            }
            
        } catch (Exception $e) {
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

    

    public function updateGridStatus(Request $request)
    {
        $status =  update_status($request);
        GridCard::where('id', $request->id)->update(['status' => $status]);
        return response()->json(['status' => $status, 'grid_id' => $request->id]);
    }

    public function delete($id)
    {
         // get image  path
         $image_path = storage_path("app/public/front/images/gridCards/");
         
         //get image  from table
         $get_image  =  GridCard::whereId($id)->select('image_url')->first();
         
         unlink_image_video_from_db($image_path , $get_image->image_url );
         // delete from db
         GridCard::whereId($id)->delete();
         return redirect()->back()->with('success' , 'Grid card deleted successfully');

    }

}
