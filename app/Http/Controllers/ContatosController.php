<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatosController extends Controller
{
    public function criar(){
        return view('agenda.novo');
    }
    public function salvar(Request $request){
        Contato::create([
            'coluna_nome' => $request->coluna_nome,
            'coluna_numero' => $request->coluna_numero,
        ]);
        return 'Contato salvo!';
    }
}
