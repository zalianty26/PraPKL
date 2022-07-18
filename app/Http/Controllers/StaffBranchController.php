<?php

namespace App\Http\Controllers;
use App\Models\StaffBranch;
use App\Models\Staff;
use App\Models\Branch;
use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    public function index(){
        //select * from post;
        $staffbranch = StaffBranch::all();
        $staff = Staff::all();
        $branch = Branch::all();
        return view('sb.index', compact('staffbranch', 'staff', 'branch'));
    }
}
?>