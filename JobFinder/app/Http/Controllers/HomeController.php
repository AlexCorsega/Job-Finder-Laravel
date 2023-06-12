<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\job;
use App\Models\JobCategory;
use App\Models\JobTypeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //
    public function index()
    {
        return view("home.index", ["JobCategories" => JobCategory::all()->take(20)]);
    }
    public function jobs(Request $request)
    {
        return view("home.jobs", [
            "tags" => JobCategory::all(),
            "types" => JobTypeModel::all(),
            "jobs" => Job::all()->take(20),
            "jobCount" => Job::all()->count(),
        ]);
    }
    public function show($id)
    {
        $job = Job::find($id);
        if($job){
            return view("home.job", ["job" => $job]);
        }
        else{
            abort('404');
        }
    }
}
