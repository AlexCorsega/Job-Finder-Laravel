<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //
    public function index(){
        return view("home.index",["JobCategories" => JobCategory::all()->take(20)]);
    }
    public function jobs(Request $request){
        return view("home.jobs",["JobCategories" => job::all()->take(20)]);
    }
}
