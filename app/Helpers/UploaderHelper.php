<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait UploaderHelper
{
    private $prefx_nu = 0;
    /**
     * upload file through $request, Compress it.
     * to the server in public folder: /public/images/{categoryNameFolder}.
     * if_not_exist : create it with 775 permission.
     *
     * @param Request $request
     * @return String
     */
    public function uploadImage($imageFromRequest, $imageFolder, $prefx = '')
    {
        if (!file_exists(public_path('uploads/' . $imageFolder))) {
            mkdir(public_path('uploads/' . $imageFolder), 0777, true);
        }

        $prefx = ($prefx != '') ? $prefx . '_' : '';
        $dir_path = 'uploads/' . $imageFolder;
        $extension = $imageFromRequest->getClientOriginalExtension();
        $fileName = $this->makeFileName($prefx, $dir_path, $extension);

        $location = public_path($dir_path . '/' . $fileName);

        $image = Image::make($imageFromRequest);

        $image->save($location, 100);

        return $fileName;
    }

    function makeFileName($prefx, $dir_path, $extension)
    {
        $filename = $prefx . time() . "." . $extension;

        $actual_name = $prefx . time();
        $original_name = $actual_name;

        $i = 1;
        while (file_exists(public_path($dir_path . '/') . $actual_name . "." . $extension)) {
            $actual_name = (string)$original_name . '_' . $i;
            $filename = $actual_name . "." . $extension;
            $i++;
        }
        return $filename;
    }
}
