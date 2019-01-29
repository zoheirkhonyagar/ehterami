<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit' , compact('user'));
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
        $this->validate($request , [
            'type' => 'required|string',
        ]);

        $user->update([
            'type' => $request->type
        ]);

        return redirect(route('user.index'));
    }

    public function profile()
    {
        return view('admin.panel.profile');
    }

    public function changeProfile(Request $request)
    {
        $this->validate( $request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|regex:/(09)[0-9]{9}/',
            'email' => 'required|unique:users,email,' .auth()->user()->id,
        ]);

        auth()->user()->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'address' => request('address'),
            'email' => request('email'),
        ]);
        // return $request;
        return back();
    }

    public function changePasswordView()
    {
        return view('admin.panel.change-password');
    }

    public function changePassword(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
