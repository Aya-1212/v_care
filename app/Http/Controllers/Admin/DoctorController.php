<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddDoctorRequest;
use App\Http\Traits\FileSystem;
use App\Models\Major;
use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    use FileSystem;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('major')->paginate(10);
        return view('admin.pages.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        // dd($majors);
        return view('admin.pages.doctors.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddDoctorRequest $request)
    {
        // dd($request->all());
        dd($request);


        $image_name = $this->uploadImage('doctors');

        // // dd($request, $image_name);


        // Doctor::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'image' => $image_name,
        //     'location' => $request->location,
        //     'major_id' => $request->major_id,
        //     'description' => $request->description,
        // ]);
        $image_name = $this->uploadImage('doctors');
        // uploadFile('doctors/');

        // dd($request, $image_name);


        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image_name,
            'location' => $request->location,
            'major_id' => $request->major_id,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Doctor added successfully');
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
        $doctor = Doctor::with('major')->findOrFail($id);
        $majors = Major::all();
        return view('admin.pages.doctors.edit', compact(['doctor', 'majors']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:30', 'min:6'],
                'location' => ['required', 'url'],
                'description' => ['required', 'min:20', 'max:120'],
                'image' => ['required', 'image'],
            ]
        );

        $image_name = $this->uploadFile('uploads/doctors/');

        $doctor = Doctor::where('id', $doctor->id)->first();
        if ($doctor) {
            $doctor->update([
                'name' => $request->name,
                'image' => $image_name,
                'location' => $request->location,
                'major_id' => $request->major_id,
                'description' => $request->description,
            ]);
            // $doctor->name = $request->name;
            // $doctor->email = $request->email;
            // $doctor->location = $request->location;
            // $doctor->description = $request->description;
            // $doctor->major_id = $request->major_id;
            // $doctor->image = $image_name;
            
            // $doctor->save();
            return redirect()->route('doctors.edit', $doctor->id)->with('success','Updated Successfully');
        } else {
            return redirect()->back();

        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        // dd($doctor);
        $doctor->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
