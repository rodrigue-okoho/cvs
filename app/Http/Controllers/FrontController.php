<?php


namespace App\Http\Controllers;



use App\Http\Service\EndPoints;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Css\Stylesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{

    public function home(){
        $json=EndPoints::getCandidat("654e39e70bb09f3eedae7abf");
        $educations=$json['educations'];
        $languages=$json['languages'];
        logger($languages);
        $experiences=$json['works'];
        return view('cvs.cv3', ['candidat'=>$json,"languages"=>$languages,
            'educations'=>$educations,'experiences'=>$experiences]);
    }
    public function view_cv(){
        return view('cvs.cv4', []);

    }
    public function cvManager($id,$typecv){
        logger(Storage::get("public/cvs"));
        //654e39e70bb09f3eedae7abf
        $json=EndPoints::getCandidat($id);
        $educations=$json['educations'];
        $languages=$json['languages'];
        logger($languages);
        $experiences=$json['works'];
        Pdf::setOption(['dpi' => 10, 'defaultFont' => 'sans-serif']);
        switch ($typecv){
            case 1:
                $pdf = PDF::loadView('cvs.cv1',['candidat'=>$json,"languages"=>$languages,
                    'educations'=>$educations,'experiences'=>$experiences]);
                Storage::put('public/cvs/'.$id.'.pdf', $pdf->output());
               // $pdf->save('cvs/'.$id.'.pdf',Storage::get("public/cvs"));
                break;
            case 2:

                $pdf = PDF::loadView('cvs.cv2',['candidat'=>$json,"languages"=>$languages,'educations'=>$educations,'experiences'=>$experiences]);
                $pdf->getDomPdf()->getOptions()->set('enable_php', true);
                Storage::put('public/cvs/'.$id.'.pdf', $pdf->output());
               // $pdf->setPaper('letter', 'landscape')->setOption('margin-bottom', 0)->save('cvs/'.$id.'.pdf',Storage::get("public/cvs"));
                break;
            default:
                $pdf = PDF::loadView('cvs.cv1',['candidat'=>$json,"languages"=>$languages,'educations'=>$educations,'experiences'=>$experiences]);
                Storage::put('public/cvs/'.$id.'.pdf', $pdf->output());
                // $pdf->save('cvs/'.$id.'.pdf',Storage::get("public/cvs"));
                logger("87777");
                break;
        }

      //  $pdf->save(env('URL_FILE').$id.'.pdf')->output();
        return [
            'url'=>env('APP_URL').'/storage/cvs/'.$id.'.pdf'
        ];
    }
    public function uploadPhoto(Request $request){
     //   logger($request->get("imageUrl"));
        $id=$request->get("id");
        $data=$request->get("imageUrl");
        $type=$request->get("type");
        $image_parts = explode(";base64,", $data);
            $image_base64 = base64_decode($image_parts[1]);
            if ($type === 'image/png') {
                $imagename = uniqid() . '.png';
            } else {
                $imagename = uniqid() . '.jpg';
            }

            $file = Storage::path("public/photos/") . $imagename;
        if (!Storage::disk('public')->exists("photos")) {
            Storage::disk('public')->makeDirectory("photos");
        }
        Storage::disk('public')->put('photos/' . $imagename, $image_base64);
        //logger(env("APP_URL").'/storage/photos/'.$imagename);
            $item=[
              'mode'=>$request->get("mode"),
                'id'=>$id,
                "user_type"=>$request->get("user_type"),
              'url'=>env("APP_URL").'/storage/photos/'.$imagename,
                'domain'=>env("APP_URL"),
                'imageUrl'=>env("APP_URL").'/storage/photos/'.$imagename,
                'fileUrl'=>$file
            ];
            logger(json_encode($item));
         return EndPoints::savePhoto(json_encode($item));

    }
    public function uploadPhotoEmployer(Request $request){
        $id=$request->get("id");
        $data=$request->get("imageUrl");
        $type=$request->get("type");
        $image_parts = explode(";base64,", $data);
        $image_base64 = base64_decode($image_parts[1]);
        if ($type === 'image/png') {
            $imagename = uniqid() . '.png';
        } else {
            $imagename = uniqid() . '.jpg';
        }

        $file = Storage::path("public/photos/") . $imagename;
        if (!Storage::disk('public')->exists("photos")) {
            Storage::disk('public')->makeDirectory("photos");
        }
        Storage::disk('public')->put('photos/' . $imagename, $image_base64);
        $item=[
            'mode'=>$request->get("mode"),
            'id'=>$id,
            "user_type"=>$request->get("user_type"),
            'url'=>env("APP_URL").'/storage/photos/'.$imagename,
            'domain'=>env("APP_URL"),
            'imageUrl'=>env("APP_URL").'/storage/photos/'.$imagename,
            'fileUrl'=>$file
        ];
        return EndPoints::savePhotoEmployer(json_encode($item));

    }
}
