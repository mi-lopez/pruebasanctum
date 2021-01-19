<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alumno;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivel',
        'letra'
    ];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
