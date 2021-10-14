<?php

namespace LaraTest\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraTest\Colaborador;
use LaraTest\Empresa;

class ControllerColaborador extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::all();

        $sql = "SELECT cb.*, ep.razao_social empresa FROM colaboradores cb
                INNER JOIN empresas ep ON cb.empresa_id = ep.id";

        $colaboradores = DB::select($sql);

        return view('colaboradores.home')->with('colaboradores', $colaboradores);
    }

    public function createForm($empresa_id)
    {
        $empresa = Empresa::find($empresa_id);

        if (empty($empresa)) {

            return redirect()->action('ControllerEmpresa@index');
        }

        return view('colaboradores.create')->with('empresa_id', $empresa_id);
    }

    public function create(Request $request, $id)
    {
        $colaborador = [
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'empresa_id' => $id
        ];

        Colaborador::create($colaborador);

        return redirect()->action('ControllerColaborador@index');
    }

    public function show($id)
    {
        $colaborador = Colaborador::find($id);

        if (empty($colaborador)) {

            return redirect()->action('ControllerColaborador@index');
        }

        return view('colaboradores.edit')->with('colaborador', $colaborador);
    }

    public function edit(Request $request, $id)
    {
        $colaborador = Colaborador::find($id);

        if (empty($colaborador)) {

            return redirect()->action('ControllerColaborador@index');
        }

        $colaborador->nome = $request->nome;
        $colaborador->email = $request->email;
        $colaborador->data_nascimento = $request->data_nascimento;
        $colaborador->empresa_id = $colaborador->empresa_id;

        $colaborador->save();

        return redirect()->action('ControllerColaborador@index');
    }
}
