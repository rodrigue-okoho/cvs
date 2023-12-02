<?php


namespace App\Http\Controllers;




use App\Http\Service\EndPoints;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Css\Stylesheet;

class FrontController extends Controller
{

    public function home(){
        return view('home', []);

    }
    public function view_cv(){
        return view('home', []);

    }
    public function cvManager(){
        $json=EndPoints::getCandidat('654e3a440bb09f3eedae7ac0');
        logger($json);
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('cvs.cv1',['candidat'=>$json[0]]);
       // $pdf->getCss()->add_style();
        $pdf->save("/home/ballack/IdeaProjects/projet_school/fichier.pdf")->output();
        return $json;
    }
}
