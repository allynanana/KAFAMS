<?php

namespace App\Http\Controllers;

class  ManageReportController extends Controller
{
    public function adminHomepage (){
        return view('ManageReport.AdminHomepage');
    }

    public function AdminActivityReport (){
        return view('ManageReport.Admin.Activity.AdminActivityReportFull');
    }

    public function adminActivityReportFull (){
        return view('ManageReport.Admin.Activity.AdminActivityReport');
    }

    public function adminUserReport (){
        return view('ManageReport.Admin.User.AdminUserReport');
    }
}
