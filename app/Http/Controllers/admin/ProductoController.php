<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\producto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.producto.index');
    }
    public function index2($id)
{
    $pantalones = Producto::where('tipoderopa', $id)->get();

    return view('admin.producto.index', ['pantalones' => $pantalones]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create([
            'color' => $request->color,
            'tipoderopa' => $request->tipo,
        ]);
         // Establecer un mensaje de sesión para mostrar una alerta después de guardar
         session()->flash('message', '¡Producto creado exitosamente!');

         // Redireccionar a una ruta después de guardar
         return redirect()->route('admin.producto.create');

    }

    /**
     * Display the specified resource.
     */

     public function generarPDF($id)
     {
         $pantalones = producto::where('id', $id)->get();
         $pdf = Pdf::loadView('reporte', compact('pantalones'));

         return $pdf->download('invoice.pdf');
     }
    public function show( $id)
    {
        $pantalones = producto::where('id', $id)->get();


        return view('admin.producto.show', compact('pantalones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pantalones = producto::where('id', $id)->get();
        return view('admin.producto.edit', compact('pantalones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pantalones = producto::find($id);
        $pantalones->talla1=$request->talla4;
        $pantalones->talla2=$request->talla6;
        $pantalones->talla3=$request->talla8;
        $pantalones->talla4=$request->talla10;
        $pantalones->talla5=$request->talla12;
        $pantalones->talla7=$request->talla14;
        $pantalones->talla8=$request->talla16;
        $pantalones->talla9=$request->talla36;
        $pantalones->talla10=$request->talla38;
        $pantalones->talla11=$request->talla40;
        $pantalones->talla12=$request->talla42;
        $pantalones->talla13=$request->talla44;
        $pantalones->talla14=$request->talla46;
        $pantalones->talla15=$request->talla48;
        $pantalones->talla16=$request->talla50;
        $pantalones->talla17=$request->talla52;
        $pantalones->talla18=$request->talla54;
        $pantalones->talla19=$request->talla56;
        $pantalones->talla20=$request->talla58;
        $pantalones->talla21=$request->talla60;
        $pantalones->save();
        // En el controlador después de actualizar los datos
        return redirect()->route('admin.producto.show', $pantalones->id)->with('success', '¡Datos actualizados con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $tipoRopa = $producto->tipoderopa; // Obtén el tipo de ropa del producto antes de eliminarlo

        $producto->delete();

        // Agregar un mensaje a la sesión flash
        session()->flash('success', 'Producto eliminado correctamente.');

        // Redireccionar a una ruta específica después de eliminar, pasando el parámetro tipoderopa
        return redirect()->route('admin.producto.index2', $tipoRopa);
    }



}
