<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    use SoftDeleted;

    protected $filliable = ["nome", "cpf", "email", "senha"];
}
