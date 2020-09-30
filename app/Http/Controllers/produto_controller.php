<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produto_controller extends Controller
{
    public function index()
    {
            $contatos = [
                (object)['nome' => 'Chocolate', 'valor' => '12,50'],
                (object)['nome' => 'Sorvete', 'valor' => '30,00']
            ];
    
            return view('produto.index', compact('produtos'));
    }

    public function fazer(Request $req)
    {
        dd($req->all());
        return 'fazer';
    }

    public function modificar()
    {
        return 'modificar';
    }
}
