<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autk;
use App\Models\Compra;
use Illuminate\Http\Request;

class AutkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::all();

        return view('dashboard',compact('compras'));
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
        $autk = Autk::find($id);

        $context = compact('autk');

        return view('Admin.autk.edit',$context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $autk = Autk::find($id);

        $this->validate($request,[
            'celular' => 'nullable|numeric',
            'telefono' => 'nullable|numeric',
            'email' => 'nullable|email',
            'direccion' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'instagram' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'whatsapp' => 'nullable|max:12',
        ]);

        $autk->update($request->all());

        return redirect()->route('autk.edit',$autk->id)->with('success','Datos actualizados correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
