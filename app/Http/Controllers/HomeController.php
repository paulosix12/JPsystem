<?php

namespace App\Http\Controllers;
use App\fornecedores;
use App\ClientesModel;
use App\Pedidos;
use App\produtos;
use App\vendas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $fornecedores =  fornecedores::count();
        $clientes =  ClientesModel::count();
        $produtos =  produtos::count();
        $vendas =  vendas::count();
        $pedidos =  Pedidos::count();
        return view('index', array('pedidos' => $pedidos, 'fornecedores' => $fornecedores, 'clientes' => $clientes, 'produtos' => $produtos, 'vendas' => $vendas));
    }
}
