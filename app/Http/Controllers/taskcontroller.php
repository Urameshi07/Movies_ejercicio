<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tasks = Task::all();
       return \response($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula=new Peliculas;
        $pelicula->id= $request->input('id');
        $pelicula->titulo_p=$request->input('titulo_p');
        $pelicula->director_p=$request->input('director_p');
        $pelicula->duracion_p=$request->input('duracion_p');
        $pelicula->imagen_p=$request->POST('imagen_p');
        $pelicula->clasificacion=$request->input('clasificacion');
        $pelicula->fecha_est_p=$request->date('Y-m-d', strtotime($request->input('fecha_est_p')));
        $pelicula->fecha_fin_p=$request->date('Y-m-d', strtotime($request->input('fecha_fin_p')));
        $pelicula->status_p=$request->input('status_p');
        
        dd($request); 
        $pelicula->save();

        return \response($pelicula);

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return \response($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id)
        ->update($request->all());
        return \response($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return \response('La película .{$id} ha sido elminada.');
        
    }
}
