<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users\Users;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $users = Users::whereNotIn('id', [1])->get();


        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users, $id)
    {
          $users_edit = Users::findOrFail($id);

          return view('users.update')->with('users_edit', $users_edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users, $id)
    {
           $users_update = User::find($id);

           $users_update->name = $request->input('name');
           $users_update->email = $request->input('email');

           $users_update->save();

           return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users, $id)
    {
            $users_delete = Users::find($id);

            if($users_delete){

                $users_delete->delete();

                return redirect()->route('users.index');
            }
    }
}
