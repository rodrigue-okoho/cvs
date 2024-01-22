<?php


namespace App\Helpers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Helpers
{
    public static function slug($data){
        $slug=str_ireplace(" ","_",strtolower($data));
        return $slug;
    }
    public static function uploadImage($data,$type,$dest){
        $image_parts = explode(";base64,", $data);
        $image_base64 = base64_decode($image_parts[1]);
        if ($type === 'image/png') {
            $imagename = uniqid() . '.png';
        } else {
            $imagename = uniqid() . '.jpg';
        }
        if (!Storage::disk('public')->exists($dest)) {
            Storage::disk('public')->makeDirectory($dest);
        }
        Storage::disk('public')->put($dest.'/' . $imagename, $image_base64);
        return env("APP_URL").'/storage/'.$dest."/".$imagename;
    }
    public static function uploadPDF($format, $image = null,string $name)
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
