<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests\EstadoRequest;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index(){
        $estado = Estado::All();
        return view('estado.index', ['estado'=>$estado]);
    }

    public function create(){
        return view('estado.create');
    }

    public function store(EstadoRequest $request) {
        $novo_estado = $request->All();
        Estado::create($novo_estado);
        return redirect()->route('estado');
    }

    public function destroy($id){
        Estado::find($id)->delete();
        return redirect()->route('estado');
    }

    public function edit($id){
        $estado = Estado::find($id);
        return view('estado.edit', compact('estado'));
    }

    public function update(EstadoRequest $request, $id){
        $estado = Estado::find($id)->update($request->All());
        return redirect()->route('estado');
    }
}
