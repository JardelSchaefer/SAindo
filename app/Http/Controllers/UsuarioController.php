<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $usuarios = \App\Usuario::get();
               return view("usuario.index", compact('usuarios'));

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
    $usuarios = \App\Usuario();
    $usuarios->nome = $request->get('nome');
    $usuarios->senha = $request->get('senha');
    $usuarios->endereco = $request->get('endereco');
    $usuarios->email = $request->get('email');
    $usuarios->celular = $request->get('celular');
    $usuarios->numero = $request->get('numero');

    $usuarios->save();
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
      $usuarios = \App\Usuario::find();
      return $usuarios;

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
     $usuarios = \App\Usuario();
    $usuarios->nome = $request->get('nome');
    $usuarios->senha = $request->get('senha');
    $usuarios->endereco = $request->get('endereco');
    $usuarios->email = $request->get('email');
    $usuarios->celular = $request->get('celular');
    $usuarios->numero = $request->get('numero');

    $usuarios->save();
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
     $usuarios = \App\Usuario::find($id);
     $usuarios->delete();
     return "true";
    }
}
