<?php

namespace App\Services;
use Illuminate\Http\UploadedFile;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;

/**
 * Class ImageService.
 */
class ImageService
{
    public function store(array $images,Doctor $doctor)
    {
        foreach ($images as $image) {
            // Check if the file is an instance of UploadedFile
            if ($image instanceof UploadedFile) {
                // Validate the file size
                $validator = Validator::make(['image' => $image], [
                    'image' => 'required|file|max:20480', // maximum file size in kilobytes (20MB in this example)
                ]);
    
                // Check if validation fails
                if ($validator->fails()) {
                    // Handle validation failure, such as returning errors
                    return response()->json(['errors' => $validator->errors()], 422);
                }
    
                // If validation passes, move the image and create the record
                $imageName = $this->moveImage($image);
                Doctor::create([
                    "image" => $imageName,
                    
                ]);
            } else {
                // Handle if $image is not an instance of UploadedFile
                return response()->json(['error' => 'Invalid file.'], 422);
            }
        }
    }

    public function moveImage($image)
    {
        // dd($image);
       
        $imageName = time() . "." . $image->extension();
        $image->move(public_path('images/storage'), $imageName);
        return $imageName;
    }


}
