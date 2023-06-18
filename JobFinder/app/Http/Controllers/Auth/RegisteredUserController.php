<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function index(): view
    {
        return view('auth.index');
    }
    public function create(): View
    {
        return view('auth.register');
    }
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'firstname' => ['required', 'string', 'max:100'],
            'lastname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', Rule::unique('users','email')],
            'contact' => ['max:11',Rule::unique('users','contact')],
            'classification' => ['required'],
            'username' => ['min:6', 'max:100', 'required',Rule::unique('users','username')],
            'password' => ['min:8','required', 'confirmed', Rules\Password::defaults(),Rule::unique('users','password')],
        ]);
        $formFields['fullname'] = $formFields['firstname'] . ' ' . $formFields['lastname'];
        $formFields['password'] = Hash::make($request->password);
        $user = User::create($formFields);
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
