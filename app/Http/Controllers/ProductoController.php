<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate(5);
        return view('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosProducto = request()->except('_token');

        if($request->hasFile('foto')){
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Producto::insert($datosProducto);

        
        return response()->json($datosProducto);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            $producto = Producto::findOrFail($id);
            Storage::delete('public/'.$producto->foto);
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Producto::where('id', '=', $id)->update($datosProducto);

        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('producto');
    }
}
