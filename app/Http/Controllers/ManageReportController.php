<?php

namespace App\Http\Controllers;

class  ManageReportController extends Controller
{
    public function adminHomepage (){
        return view('ManageReport');
    }

    public function adminActivityReport (){
        return view('ManageReport.Admin.AdminActivityReport');
    }
}
