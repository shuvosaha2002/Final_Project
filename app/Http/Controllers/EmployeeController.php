<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function employeeForm(){
        return view('employee.form');
    }

    public function storeEmployeeData(Request $request){
        $data=new Employee();

        $data->employee_id = $request->input('employee_id');
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->salary = $request->input('salary');

        $data->save();
        return back();
    }

    public function employeeTable(){
        $data=Employee::all();
        return view('employee.table',compact('data'));
    }

    public function updateEmployeeData($id){
        $data=Employee::find($id);
        return view('employee.update_form',compact('data'));
    }

    public function storeUpdatedEmployeeData(Request $request,$id){
        $data=Employee::find($id);

        $data->employee_id = $request->input('employee_id');
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->salary = $request->input('salary');

        $data->save();
        return redirect()->route('employee.table');
    }

    public function deleteEmployee($id){
        Employee::destroy($id);
        return back();
    }
}
