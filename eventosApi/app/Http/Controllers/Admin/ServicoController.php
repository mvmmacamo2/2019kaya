<?php

namespace App\Http\Controllers\Admin;

use App\Modelo\Constantes\Servico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ServicoController extends Controller
{
    public function getServicos () {
        $servicos = Servico::orderBy('id', 'desc')->get();
        return response()->json(['data' => $servicos], 200);
    }
    public function saveServico(Request $request)
    {
        $s = DB::table('servicos')->where('name', $request->name)->count();
        if ($s > 0) {
            return response()->json(['message' => 'Este servico já esta disponivel, tente outro!', 'class' => 'error']);
        } else {
            $save = Servico::create($request->all());
            $d = Servico::orderBy('id', 'desc')->get();
            if ($save) {
                return response()->json(['message' => 'Serviço salvo com sucesso!', 'class' => 'success', 'data' => $d]);
            } else {
                return response()->json(['message' => 'Erro ao salvar', 'class' => 'error']);
            }
        }
    }
}
