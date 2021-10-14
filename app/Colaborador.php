<?php

namespace LaraTest;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaboradores';
    protected $fillable = ['nome', 'email', 'data_nascimento', 'empresa_id'];

    public $timestamps = true;
}
