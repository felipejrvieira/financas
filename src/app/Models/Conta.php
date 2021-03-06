<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    public function movimentacoes()
    {
        return $this->hasMany(Movimentacao::class);
    }
}
