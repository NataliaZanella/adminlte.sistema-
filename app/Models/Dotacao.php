<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dotacao extends Model
{
    use HasFactory;

    protected $fillable = ['Valor_total', 'Nome', 'Tipo', 'Subcategoria', 'Ano', 'Data_incio', 'Empresa_prestadora'];
}
