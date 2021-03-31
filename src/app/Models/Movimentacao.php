<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    
    protected $table = 'movimentacoes';

    protected $fillable = ['conta_id', 'categoria_id', 'efetuado_em', 'valor', 'comentario'];
}
