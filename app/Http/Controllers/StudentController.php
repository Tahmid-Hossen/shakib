<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
  public function admin() {
    return view('admin.admin_page');
  }
  public function AddStudent() {
    return view("student.student_create");
  }

  public function store(Request $request){
    $this->validate($request, [
      'name' => 'required|string',
      'student_id' => 'required|unique:students|min:9|max:9',
      'department' => 'required',
      'semester' => 'required',
      'batch' => 'required',
      'mobile' => 'required|unique:students',
      'email' => 'required|unique:students',
      'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
    ]);

    $student = new Student;
    $student->name = $request->name;
    $student->student_id = $request->student_id;
    $student->department = $request->department;
    $student->semester = $request->semester;
    $student->batch = $request->batch;
    $student->mobile = $request->mobile;
    $student->email = $request->email;
    $image = $request->file('image');
  if($image){
    $image_name = hexdec(uniqid());
    $ext = strtolower($image->getClientOriginalExtension());
    $image_full_name = $image_name.','.$ext;
    $upload_path = 'public/frontend/image/';
    $image_url = $upload_path.$image_full_name;
    $success = $image->move($upload_path,$image_full_name);
    $student['image'] = $image_url;
    $student->save();
    return redirect()->back()->with('success', 'Student added successfully!');
    //return response()->json($student);
    


  } else {
    $student->save();
    return redirect()->back()->with('success', 'Student added successfully!');

  }
  }
  public function AllStudent(){
    $student = Student::all();
    return view('student.index',compact('student'));
  }

  public function ViewStudent($id) {

    $student = Student::findorfail($id);
    // return response()->json($student);
    return view('student.viewstudent',compact('student'));

  }

  public function DeleteStudent($id) {
    $student = Student::findorfail($id);
    $student->delete();
    return redirect()->back()->with('success', 'student deleted successfully!');
  }
   
  public function EditStudent($id) {
    $student = Student::find($id);
    return view('student.edit',compact('student'));
  }

  public function UpdateStudent(Request $request, $id){
    $this->validate($request, [
      'name' => 'required|string',
      'student_id' => 'required|unique:students|min:3|max:9',
      'department' => 'required',
      'semester' => 'required',
      'batch' => 'required',
      'mobile' => 'required|unique:students',
      'email' => 'required|unique:students',
      'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
    ]);

    $student = Student::find($id);
    $student->name = $request->name;
    $student->student_id = $request->student_id;
    $student->department = $request->department;
    $student->semester = $request->semester;
    $student->batch = $request->batch;
    $student->mobile = $request->mobile;
    $student->email = $request->email;
    $image = $request->file('image');
    if($image){
      $image_name = hexdec(uniqid());
      $ext = strtolower($image->getClientOriginalExtension());
      $image_full_name = $image_name.','.$ext;
      $upload_path = 'public/frontend/image/';
      $image_url = $upload_path.$image_full_name;
      $success = $image->move($upload_path,$image_full_name);
      $student['image'] = $image_url;
      $student->save();
      return redirect()->back()->with('success', 'Student updated successfully!');
      //return response()->json($student);
      
  
  
    } else {
      $student->save();
      return redirect()->back()->with('success', 'Student updated successfully!');
  
    }
  }
}
