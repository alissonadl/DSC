<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_de_Teste extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Carrega tudo do banco de dados
    {
        return view('pagina_controller_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //Carrega o formulário
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Gravar/Salvar
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //Carrega um registro
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //Editar formulário
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //Salvando as alterações
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //Deletar
    {
        //
    }
}