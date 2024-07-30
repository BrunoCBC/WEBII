<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    use SoftDeleted;

    protected $filliable = ["url","descricao","horas_in",
    "status", "comentario","horas_out"];
}
