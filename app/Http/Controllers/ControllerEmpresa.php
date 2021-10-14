<?php

namespace LaraTest\Http\Controllers;

use Illuminate\Http\Request;
use LaraTest\Empresa;

class ControllerEmpresa extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();

        return view('empresas.home')->with('empresas', $empresas);
    }

    public function create(Request $request)
    {
        $empresa = [
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco
        ];

        Empresa::create($empresa);

        return redirect()->action('ControllerEmpresa@index');
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect()->action('ControllerEmpresa@index');
        }

        return view('empresas.edit')->with('empresa', $empresa);
    }

    public function edit(Request $request, $id)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect()->action('ControllerEmpresa@index');
        }

        $empresa->razao_social = $request->razao_social;
        $empresa->cnpj = $request->cnpj;
        $empresa->telefone = $request->telefone;
        $empresa->endereco = $request->endereco;

        $empresa->save();

        return redirect()->action('ControllerEmpresa@index');
    }
}
