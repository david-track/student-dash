<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $studentcontroller = new StudentController();
        return $studentcontroller->showAllStudents();
    }
}
