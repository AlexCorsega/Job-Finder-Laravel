<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobTypeModel;
use Illuminate\Http\Request;
use  App\Models\job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobListingController extends Controller
{
    //
    public function index()
    {
        return view("listing.listings", [
            "listings" => job::all()
        ]);
    }
    public function show()
    {
        return view("listing.listing", [
            "listing" => job::find(request('id')),
            'jobtypes' => JobTypeModel::all(),
        ]);
    }
    public function update(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'logo' => [Rule::imageFile()],
            'company' => ['required'],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => ['required'],
            'description' => ['required'],
        ]);
        $listing = job::find(request('id'));
        $listing->update($formFields);
        // dd($listing);
        return back()->with('message', "Listing updated successfully.");
    }
    public function destroy($id)
    {
        $listing = job::find(request('id'));
        if (!$listing) {
            abort(404);
        }
        if ($listing->user_id != Auth::user()->id) {
            abort(401);
        }
        $listing->delete();
        return redirect('listings');
    }
}
