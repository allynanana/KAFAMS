<?php

namespace App\Http\Controllers;

class  ManageReportController extends Controller
{
    public function adminHomepage (){
        return view('ManageReport.AdminHomepage');
    }

    public function AdminActivityReport (){
        return view('ManageReport.Admin.AdminActivityReportFull');
    }

    public function adminActivityReportFull (){
        return view('ManageReport.Admin.AdminActivityReport');
    }
}
