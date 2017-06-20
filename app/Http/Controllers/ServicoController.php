<?php

namespace App\Http\Controllers;

use App\Servico;
use App\Http\Requests\ServicoRequest;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){
        $servico = Servico::All();
        return view('servico.index', ['servico'=>$servico]);
    }

    public function create(){
        return view('servico.create');
    }

    public function store(ServicoRequest $request) {
        $novo_servico = $request->All();
        Servico::create($novo_servico);
        return redirect('servico');
    }

    public function destroy($id){
        Servico::find($id)->delete();
        return redirect('servico');
    }

    public function edit($id){
        $servico = Servico::find($id);
        return view('servico.edit', compact('servico'));
    }

    public function update(ServicoRequest $request, $id){
        $servico = Servico::find($id)->update($request->All());
        return redirect('servico');
    }
}
