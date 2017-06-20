<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Http\Requests\CidadeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(){
        $cidade = Cidade::All();
        return view('cidade.index', ['cidade'=>$cidade]);
    }

    public function create(){
        return view('cidade.create');
    }

    public function store(CidadeRequest $request) {
        $nova_cidade = $request->All();
        Cidade::create($nova_cidade);
        return redirect('cidade');
    }

    public function destroy($id){
        Cidade::find($id)->delete();
        return redirect('cidade');
    }

    public function edit($id){
        $cidade = Cidade::find($id);
        return view('cidade.edit', compact('cidade'));
    }

    public function update(CidadeRequest $request, $id){
        $cidade = Cidade::find($id)->update($request->All());
        return redirect('cidade');
    }
}
