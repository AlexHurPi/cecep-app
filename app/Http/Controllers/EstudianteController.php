<?php

namespace App\Http\Controllers;

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
        ->select('estudiantes.*', 'carreras.nombre')
       ->get();
       return view("estudiante.index",['estudiantes' => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = DB::table('estudiantes')        
        ->get();
        return view('estudiantes.new',['estudiantes'=>$estudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();        
        $estudiante ->nombre =$request->nombre;
        $estudiante ->apellido =$request->apellido;
        $estudiante ->cedula =$request->cedula;
        $estudiante ->email =$request->email;
        $estudiante ->telefono =$request->telefono;
        $estudiante ->carrara =$request->carrera;        
        $estudiante->save();

        $estudiantes = DB::table('estudiantes')       
        ->select('estudiantes.*') 
        ->get();
        return view('estudiante.index',['estudiantes'=>$estudiantes]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiantes = DB::table('estudiantes')        
        ->get();
        return view('estudiantes.edit',['estudiante'=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::find($id);            
        $estudiante ->nombre =$request->nombre;
        $estudiante ->apellido =$request->apellido;
        $estudiante ->cedula =$request->cedula;
        $estudiante ->email =$request->email;
        $estudiante ->telefono =$request->telefono;
        $estudiante ->carrara =$request->carrera;        
        $estudiante->save();
 
        $estudiantes = DB::table('estudiantes')       
        ->select('estudiantes.*') 
        ->get();
        return view('estudiante.index',['estudiantes'=>$estudiantes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);        
        $estudiante->delete();        
        
        $estudiantes = DB::table('estudiantes')        
        ->select('estudiantes.*')
        ->get();
        return view('estudiantes.index',['estudiantes'=>$estudiantes]);
    }
}
