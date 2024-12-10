<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContasRequest;
use App\Models\Contas;
use Illuminate\Http\Request;

class Contascontroller extends Controller
{
    //Listar contas
    public function index(){
        //Obter contas (where('nome',200)->)
        $contas = Contas::orderByDesc('created_at')->get();

       //carregar view
       return view('contas.index', ['contas'=>$contas]);
    }
    //Carregar formulario cadastrar nove conta
    public function create(){
       //carregar view
       return view('contas.create');
    }
    //cadastrar no banco nova conta
    public function store(ContasRequest $request){
        //Validar dados vindos do formulario
        $request->validated();

       //Cadasrar no banco
       Contas::create($request->all());

       //Mensagem de sucesso
       return redirect()->route('contas.show')->with('success', 'Cadastrado com com sucesso!');

    }
    //cadastrar no banco nova conta
    public function show(){
       //carregar view
       return view('contas.show');
    }
    //cadastrar no banco nova conta
    public function edit(){
        return view('contas.edit');
    }
    //Actualizar no banco nova conta
    public function update(){
       //carregar view
       return view('contas.update');
    }
    //Apagar no banco nova conta
    public function destroy(){
       //carregar view
       dd("Apagar");
    }
}
