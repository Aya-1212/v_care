<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function create()
    {
        return view('admin.majors.create');
    }

    public function store()
    {
        // dd( request() );
        //validations
        request()->validate([
            "title" => "required|string|min:8|max:30",
            "image" => "required|image"
        ]);

        //save image
        $image_name = request()->image->getClientOriginalName();
        $image_name = time() . '_' . $image_name;
        //    dd($image_name);
        request()->image->move(public_path('uploads/majors/'), $image_name);

        //mass assignment

        Major::create(
            [
                "title" => request()->title,
                "image" => $image_name,
            ]
        );
          
        return redirect()->back()->with('success','The major has been added');
    }
}
