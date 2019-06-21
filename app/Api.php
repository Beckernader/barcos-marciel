<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    // definição da Mass Assignment
    protected $fillable = ['modelo', 'marca_id', 'ano', 'categoria', 
    'tamanho','acompanhamentos','preco','diaria','foto'];
    
}
