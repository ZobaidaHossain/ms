<?php

namespace App\Traits;

use Illuminate\Support\Str;
use App\Models\SystemLog;
use Illuminate\Support\Facades\Storage;
use Image;

trait SystemTrait
{

    /**
     * @param Request $request
     * @return $this|false|string
     */


    public function successResponse($message, $url, $data)
    {

        return [
            'message' => $message,
            'redirectUrl' => $url,
            'data' => $data,
            'status' => true,
        ];
    }
    public function warningResponse($message, $url, $data)
    {

        return [
            'warningMessage' => $message,
            'redirectUrl' => $url,
            'data' => $data,
            'status' => false,
        ];
    }
    public function errorResponse($message, $url, $data)
    {

        return [
            'errorMessage' => $message,
            'redirectUrl' => $url,
            'data' => $data,
            'status' => false,
        ];
    }



    public function imageUpload($imageFile, $folder, $blurIntensity = 0, $height = null, $width = null)
    {
        if (!file_exists(storage_path('app/public/' . $folder))) {
            mkdir(storage_path('app/public/' . $folder), 0755, true);
        }

        $imageName = time() . '.' . $imageFile->extension();

        $imageFile->move(storage_path('app/public/' . $folder), $imageName);

        $imagePath = storage_path('app/public/' . $folder . '/' . $imageName);

        if ($width && $height) {
            $originalImage = imagecreatefromstring(file_get_contents($imagePath));
            $resizedImage = imagecreatetruecolor($width, $height);

            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            imagecopyresampled(
                $resizedImage,
                $originalImage,
                0,
                0,
                0,
                0,
                $width,
                $height,
                $originalWidth,
                $originalHeight
            );

            imagejpeg($resizedImage, $imagePath, 90);

            imagedestroy($originalImage);
            imagedestroy($resizedImage);
        }


        if ($blurIntensity > 0) {
            $originalImage = imagecreatefromstring(file_get_contents($imagePath));

            for ($i = 0; $i < $blurIntensity; $i++) {
                imagefilter($originalImage, IMG_FILTER_GAUSSIAN_BLUR);
            }

            imagejpeg($originalImage, $imagePath, 90);
            imagedestroy($originalImage);
        }

        return $folder . '/' . $imageName;
    }
    // public function videoUpload($videoFile, $folder)
    // {
    //     // Define the path where videos will be stored in the 'public' disk
    //     $videoPath = storage_path('app/public/' . $folder);

    //     // Ensure the folder exists
    //     if (!file_exists($videoPath)) {
    //         mkdir($videoPath, 0755, true); // Create the folder if it doesn't exist
    //     }

    //     // Get the original name of the video
    //     $videoName = preg_replace('/[^a-zA-Z0-9\-_\.]/', '_', $videoFile->getClientOriginalName());

    //     // Move the uploaded video to the storage path
    //     $videoFile->move($videoPath, $videoName);

    //     // Return the relative path to the video file
    //     // This ensures it points to the correct location in the public storage
    //     return 'storage/' . $folder . '/' . $videoName;
    // }

    public function videoUpload($videoFile, $folder)
{
    // Ensure the folder exists
    $videoPath = storage_path('app/public/' . $folder);
    if (!file_exists($videoPath)) {
        mkdir($videoPath, 0755, true);
    }

    // Generate a sanitized video name
    $videoName = time() . '_' . preg_replace('/[^a-zA-Z0-9\-_\.]/', '_', $videoFile->getClientOriginalName());

    // Move the video to the correct folder
    $videoFile->move($videoPath, $videoName);

    // Return the relative path (without 'storage/')
    return $folder . '/' . $videoName;
}


    public function fileUpload($file, $folder)
{
    if (!file_exists(storage_path('app/public/' . $folder))) {
        mkdir(storage_path('app/public/' . $folder), 0755, true);
    }

    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->move(storage_path('app/public/' . $folder), $fileName);

    return $folder . '/' . $fileName;
}


// public function translate($english, $bangla)
// {
//     return (session()->has('locale') && session()->get('locale') === 'bn') ? $bangla : $english;
// }


      

}
