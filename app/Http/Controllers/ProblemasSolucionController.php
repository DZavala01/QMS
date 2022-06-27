<?php

namespace App\Http\Controllers;

use App\Models\Documentacions;
use App\Models\ProblemasSolucion;
use Illuminate\Http\Request;

class ProblemasSolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problemas = Documentacions::where('tipo','problemas_soluciones')->where('activo', 1)->get();
        return view('problemas_soluciones.index',compact('problemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('problemas_soluciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request, [
            // 'area' => 'required',
        ]);

        $problema_solucion = new Documentacions();
        $problema_solucion->titulo = $request->input('titulo');
        $problema_solucion->tipo = $request->input('tipo');
        $problema_solucion->descripcion = $request->input('descripcion');
        $problema_solucion->donde_aplica = $request->input('donde_aplica');
        $problema_solucion->solucion = $request->input('solucion');
        $problema_solucion->link = $request->input('link');
        $problema_solucion->fecha_creacion = $request->input('fecha_creacion');
        $problema_solucion->fecha_actualizacion = $request->input('fecha_actualizacion');
        $problema_solucion->autor = $request->input('autor');

        $problema_solucion->save();
        //
        // $log = new Log();
        // $log->tabla = "documentacions";
        // $mov = "";
        // $mov = $mov . " titulo" . $problema_solucion->titulo . " tipo" . $problema_solucion->tipo . " descripcion" . $problema_solucion->descripcion. " donde_aplica" . $problema_solucion->donde_aplica . " solucion" . $problema_solucion->solucion . " link" . $problema_solucion->link. " fecha_creacion" . $problema_solucion->fecha_creacion . " fecha_actualizacion" . $problema_solucion->fecha_actualizacion . " autor" . $problema_solucion->autor;
        // $log->movimiento = $mov;
        // $log->usuario_id = Auth::user()->id;
        // $log->acciones = "Insercion";
        // $log->save();
        //
        return redirect('problemasoluciones')->with(array(
            'message' => 'El problema se guardó Correctamente'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProblemasSolucion  $problemasSolucion
     * @return \Illuminate\Http\Response
     */
    public function show(ProblemasSolucion $problemasSolucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProblemasSolucion  $problemasSolucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problema_solucion = Documentacions::find($id);
        return view('problemas_soluciones.edit')->with('problema_solucion', $problema_solucion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProblemasSolucion  $problemasSolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $this->validate($request, [
            // 'area' => 'required',
        ]);

        $problema_solucion = Documentacions::find($id);
        $problema_solucion->titulo = $request->input('titulo');
        $problema_solucion->tipo = $request->input('tipo');
        $problema_solucion->descripcion = $request->input('descripcion');
        $problema_solucion->donde_aplica = $request->input('donde_aplica');
        $problema_solucion->solucion = $request->input('solucion');
        $problema_solucion->link = $request->input('link');
        $problema_solucion->fecha_creacion = $request->input('fecha_creacion');
        $problema_solucion->fecha_actualizacion = $request->input('fecha_actualizacion');
        $problema_solucion->autor = $request->input('autor');

        $problema_solucion->save();
        //
        // $log = new Log();
        // $log->tabla = "documentacions";
        // $mov = "";
        // $mov = $mov . " titulo" . $problema_solucion->titulo . " tipo" . $problema_solucion->tipo . " descripcion" . $problema_solucion->descripcion. " donde_aplica" . $problema_solucion->donde_aplica . " solucion" . $problema_solucion->solucion . " link" . $problema_solucion->link. " fecha_creacion" . $problema_solucion->fecha_creacion . " fecha_actualizacion" . $problema_solucion->fecha_actualizacion . " autor" . $problema_solucion->autor;
        // $log->movimiento = $mov;
        // $log->usuario_id = Auth::user()->id;
        // $log->acciones = "Insercion";
        // $log->save();
        //
        return redirect('problemasoluciones')->with(array(
            'message' => 'El problema se actualizó Correctamente'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProblemasSolucion  $problemasSolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProblemasSolucion $problemasSolucion)
    {
        //
    }

    public function delete_problema_solucion($id)
    {
        $problema_solucion = Documentacions::find($id);
        if ($problema_solucion) {
            $problema_solucion->activo = 0;
            $problema_solucion->update();
            //
            // $mov = $mov . " titulo" . $problema_solucion->titulo . " tipo" . $problema_solucion->tipo . " descripcion" . $problema_solucion->descripcion. " donde_aplica" . $problema_solucion->donde_aplica . " solucion" . $problema_solucion->solucion . " link" . $problema_solucion->link. " fecha_creacion" . $problema_solucion->fecha_creacion . " fecha_actualizacion" . $problema_solucion->fecha_actualizacion . " autor" . $problema_solucion->autor;
            // $log->movimiento = $mov;
            // $log->usuario_id = Auth::user()->id;
            // $log->acciones = "Borrado";
            // $log->save();
            //
            return redirect()->route('problemasoluciones.index')->with(array(
                "message" => "El problema se ha eliminado correctamente"
            ));
        } else {
            return redirect()->route('welcome')->with(array(
                "message" => "El problema que trata de eliminar no existe"
            ));
        }
    }
}
