<?php

namespace App\Http\Controllers;

use App\Models\kafaadmin;
use App\Models\ManageReport;
use App\Models\muipadmin;
use App\Models\parentModel;
use App\Models\student;
use App\Models\teacher;
use Illuminate\Http\Request;

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

        $parent = parentModel::count();
        $kafaadmin = kafaadmin::count();
        $muipadmin = muipadmin::count();
        $teacher = teacher::count();
        $student = student::count();
        $student1 = student::where('EducationLevel','1')->count();
        $student2 = student::where('EducationLevel','2')->count();
        $student3 = student::where('EducationLevel','3')->count();
        $student4 = student::where('EducationLevel','4')->count();
        $student5 = student::where('EducationLevel','5')->count();
        $student6 = student::where('EducationLevel','6')->count();

        return view('ManageReport.Admin.User.AdminUserReport', compact('parent','kafaadmin','muipadmin','teacher','student','student1','student2','student3','student4','student5','student6'));
    }
}
