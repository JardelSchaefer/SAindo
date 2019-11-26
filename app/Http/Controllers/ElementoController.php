<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos = \App\Elemento::get();
        return view('elemento.index', compact('elementos'));
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
       $elemento = new \App\Elemento();
       $elemento->Operacao_codope = $request->get('Operacao_codope');
       $elemento->Operacao_produto_codpro = $request->get('Operacao_produto_codpro');
       $elemento->nome = $request->get('nome');
       $elemento->ritmo = $request->get('ritmo');
       $elemento->interferencia = $request->get('interferencia');
       $elemento->concessoes = $request->get('concessoes');
       $elemento->qtdVezes = $request->get('qtdVezes');
       $elemento->porPeca = $request->get('porPeca');
       $elemento->sav();
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
       $elemento = \App\Elemento::find($id);
       return $elemento;
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
       $elemento = new \App\Elemento();
       $elemento->Operacao_codope = $request->get('Operacao_codope');
       $elemento->Operacao_produto_codpro = $request->get('Operacao_produto_codpro');
       $elemento->nome = $request->get('nome');
       $elemento->ritmo = $request->get('ritmo');
       $elemento->interferencia = $request->get('interferencia');
       $elemento->concessoes = $request->get('concessoes');
       $elemento->qtdVezes = $request->get('qtdVezes');
       $elemento->porPeca = $request->get('porPeca');
       $elemento->sav();
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
        $elemento = \App\Elemento::find($id);
        $elemento->delete();
        return "true";       
        
    }
}
