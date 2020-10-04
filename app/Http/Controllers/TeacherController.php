<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function AddTeacher(){
      return view("teacher.teacher_create");
    }

    public function store(Request $request){
      $this->validate($request, [
        'name' => 'required|string',
        'department' => 'required',
        'mobile' => 'required|unique:teachers',
        'email' => 'required|unique:teachers',
        'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
      ]);
  
      $teacher = new Teacher;
      $teacher->name = $request->name;
      $teacher->department = $request->department;
      $teacher->mobile = $request->mobile;
      $teacher->email = $request->email;
      $image = $request->file('image');
    if($image){
      $image_name = hexdec(uniqid());
      $ext = strtolower($image->getClientOriginalExtension());
      $image_full_name = $image_name.','.$ext;
      $upload_path = 'public/frontend/image/';
      $image_url = $upload_path.$image_full_name;
      $success = $image->move($upload_path,$image_full_name);
      $teacher['image'] = $image_url;
      $teacher->save();
      return redirect()->back()->with('success', 'Teacher added successfully!');
      //return response()->json($student);
  
    } else {
      $teacher->save();
      return redirect()->back()->with('success', 'Teacher added successfully!');
  
    }
    }

    public function AllTeacher(){
      $teacher = Teacher::all();
      return view('teacher.index',compact('teacher'));
    }
  
    public function ViewTeacher($id) {
  
      $teacher = Teacher::findorfail($id);
      // return response()->json($student);
      return view('teacher.view_teacher',compact('teacher'));
  
    }
  
    public function DeleteTeacher($id) {
      $teacher = Teacher::findorfail($id);
      $teacher->delete();
      return redirect()->back()->with('success', 'teacher deleted successfully!');
    }
     
    public function EditTeacher($id) {
      $teacher = Teacher::find($id);
      return view('teacher.edit',compact('teacher'));
    }
  
    public function UpdateTeacher(Request $request, $id){
      $this->validate($request, [
        'name' => 'required|string',
        'department' => 'required',
        'mobile' => 'required|unique:teachers',
        'email' => 'required|unique:teachers',
        'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
      ]);
  
      $teacher = Teacher::find($id);
      $teacher->name = $request->name;
      $teacher->department = $request->department;
      $teacher->mobile = $request->mobile;
      $teacher->email = $request->email;
      $image = $request->file('image');
      if($image){
        $image_name = hexdec(uniqid());
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.','.$ext;
        $upload_path = 'public/frontend/image/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);
        $teacher['image'] = $image_url;
        $teacher->save();
        return redirect()->back()->with('success', 'Teacher updated successfully!');
        //return response()->json($student);
        
    
    
      } else {
        $teacher->save();
        return redirect()->back()->with('success', 'Teacher updated successfully!');
    
      }
    }

}
