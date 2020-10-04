<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
  public function WriteEvent(){
    $category = DB::table('categories')->get();
    return view('event.create',compact('category'));
  }

  public function StoreEvent(Request $request){
    $validatedData = $request->validate([
      'title' => 'required|max:250',
      'details' => 'required',
      'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
  ]);

  $data = array();
  $data['title']=$request->title;
  $data['category_id']=$request->category_id;
  $data['details']=$request->details;
  $image = $request->file('image');
  if($image){
    $image_name = hexdec(uniqid());
    $ext = strtolower($image->getClientOriginalExtension());
    $image_full_name = $image_name.','.$ext;
    $upload_path = 'public/frontend/image/';
    $image_url = $upload_path.$image_full_name;
    $success = $image->move($upload_path,$image_full_name);
    $data['image'] = $image_url;
    DB::table('events')->insert($data);
    return Redirect()->back()->with('success', 'image inserted successfully!');
    


  } else {
    DB::table('events')->insert($data);
    return Redirect()->back()->with('success', 'event inserted successfully!');

  }
  }

  public function AllEvent() {
    $events = DB::table('events')
          ->join('categories','events.category_id','categories.id','categories.slug')
          ->select('events.*','categories.name')
          ->get();
          return view('event.all_event',compact('events'));
      // return response()->json($events);
  }

  public function ViewEvent($id) {
    $events = DB::table('events')
      ->join('categories','events.category_id','categories.id','categories.slug')
      ->select('events.*','categories.name')
      ->where('events.id', $id)
      ->first();
      return view("event.view_event",compact('events'));
      
  }

  public function showEvent(){
    
    $events = DB::table('events')->join('categories','events.category_id','categories.id')
       ->select('events.*','categories.name','categories.slug')->paginate(6);
    return view('event.show',compact('events'));

}

public function DeleteEvent($id){
  $delete = DB::table('events')->where('id',$id)->delete();
  return redirect()->back()->with('success', 'event delete successfully!');
}

}
