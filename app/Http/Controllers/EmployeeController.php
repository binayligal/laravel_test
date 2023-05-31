<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
         
        return view('employees',[
        'employees' => Employee::with('department')->get()]);

    }


    public function home(){
        return view('posts',[
            'posts' => Post::latest()->with('category','author')->get()
        ]); 
    }
    public function editView(Employee $employee) {
        return view('employee_edit',[
            'employee' => $employee,
            'employees' => Employee::all(),
            'departments' => Department::all() 
        ]);
    }

    public function edit() {
    
        $data = request()->validate([
            'employee_id' => ['integer'],
            'dept_id' => ['integer']
        ]);
        $data2 = ['depar_id' => $data['dept_id']];
        $employee = Employee::find($data['employee_id']);
        $employee->update($data2);
        return redirect('/employees')->with('success', 'Updated '.$employee->full_name());   
    }
    public function delete(Employee $employee){
        
       $employee->delete();

        return redirect('/employees')->with('success', 'Deleted '.$employee->full_name());   
    
    }
    public function deleteBulk(Request $request)
    {
        $data = request()->validate(
           [ 'employeeSelected' => 'required']
        );
        $deleted = [];
        foreach ($data['employeeSelected'] as  $value) {
            #echo($value);
            // $employee = 


            $employee = Employee::findOrFail($value);
            $deleted[] = $employee->full_name();
            #lll code...
            $employee->delete();
        }   
        // ddd($deleted);

        return redirect('/employees')->with('success', 'Deleted <br /> '.implode(" <br /> ",$deleted));   
        #ddd($data);
    }
    
}
