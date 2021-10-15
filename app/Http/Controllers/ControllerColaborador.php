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
//        date_default_timezone_set('America/Bahia_Banderas');

        $colaborador = [
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => str_replace("/", "-", implode('/', array_reverse(explode('/', $request->data_nascimento)))),//str_replace("/", "-", $request->data_nascimento),
            'telefone' => $request->telefone,
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
        $colaborador->telefone = $request->telefone;
        $colaborador->empresa_id = $colaborador->empresa_id;

        $colaborador->save();

        return redirect()->action('ControllerColaborador@index');
    }
}
