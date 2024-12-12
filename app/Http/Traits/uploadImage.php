<?php 

 namespace App\Http\Traits;
 use Illuminate\Support\Facades\Storage;
trait uploadImage {
    public function uploadFile($image_path){
        $image_name = request()->image->getClientOriginalName();
        $image_name = time() . '_' . $image_name;
        //    dd($image_name);
        request()->image->move(public_path($image_path), $image_name);
        return $image_name;
    }

    // public function uploadImage($path){
    //     $image_name = request()->image->getClientOriginalName();
    //     $image_name = time() . '_'. $image_name;
    //     Storage::disk('public')->put(public_path($path."/".$image_name),request()->image);
    // }

    public function uploadImage(){
        $image = request()->image;
        request()->file('image')->store('/majors','custom_disk');
    }
    // public function deletePath(string $path){
    //    Storage::delete($path);
    // }
} 