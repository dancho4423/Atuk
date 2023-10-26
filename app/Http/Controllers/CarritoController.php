<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;
use Cart;

class CarritoController extends Controller
{
    public function add(Request $request)
    {

        $producto = Producto::find($request->id);

        Cart::add(array(
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => $request->cantidad,
            'attributes' => array(
                'imagen' => $producto->imagen,
                'descripcion' => $producto->descripcion,
            ),
            'associatedModel' => $producto
        ));

        return redirect()->back()->with('success','Se ha agregado '.$producto->nombre.' al carrito!');

    }

    public function cart()
    {
        //$cart = Cart::getContent();
        return view('carrito.carrito');
    }

    public function clear()
    {
        Cart::clear();
        return redirect()->back();
    }

    public function removeitem(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->back()->with('success','Se ha eliminado el producto del carrito!!!');
    }

    public function compra()
    {
        $cart = Cart::getContent();
        return view('carrito.compra', compact('cart'));
    }

    public function compraRealizada(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'tarjeta' => 'required',
            'fecha_vencimiento' => 'required',
            'codigo_seguridad' => 'required',
        ]);

        $request['total'] = Cart::getTotal();

        Compra::create($request->all());

        Cart::clear();

        return redirect()->route('inicio')->with('success','Se ha realizado la compra con exito!!!');

    }
}
