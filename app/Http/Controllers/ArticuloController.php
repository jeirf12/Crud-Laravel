<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    private $path = 'articulo';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulo::orderBy('id_articulo','DESC')->paginate(3);
        return view($this->path.'.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'codigo'=>'required', 'codigo_barras'=>'required', 'descripcion'=>'required', 'comentario'=>'required', 'imagen'=>'required','id_tipoarticulo'=>'required','stock_minimo'=>'required','stock_maximo'=>'required','id_ubicacion'=>'required','existencia'=>'required','porcentaje_iva'=>'required','valor_inicial'=>'required','tar_1'=>'required','peso'=>'required']);
        Articulo::create($request->all());
        return redirect()->route($this->path.'.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_articulo
     * @return \Illuminate\Http\Response
     */
    public function show($id_articulo)
    {
        $articulos=Articulo::find($id_articulo);
        return  view($this->path.'.index',compact('articulos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id_articulo)
    {
        $articulo=Articulo::find($id_articulo);
        return view($this->path.'.edit',compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_articulo)
    {
        $this->validate($request,[ 'codigo'=>'required', 'codigo_barras'=>'required', 'descripcion'=>'required', 'comentario'=>'required', 'imagen'=>'required','id_tipoarticulo'=>'required','stock_minimo'=>'required','stock_maximo'=>'required','id_ubicacion'=>'required','existencia'=>'required','porcentaje_iva'=>'required','valor_inicial'=>'required','tar_1'=>'required','peso'=>'required']); 
        Articulo::find($id_articulo)->update($request->all());
        return redirect()->route($this->path.'.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_articulo)
    {
        Articulo::find($id_articulo)->delete();
        return redirect()->route($this->path.'.index')->with('success','Registro eliminado satisfactoriamente');
    }
} 
