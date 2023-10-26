<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();

        $context = compact('productos');

        return view('Admin.Productos.index',$context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        $context = compact('categorias');

        return view('Admin.Productos.create',$context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'nombre' => 'required|min:3|max:255',
           'descripcion' => 'required|min:3|max:255',
           'precio' => 'required|numeric',
           'inventario' => 'required|numeric',
           'img' => 'required|image|mimes:jpeg,png,jpg',
           'categoria_id' => 'required|exists:categorias,id'
        ]);

        if($request->hasFile('img')){

            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/productos/',$name);

            $request['imagen'] = $name;
        }

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index');
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
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();

        $context = compact('producto','categorias');

        return view('Admin.Productos.edit',$context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'descripcion' => 'required|min:3|max:255',
            'precio' => 'required|numeric',
            'inventario' => 'required|numeric',
            'img' => 'mimes:jpeg,png,jpg',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        if($request->hasFile('img')){

            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/productos/',$name);

            $request['imagen'] = $name;
        }

        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
