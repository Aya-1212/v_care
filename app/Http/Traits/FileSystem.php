<?php

namespace app\Http\Traits;

use Storage;

trait FileSystem
{
    public function uploadImage($path)
    {
        // Image Name
        $image_name = request()->image->getClientOriginalName();
        $image_name = time() . "_" . rand(0, 100000000) . "_" . $image_name;
        // Storing
        request()->file('image')->storeAs($path, $image_name, 'custom_disk');
        // Return Image Name
        return $image_name;
    }

    public function deleteImage($path){
        // Delete Image
        Storage::disk('custom_disk')->delete($path);
    }
}
