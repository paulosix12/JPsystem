<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\produtos;
use DB;

class SearchController extends Controller
{
    public function autocomplete(){
        $term = request('term');
        
        $results = array();
        
        $queries = DB::table('produtos')
            ->where('nome_do_produto', 'LIKE', '%'.$term.'%')
            ->orWhere('descricao', 'LIKE', '%'.$term.'%')
            ->take(5)->get();
        
        foreach ($queries as $query)
        {
            $results[] = [ 'value' => $query->nome_do_produto, 'id' => $query->descricao];
        }
    return Response()->json($results);
    }
    
}