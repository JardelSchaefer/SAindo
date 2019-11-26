<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $tomadasDeTempo = \App\Produto::get();
        return view('listagemCronometro.index', compact('tomadasDeTempo'));
    }

   
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $tomadaDeTempo = new \App\TomadaDeTempo();
        $tomadaDeTempo->Operacao_codope = $request->get('Operacao_codope');
        $tomadaDeTempo->produtoId = $request->get('produtoId');
        $tomadaDeTempo->numeroLeitura = $request->get('numeroLeitura');
        $tomadaDeTempo->data = $request->get('data');
        $tomadaDeTempo->tomadaDeTempocol = $request->get('tomadaDeTempocol');
        $tomadaDeTempo->operador = $request->get('operador');
        $tomadaDeTempo->obs = $request->get('obs');


        $tomadaDeTempo->save();
        return "true";
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tomadaDeTempo =  \App\TomadaDeTempo::find($id);
        return $tomadaDeTempo;
    }

    
    public function update(Request $request, $id)
    {
       $tomadaDeTempo = new \App\TomadaDeTempo();
        $tomadaDeTempo->Operacao_codope = $request->get('Operacao_codope');
        $tomadaDeTempo->produtoId = $request->get('produtoId');
        $tomadaDeTempo->numeroLeitura = $request->get('numeroLeitura');
        $tomadaDeTempo->data = $request->get('data');
        $tomadaDeTempo->tomadaDeTempocol = $request->get('tomadaDeTempocol');
        $tomadaDeTempo->operador = $request->get('operador');
        $tomadaDeTempo->obs = $request->get('obs');


        $tomadaDeTempo->save();
        return "true";

    }

    public function destroy($id)
    {
             $tomadaDeTempo =  \App\TomadaDeTempo::find($id);
             $tomadaDeTempo->delete();
             return "true";

    }
}
