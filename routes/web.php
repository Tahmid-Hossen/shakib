<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('index');
});

Route::get('/logout', function () {
  auth()->logout();
  return view('index');
});

Route::get('home',function(){
  echo "this is home page";
});

Route::get('/sendemail', 'SendmailController@index')->name('contact.page');
Route::post('/sendemail/send', 'SendmailController@send');


Route::get('admin/page', 'AdminController@admin')->name('admin.page')->middleware('auth');

// Student route
Route::get('add/student', 'StudentController@AddStudent')->name('add.student');
Route::post('store/student', 'StudentController@store')->name('store.student');
Route::get('all/student', 'StudentController@AllStudent')->name('all.student')->middleware('auth');
Route::get('view/student/{id}', 'StudentController@ViewStudent');
Route::get('delete/student/{id}', 'StudentController@DeleteStudent');
Route::get('edit/student/{id}', 'StudentController@EditStudent');
Route::post('update/student/{id}', 'StudentController@UpdateStudent');

// Teacher route
Route::get('add/teacher', 'TeacherController@AddTeacher')->name('add.teacher');
Route::post('store/teacher', 'TeacherController@store')->name('store.teacher');
Route::get('all/teacher', 'TeacherController@AllTeacher')->name('all.teacher');
Route::get('view/teacher/{id}', 'TeacherController@ViewTeacher');
Route::get('delete/teacher/{id}', 'TeacherController@DeleteTeacher');
Route::get('edit/teacher/{id}', 'TeacherController@EditTeacher');
Route::post('update/teacher/{id}', 'TeacherController@UpdateTeacher');

//Category Route
Route::get('add/category', 'PostController@AddCategory')->name('add.category');
Route::get('all/category', 'PostController@AllCategory')->name('all.category');
Route::post('store/category', 'PostController@StoreCategory')->name('store.category');
Route::get('view/category/{id}', 'PostController@ViewCategory');
Route::get('delete/category/{id}', 'PostController@DeleteCategory');
Route::get('edit/category/{id}', 'PostController@EditCategory');
Route::post('update/category/{id}', 'PostController@UpdateCategory');

//event Route
Route::get('write/event', 'EventController@WriteEvent')->name('write.event');
Route::post('store/event', 'EventController@StoreEvent')->name('store.event');
Route::get('all/event', 'EventController@AllEvent')->name('all.event');
Route::get('view/event/{id}', 'EventController@ViewEvent');
Route::get('/events', 'EventController@showEvent')->name('Show.event');
Route::get('edit/event/{id}', 'EventController@EditEvent');
Route::post('update/event/{id}', 'EventController@UpdateEvent');
Route::get('delete/event/{id}', 'EventController@DeleteEvent');

//blog Route
Route::get('write/blog', 'BlogController@WriteBlog')->name('write.blog');
Route::post('store/blog', 'BlogController@StoreBlog')->name('store.blog');
Route::get('all/blog', 'BlogController@AllBlog')->name('all.blog');
Route::get('view/blog/{id}', 'BlogController@ViewBlog');
// Route::get('/blogs', 'HelloController@showPost')->name('blog.event');
Route::get('edit/blog/{id}', 'BlogController@EditBlog');
Route::post('update/blog/{id}', 'BlogController@UpdateBlog');
Route::get('delete/blog/{id}', 'BlogController@DeleteBlog');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
