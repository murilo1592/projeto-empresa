<?php

namespace LaraTest\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraTest\Colaborador;
use LaraTest\Http\Controllers\Controller;

//use LaraTest\Colaborador;

class ControllerColaboradores extends Controller
{
    public function index($empresa, $mes)
    {
        $sql = "SELECT cp.nome, cp.telefone, cp.data_nascimento
                FROM colaboradores cp
                WHERE cp.empresa_id = ?
                    and EXTRACT(month from cp.data_nascimento) = ?
                ORDER BY cp.data_nascimento DESC";

        $result = DB::select($sql, [$empresa, $mes]);

        return empty($result) ? NULL : $result;
    }
}
