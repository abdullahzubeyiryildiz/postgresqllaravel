<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStore;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStore $request)
    {
        $input = $request->validated();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->back()->withSuccess('Success Created User');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('users.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStore $request, $id)
    {
        $input = $request->validated();
        $input['password'] = bcrypt($input['password']);
        User::where('id',$id)->update($input);
        return redirect()->back()->withSuccess('Success Updated User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->withSuccess('Success Deleted User');
    }
}
