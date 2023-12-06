<?php


namespace App\Helpers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Helpers
{
    public static function uploadPDF(string $format, $image = null,string $name)
    {
        if ($image != null) {
            if (!Storage::disk('public')->exists("cvs")) {
                Storage::disk('public')->makeDirectory("cvs");
            }
            Storage::disk('public')->put("cvs" . $name, file_get_contents($image));
        } else {
            $imageName = 'def.pdf';
        }

        return $imageName;
    }
}
