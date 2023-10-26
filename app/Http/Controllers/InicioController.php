<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    private $categorias;

    public function __construct()
    {
        $this->categorias = Categoria::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categorias = $this->categorias;

        $productos = Producto::all();

        $context = compact('categorias','productos');

        return view('inicio',$context);

    }

    public function productosPorCategoria($id)
    {

        $categorias = $this->categorias;

        $categoriaPrincipal = Categoria::find($id);

        $productos = Producto::where('categoria_id', $categoriaPrincipal->id)->get();

        $context = compact('productos','categorias','categoriaPrincipal');

        return view('publico.productos',$context);

    }

    public function producto(Producto $producto){

        $categorias = $this->categorias;

        $context = compact('producto','categorias');

        return view('publico.producto',$context);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
