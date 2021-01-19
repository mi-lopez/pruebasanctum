<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function get()
    {
        $cursos = Curso::with('alumnos')->get();

        return response()->json($cursos);
    }
}
