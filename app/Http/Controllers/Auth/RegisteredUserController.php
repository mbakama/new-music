<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Repo\parametrage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    private $param;
    public function __construct(parametrage $param) {
        $this->param = $param;
        $this->middleware('guest');
    }
    /**
     * Display the registration view.
     */
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
        $useType = 'coordo & artiste';
        $useType1 = 'artiste'; 

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'prenom'=>['required','string','max:10'],
            'sexe'=>['required','string','max:6'],
            'adresse'=>['required','string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($this->param->all_user()->count() ==0) {
           $user = User::create([
                'name' => $request->name,
                'prenom'=> $request->prenom,
                'role'=>$useType,
                'sexe'=>$request->sexe,
                'adresse'=>$request->adresse,
                'email' => $request->email, 
                'password' => Hash::make($request->password),
                'bio'=>$request->bio,
                'photo'=>''
            ]);   
        } else {
            $user = User::create([
                'name' => $request->name,
                'prenom'=> $request->prenom,
                'role'=>$useType1,
                'sexe'=>$request->sexe,
                'adresse'=>$request->adresse,
                'email' => $request->email, 
                'password' => Hash::make($request->password),
                'bio'=>$request->bio,
                'photo'=>''
            ]); 
        }

        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
