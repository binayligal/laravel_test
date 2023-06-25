<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Post;
use App\Models\User;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
// use App\Http\Controllers\EmployeeController;
// All Listings`


Route::get('user-data', function() {
    $model = App\Models\Employee::with('department');
 
    return DataTables::eloquent($model)
                ->only(['department.dept_name','middle_name','last_name'])
                ->toJson();
});
Route::get('/','App\Http\Controllers\EmployeeController@showContent');


Route::get('/employees','App\Http\Controllers\EmployeeController')->middleware('auth');

Route::get(  '/employee/edit/{employee:employee_id}',  'App\Http\Controllers\EmployeeController@editView')->middleware('auth');
Route::post( '/employee/edit/{employee:employee_id}',  'App\Http\Controllers\EmployeeController@edit')->middleware('auth');
Route::get('/employee/delete/{employee:employee_id}',  'App\Http\Controllers\EmployeeController@delete')->middleware('auth');
Route::post('/employees/deleteBulk',  'App\Http\Controllers\EmployeeController@deleteBulk')->middleware('auth');


Route::get('/login', 'App\Http\Controllers\EmployeeController@show')->name('login');
Route::post('/login', 'App\Http\Controllers\EmployeeController@login');
Route::get('/logout', "App\Http\Controllers\EmployeeController@logout");


Route::get('posts/{post:slug}', function (Post $post) { 
    return view ('post', [
        'post' => $post
    ]);
});




Route::get('categories/{category:slug}',function(Category $category){
    return view ('posts', [
        'posts' => $category->posts
    ]);  
});
Route::get('authors/{author:username}',function(User $author){
    return view ('posts', [
        'posts' => $author->posts
    ]);  }); 
    
Route::get('/employees/json','App\Http\Controllers\EmployeeController@index')->name('employees.index');



// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });

// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });


// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];

// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });

// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });


// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });

// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });


// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });

// Route::post('/employee/edit/{employee:employee_id}', function () {
    
//     $data = request()->validate([
//         'employee_id' => ['integer'],
//         'dept_id' => ['integer']
//     ]);
//     $data2 = ['depar_id' => $data['dept_id']];
//     $employee = Employee::find($data['employee_id']);
//     $employee->update($data2);
//     return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
//     return view('employee_edit',[
//         'employee' => $employee,
//         'employees' => Employee::all(),
//         'departments' => Department::all() 
//     ]);
// });
