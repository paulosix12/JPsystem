<?php

namespace App\Http\Controllers;

use Request;
use App\colaboradores;
use App\ddl;

class ConfiguracoesController extends Controller
{
    public function index(){
        $ddl_colab = ddl::all();
        $colaboradores = colaboradores::all();
        return view ('Config/index', compact('ddl_colab','colaboradores'));
    }

    function Novoddl(){      
        $params = Request::all();
        $ddl = new ddl($params);
        $ddl->save();
        return redirect('/Configuracoes/Config');
      }

      function NovoColab(){      
        $params = Request::all();
        $colaboradores = new colaboradores($params);
        $colaboradores->save();
        return redirect('/Configuracoes/Config');
      }

}
