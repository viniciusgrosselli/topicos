<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Http\Requests\PessoaRequest;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoa = Pessoa::All();
        return view('pessoa.index', ['pessoa'=>$pessoa]);
    }

    public function create(){
        return view('pessoa.create');
    }

    public function store(PessoaRequest $request) {
        $nova_pessoa = $request->All();
        Pessoa::create($nova_pessoa);
        return redirect('pessoa');
    }

    public function destroy($id){
        Pessoa::find($id)->delete();
        return redirect('pessoa');
    }

    public function edit($id){
        $pessoa = Pessoa::find($id);
        return view('pessoa.edit', compact('pessoa'));
    }

    public function update(PessoaRequest $request, $id){
        $pessoa = Pessoa::find($id)->update($request->All());
        return redirect('pessoa');
    }
}
