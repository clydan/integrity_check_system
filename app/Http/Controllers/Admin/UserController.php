<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Institution;
use Illuminate\Http\Request;

use Gate;


class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('super-admin-ability')){
            return redirect(route('home'));
        }
        $users = User::all();
        return view('dashboard.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('super-admin-ability')){
            return redirect(route('home'));
        }
        $institutions = Institution::all();
        return view('dashboard.users.create')->with('institutions', $institutions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::denies('super-admin-ability')){
            return redirect(route('home'));
        }
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'institution_id' => 'required',
            'password' => 'required'
        ]);

        $newUser = new User();
        $newUser->name = request('name');
        $newUser->email = request('email');
        $newUser->institution_id = request('institution_id');
        $newUser->password = Hash::make(request('password'));
        $newUser->save();

        $disciplinaryOfficer = Role::where('name', 'Disciplinary-Officer')->first();

        $newUser->roles()->attach($disciplinaryOfficer);

        return redirect()->route('super-admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('super-admin-ability')){
            return redirect(route('home'));
        }
        
        $roles = Role::all();
        return view('dashboard.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userId = $user->id;
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        User::where('id', $userId)->update($data);

        return redirect()->route('super-admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('super-admin-ability')){
            return redirect(route('home'));
        }
        $id = $user->id;
        User::where('id', $id)->delete();
        return redirect()->back();
    }
}
