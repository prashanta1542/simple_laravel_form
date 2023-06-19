<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetail;

class FormController extends Controller
{
    public function showForm()
    {
        return view('employeeform');
    }

    public function getData(Request $request)
    {
        $formData = $request->all();
        $obj=new EmployeeDetail();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->joining_date=$request->jdate;
        $obj->salary=$request->salary;
        $obj->department=$request->departments;
        $obj->gender=$request->gender;
        $isActive = isset($formData['active']) && $formData['active'] === 'true' ? true : false;
        $obj->active=$isActive;
        $obj->address=$request->address;
        if($obj->save()){
            echo "successfull submit data";
        }
    }
}

