<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes =DB::table('estudiantes')       
        ->join('carreras', 'estudiantes.carreraid', '=', 'carreras.id')       
         ->select('estudiantes.*', 'carreras.nombre as nombre_carrera')//se coloca un alias para solucionar el problema de que en el campo de nombre del estudiante se veia el nombre de la carrera
        ->get();
        return json_encode(['estudiantes' => $estudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
