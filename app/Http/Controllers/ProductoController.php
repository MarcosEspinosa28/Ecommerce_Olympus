<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categorias;
use App\Models\Clasificaciones;




class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos = Productos::select('productos.id','nombre_producto','imagen', 'color',
            'valor', 'cantidad','categorias.categoria','clasificaciones.clasificacion')

            ->join('categorias','categorias.id','=','productos.categoria_id','inner')
            ->join('clasificaciones','clasificaciones.id','=','productos.clasificacion_id','inner')
            ->get();

        return $Productos;
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
        $Producto =  $request->except('_token');

        if($request->hasFile('imagen')){

            $Producto['imagen'] = $request->file('imagen')->store('imagenes','public');

        }
        $Productos2 = Productos::insert($Producto);
        return $Productos2;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Productos = Productos::select('productos.id','nombre_producto','imagen', 'color',
            'valor', 'cantidad','categorias.categoria','clasificaciones.clasificacion','categoria_id','clasificacion_id')

            ->join('categorias','categorias.id','=','productos.categoria_id','inner')
            ->join('clasificaciones','clasificaciones.id','=','productos.clasificacion_id','inner')
            ->Where('productos.id',$id)->first();
        return $Productos;
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
        $Producto = $request->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $producto = Productos::findOrFail($id);

            Storage::delete('public/'.$producto->imagen);

            $Producto['imagen'] = $request->file('imagen')->store('imagenes','public');
        }
        $Producto3 = Productos::find($id)->where('id','=', $id)->update($Producto);
        return $Producto3;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Productos = Productos::where('id',$id)->delete();
        return $Productos;
    }
}
