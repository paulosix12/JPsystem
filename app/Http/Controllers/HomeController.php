<?php

namespace App\Http\Controllers;
use App\produtos;
use App;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{        
    public function generateDocx(){     
        
        //return view('Documentos/pedidos');
        $pdf = PDF::loadView('Documentos/pedidos');
        return $pdf->stream('document2.pdf');
        
    }
}
