<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Http\Traits\uploadImage;
use Illuminate\Http\Request;

class MajorController extends Controller
{
     use uploadImage;

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
        // request()->file('image')->store('/majors','custom_disk');

        // dd(request()->file('image')->getClientOriginalName());
        //////////////////////////////////////////////////////////////////

       $name = time()."_".rand(1,1000000)."_".request()->image->getClientOriginalName();
       request()->file('image')->storeAS('/majors',$name,'custom_disk');
       
       dd($name);

        // dd( request()->all() );
        // $this->uploadImage('uploads/majors');
        // validations
        // request()->validate([
        //     "title" => "required|string|min:6|max:30",
        //     "image" => "required|image"
        // ]);

        // //save image
        // $image_name = $this->uploadFile('uploads/majors/');

        // //mass assignment

        // Major::create(
        //     [
        //         "title" => request()->title,
        //         "image" => $image_name,
        //     ]
        // );

        // return redirect()->back()->with('success', 'The major has been added');
    }

    public function edit(Major $major)
    {
        $major = Major::findOrFail($major->id);
        return view('admin.pages.majors.edit',compact('major'));
    }

    public function update(Major $major)
    {
         request()->validate([
            "title" => "required|string|max:30|min:6",
            "image"=>'required|image'
         ]);

         $major = Major::where('id',$major->id)->first();
         if($major){
            //delete image
            // $this->deletePath('uploads/majors/1730996023_book4.jpg');
            // dd("uploads/majors/".$major->image);
            // update major
            $major->title = request()->title;
            $image_name = $this->uploadFile('uploads/majors/');
            $major->image = $image_name;
            $major->save();
            return redirect()->route('majors.edit',$major->id)->with('success','Updated Successfully');
         }else{
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
