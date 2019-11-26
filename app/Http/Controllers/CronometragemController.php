<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cronometros = \App\Cronometragem::get();
       return view("cronometragem.index", compact($Cronometros));
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
         $cronometro = \App\Cronometragem();
         $cronometro->numdecro = $request->get('numdecro');
         $cronometro->numleicro = $request->get('numleicro');
         $cronometro->tempo = $request->get('tempo');
         $cronometro->tomadaDeTempo_codtom = $request->get('tomadaDeTempo_codtom');
         $cronometro->tomadaDeTempo_Operacao_codope = $request->get('tomadaDeTempo_Operacao_codope');
         $cronometro->tomadaDeTempo_Operacao_produto_codpro = $request->get('tomadaDeTempo_Operacao_produto_codpro');
         $cronometro->elemento_codele = $request->get('elemento_codele');
         $cronometro->elemento_Operacao_codope = $request->get('elemento_Operacao_codope');
         $cronometro->elemento_Operacao_produto_codpro = $request->get('elemento_Operacao_produto_codpro');
         $cronometro->save(); 
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $cronometro =  \App\Cronometragem::find($id);
        return $cronometro;
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
         $cronometro = \App\Cronometragem();
         $cronometro->numdecro = $request->get('numdecro');
         $cronometro->numleicro = $request->get('numleicro');
         $cronometro->tempo = $request->get('tempo');
         $cronometro->tomadaDeTempo_codtom = $request->get('tomadaDeTempo_codtom');
         $cronometro->tomadaDeTempo_Operacao_codope = $request->get('tomadaDeTempo_Operacao_codope');
         $cronometro->tomadaDeTempo_Operacao_produto_codpro = $request->get('tomadaDeTempo_Operacao_produto_codpro');
         $cronometro->elemento_codele = $request->get('elemento_codele');
         $cronometro->elemento_Operacao_codope = $request->get('elemento_Operacao_codope');
         $cronometro->elemento_Operacao_produto_codpro = $request->get('elemento_Operacao_produto_codpro');
         $cronometro->save(); 
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
       $cronometro = \App\Cronometragem::find($id);
       $cronometro->delete();
       return "true";
    }
}
