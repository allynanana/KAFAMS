<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Support\Facades\DB;
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
        $activity1 = booking::where('activity_id','1')->count();
        $activity2 = booking::where('activity_id','2')->count();
        $activity3 = booking::where('activity_id','3')->count();
        $activity4 = booking::where('activity_id','4')->count();
        $activity5 = booking::where('activity_id','5')->count();
        $activity6 = booking::where('activity_id','6')->count();

        $participantcount = [$activity1,$activity2,$activity3,$activity4,$activity5,$activity6];
        return view('ManageReport.Admin.ActivityReport.AdminActivityReport', compact('activity1','activity2','activity3','activity4','activity5','activity6','participantcount'));
    }

    public function adminUserReport()
    {
        // Counts for each type of user
        $parent = parentModel::count();
        $kafaadmin = kafaadmin::count();
        $muipadmin = muipadmin::count();
        $teacher = teacher::count();
        $student = student::count();

        $totalUsers = $parent + $kafaadmin + $muipadmin + $teacher + $student;

        // Counts for each education level
        $student1 = student::where('EducationLevel', '1')->count();
        $student2 = student::where('EducationLevel', '2')->count();
        $student3 = student::where('EducationLevel', '3')->count();
        $student4 = student::where('EducationLevel', '4')->count();
        $student5 = student::where('EducationLevel', '5')->count();
        $student6 = student::where('EducationLevel', '6')->count();

        $totalStudents = $student1 + $student2 + $student3 + $student4 + $student5 + $student6;

        // Fetch data for the chart
        $students = student::select('EducationLevel', DB::raw('count(*) as total'))
            ->groupBy('EducationLevel')
            ->get();

        // Process data for Chart.js
        $levels = $students->pluck('EducationLevel');
        $totals = $students->pluck('total');

        // Data for the type of user chart
        $userTypes = ['KAFAadmin', 'MUIPAdmin', 'Student', 'Teacher', 'Parent'];
        $userCounts = [$kafaadmin, $muipadmin, $student, $teacher, $parent];

        return view('ManageReport.Admin.UserReport.AdminUserReport', compact(
            'parent', 'kafaadmin', 'muipadmin', 'teacher', 'student','totalUsers',
            'student1', 'student2', 'student3', 'student4', 'student5', 'student6','totalStudents',
            'levels', 'totals', 'userTypes', 'userCounts'
        ));
    }

    public function MUIPUserReport()
    {
        // Counts for each type of user
        $parent = parentModel::count();
        $kafaadmin = kafaadmin::count();
        $muipadmin = muipadmin::count();
        $teacher = teacher::count();
        $student = student::count();

        $totalUsers = $parent + $kafaadmin + $muipadmin + $teacher + $student;

        // Counts for each education level
        $student1 = student::where('EducationLevel', '1')->count();
        $student2 = student::where('EducationLevel', '2')->count();
        $student3 = student::where('EducationLevel', '3')->count();
        $student4 = student::where('EducationLevel', '4')->count();
        $student5 = student::where('EducationLevel', '5')->count();
        $student6 = student::where('EducationLevel', '6')->count();

        $totalStudents = $student1 + $student2 + $student3 + $student4 + $student5 + $student6;

        // Fetch data for the chart
        $students = student::select('EducationLevel', DB::raw('count(*) as total'))
            ->groupBy('EducationLevel')
            ->get();

        // Process data for Chart.js
        $levels = $students->pluck('EducationLevel');
        $totals = $students->pluck('total');

        // Data for the type of user chart
        $userTypes = ['KAFAadmin', 'MUIPAdmin', 'Student', 'Teacher', 'Parent'];
        $userCounts = [$kafaadmin, $muipadmin, $student, $teacher, $parent];

        return view('ManageReport.Admin.UserReport.AdminUserReport', compact(
            'parent', 'kafaadmin', 'muipadmin', 'teacher', 'student','totalUsers',
            'student1', 'student2', 'student3', 'student4', 'student5', 'student6','totalStudents',
            'levels', 'totals', 'userTypes', 'userCounts'
        ));
    }

    public function muipActivityReport (){
        $activity1 = booking::where('activity_id','1')->count();
        $activity2 = booking::where('activity_id','2')->count();
        $activity3 = booking::where('activity_id','3')->count();
        $activity4 = booking::where('activity_id','4')->count();
        $activity5 = booking::where('activity_id','5')->count();
        $activity6 = booking::where('activity_id','6')->count();

        $participantcount = [$activity1,$activity2,$activity3,$activity4,$activity5,$activity6];
        return view('ManageReport.MUIP.ActivityReport.MUIPActivityReport', compact('activity1','activity2','activity3','activity4','activity5','activity6','participantcount'));
    }

   

    
}
