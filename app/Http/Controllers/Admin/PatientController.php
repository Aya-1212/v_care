<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPatientRequest;
use App\Http\Requests\PatientRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::simplePaginate(10);
        return view('admin.pages.patients.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.patients.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        // dd($request->validated());
        $data = $request->validated();

        User::create($data);
        return redirect()->back()->with('success', 'Patient Added Successfully');

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
    public function edit(User $user)
    {
       $user = User::findOrFail($user->id)->first();
       return view('admin.pages.patients.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditPatientRequest $request,User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return to_route('users.index')->with('success','Patient Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index')->with('success', 'Patient Deleted Successfully');
    }
}
