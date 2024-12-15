<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditMajorRequest;
use App\Models\Major;
use App\Http\Traits\FileSystem;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    use FileSystem;

    public function index()
    {
        $majors = Major::paginate(10);
        return view('admin.pages.majors.index', compact('majors'));
    }
    public function create()
    {
        return view('admin.pages.majors.create');
    }

    public function store()
    {

        // validations
        request()->validate([
            "title" => "required|string|min:6|max:30",
            "image" => "required|image"
        ]);

        // //save image
        $image_name = $this->uploadImage('majors');

        // //mass assignment
        Major::create(
            [
                "title" => request()->title,
                "image" => $image_name,
            ]
        );

        return redirect()->back()->with('success', 'The major has been added');
    }

    public function edit(Major $major)
    {
        $major = Major::findOrFail($major->id);
        return view('admin.pages.majors.edit', compact('major'));
    }

    public function update(EditMajorRequest $request, Major $major)
    {
        //  dd($request->validated(),$major);

        $major = Major::where('id', $major->id)->first();
        if ($major) {
            //edit name
            $major->title = $request->title;
            // request has image
            if (isset($request->image)) {
                $this->deleteImage("/majors" . "/" . $major->image);
                $image_name = $this->uploadImage('majors');
                $major->image = $image_name;
            }
            $major->save();
            return redirect()->route('majors.edit', $major->id)->with('success', 'Updated Successfully');
        } else {
            dd('no major');
            return redirect()->back();
        }
    }

    public function destroy(Major $major)
    {
        // dd($major);
        // هل في دكاتره في تخصص دا
        $have_doctors = $major->doctors()->count();
        if ($have_doctors) {
            return redirect()->back()->with('error', value: 'This Major has doctors');

        } else {
            $major->delete();
            return redirect()->back()->with('success', 'deleted successfully');
        }

    }
}
