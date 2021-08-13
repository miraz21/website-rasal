<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MembersController;
use App\Models\Employee;

class MembersController extends Controller
{
    public function addData(Request $request)
    {
        $employee= new Employee;
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->salary=$request->salary;
        $employee->department=$request->department;
        $employee->save();
        return redirect('add');
    }
}
