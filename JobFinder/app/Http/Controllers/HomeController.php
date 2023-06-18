<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\job;
use App\Models\JobCategory;
use App\Models\JobTypeModel;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule as ValidationRule;

class HomeController extends Controller
{

    //
    public function index()
    {
        return view("home.index", ["JobCategories" => JobCategory::all()->take(20)]);
    }
    public function jobs()
    {
        // $jobs = Job::latest()->filter(request(['tag','search']))->paginate(15);
        return view("home.jobs", [
            "tags" => JobCategory::all(),
            "types" => JobTypeModel::all(),
            "jobs" => Job::latest()->filter(request(['tag','search']))->paginate(15),
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
    public function create(){
        // $success = request()->session()->get('success');
        // if($success){
        //     dd($success);
        // }
        return view('home.createjob',['jobtypes' => JobTypeModel::all()]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'logo' => ['required',ValidationRule::imageFile()],
            'company' => ['required', ValidationRule::unique('jobs','company')],
            'location' => 'required',
            'email' => ['required','email'],
            'website' => ['required'],
            'description' => ['required'],
        ]);
        $formFields['jobtype_id'] = request('jobtype');
        $formFields['logo'] = $request->file('logo')->store('logo','public');
        $formFields['user_id'] = Auth::user()->id;
        Job::create($formFields);
        $request->session()->flash('success',"Successfully added new job.");
        return redirect('/jobs/create');
    }
}
