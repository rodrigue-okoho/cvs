<?php


namespace App\Http\Controllers;




use App\Http\Service\EndPoints;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Css\Stylesheet;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{

    public function home(){
        return view('home', []);

    }
    public function view_cv(){
        return view('home', []);

    }
    public function cvManager($id){
        logger(Storage::get("public/cvs"));
        //654e39e70bb09f3eedae7abf
       $json=EndPoints::getCandidat($id);
        $educations=$json['educations'];
        $experiences=$json['works'];
        Pdf::setOption(['dpi' => 100, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('cvs.cv1',['candidat'=>$json,'educations'=>$educations,'experiences'=>$experiences]);
       // $pdf->getCss()->add_style();
        $pdf->save('cvs/'.$id.'.pdf',Storage::get("public/cvs"));
      //  $pdf->save(env('URL_FILE').$id.'.pdf')->output();
        return [
            'url'=>env('APP_URL').'/cvs/'.$id.'.pdf'
        ];
    }
}
