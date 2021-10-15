<?php

namespace LaraTest;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['razao_social', 'cnpj', 'telefone', 'email', 'endereco'];

    public $timestamps = true;
}
