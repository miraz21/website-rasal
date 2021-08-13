<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
public function addEmployee()
{
    $employees=[
        ["name"=>"Alice","email"=>"alice@gmail.com","phone"=>"01933518971","salary"=>"20000","department"=>"Accounting"],
        ["name"=>"salam","email"=>"salam@gmail.com","phone"=>"01933518972","salary"=>"25000","department"=>"Dyeing"],
        ["name"=>"kalam","email"=>"kalam@gmail.com","phone"=>"01933518973","salary"=>"23000","department"=>"Finishing"],
        ["name"=>"Ruble","email"=>"ruble@gmail.com","phone"=>"01933518974","salary"=>"22000","department"=>"Quality"],
        ["name"=>"Romzan","email"=>"romzan@gmail.com","phone"=>"01933518975","salary"=>"21000","department"=>"Lab"]
    ];
    Employee::insert($employees);
    return "Records are inserted";
}
public function exportIntoExcel()
{
    return Excel::download(new EmployeeExport,'employeelist.xlsx');
}
public function exportIntoCSV()
{
    return Excel::download(new EmployeeExport,'employeelist.csv');
}
}
