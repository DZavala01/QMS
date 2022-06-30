<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('documentacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function busqueda(Request $request){
        $validateData = $this->validate($request,[
           'busqueda'=>'required'
           ]);

       $busqueda = $request->input('busqueda');
       if(isset($busqueda) && !is_null($busqueda)){
           $vsequipos = Documentacion::where('activo','=',1)
               ->where('id','=',$busqueda)
               ->orWhere('udg_id','LIKE','%'.$busqueda.'%')
               ->orWhere('marca','LIKE','%'.$busqueda.'%')
               ->orWhere('modelo','LIKE','%'.$busqueda.'%')
               ->orWhere('numero_serie','LIKE','%'.$busqueda.'%')
               ->orWhere('mac','LIKE','%'.$busqueda.'%')
               ->orWhere('ip','LIKE','%'.$busqueda.'%')
               ->orWhere('detalles','LIKE','%'.$busqueda.'%')
               ->orWhere('tipo_conexion','LIKE','%'.$busqueda.'%')
               ->orWhere('tipo_equipo','LIKE','%'.$busqueda.'%')
               ->orWhere('area','LIKE','%'.$busqueda.'%')->get();

	   $equipos = $this->cargarDT($vsequipos );

           return view('equipo.busqueda')->with('equipos',$equipos)->with('busqueda', $busqueda);
       }else{
           return redirect('home')->with(array(
               'message'=>'Debe introducir un término de búsqueda'
           ));
       }

    }
    
}
