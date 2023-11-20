<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras =DB::table('carreras')              
         ->select('carreras.*')
        ->get();
        return json_encode(['carreras' => $carreras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carrera = new Carrera();        
        $carrera ->nombre =$request->nombre;
        $carrera ->observacion =$request->observacion;               
        $carrera->save();
       
        return json_encode(['carrera'=>$carrera]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrera = Carrera::find($id);
        return json_encode(['carrera'=>$carrera]);
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
