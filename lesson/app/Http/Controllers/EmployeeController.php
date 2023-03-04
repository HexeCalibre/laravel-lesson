<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('employee', ['employees' => $data]);
    }

    public function show($id)
    {
        //---sending arrays
        // $data = Employee::where('id', $id)->get();
        // return view('employee', ['employees' => $data]);

        //---sending single record
        $data = Employee::where('id', $id)->first();
        return view('employee', $data);
    }
}
