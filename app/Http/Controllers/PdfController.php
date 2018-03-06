<?php

namespace App\Http\Controllers;

use App\Models\Empleos;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    public function crearPdf(){
        $data = Empleos::all();

        $pdf = PDF::loadView('pdf.curriculo', compact('data'));

        return $pdf->download('Curriculo.pdf');
    }

}
