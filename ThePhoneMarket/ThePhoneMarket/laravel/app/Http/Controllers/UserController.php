<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Storage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'max:20',
            'zip' => 'max:10',
            'avatar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:255',
            
        ]);
        
        

        $user= new User();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phonenumber = $request->phonenumber;
        $user->zip = $request->zip;
        $user->avatar = $request->avatar;
        
        
        

        $user->save();

        return redirect()->home();
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $currentUser = User::find($user->id);
        

        return view('users.show', compact('currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $currentUser = User::find($user->id);
        

        return view('users.edit', compact('currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $currentUser = User::find($user->id);

        $currentUser->firstname = $request->firstname;
        $currentUser->lastname = $request->lastname;
        $currentUser->email = $request->email;
        $currentUser->phonenumber = $request->phonenumber;
        $currentUser->zip = $request->zip;
        
        
        $currentUser->avatar = $request->file('avatar')->storeAs(
            'public/avatars', $request->file('avatar')->getClientOriginalName()
        );
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $currentUser->avatar = $filename;
          
       

       

        $currentUser->save();

        return redirect()->home();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $currentUser = User::find($user->id);

        $currentUser->delete();

        return redirect()->home();
    }
}
