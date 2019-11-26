<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view("operacao.index");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $operacao = new \App\Operacao();
       $operacao->produto_codpro = $request->get('produto_codpro');
       $operacao->nome = $request->get('nome');
       $operacao->maquina = $request->get('maquina');
       $operacao->tipoEstudo = $request->get('tipoEstudo');
       $operacao->cronometista = $request->get('cronometista');
       $operacao->save();
       return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operacao =  \App\Operacao::find($id);
        return $operacao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $operacao = new \App\Operacao();
       $operacao->produto_codpro = $request->get('produto_codpro');
       $operacao->nome = $request->get('nome');
       $operacao->maquina = $request->get('maquina');
       $operacao->tipoEstudo = $request->get('tipoEstudo');
       $operacao->cronometista = $request->get('cronometista');
       $operacao->save();
       return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $operacao =  \App\Operacao::find($id);
     $operacao->delete();
     return "true";
    }
}
