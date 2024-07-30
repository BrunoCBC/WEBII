<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    use SoftDeleted;

    protected $filliable = ["nome","sigla","total_horas"];
}
