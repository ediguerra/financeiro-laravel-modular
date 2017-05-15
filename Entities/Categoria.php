<?php

namespace Financeiro\Financeiro\Entities;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [];

    protected function setNome(){
        return "teste";
    }
}
