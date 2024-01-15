<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.artiste',compact('users'));

        // if(empty($users))
        // {
        //     return response()->json([
        //         "status" => "success",
        //         "data"=>$users
        //     ], 200);
        // } else {
        //     return response()->json([
        //         "status"=> "error",
        //         "data"=>"not fund"
        //     ], 404);
        // }
    }
   public function connect()
   {
     if(Auth::check()){
        $user = Auth::user();


        return view('admin.dashboard', compact('user'));
     }
    
   }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'firstname' => 'required|max:25',
        //     'username' => 'required|max:25',
        // ]);



        $add = new User;

        $add->prenom = $request->firstname;
        $add->name = $request->username;
        $add->email = $request->emailaddress;
        $add->sexe = $request->genre;
        $add->role = $request->role;
        $add->adresse = "44, campus";

        // dd($add);
        $add->save();

        dd($add);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
