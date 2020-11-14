<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;

class ContratosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contratos = Contrato::all();
        $contratos = Contrato::orderBy('created_at','desc')->paginate(10);
        return view('contratos.index')->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_contrato' => 'required',
            'nombre_cliente' => 'required',
        ]);

        //Crear nuevo contrato
        $contrato = new Contrato;
        $contrato->nombre_contrato = $request->input('nombre_contrato');
        $contrato->id_cliente = auth()->user()->id;
        $contrato->nombre_cliente = $request->input('nombre_cliente');
        $contrato->save();

        return redirect('/contratos')->with('success', 'Contrato creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrato = Contrato::find($id);
        return view('contratos.show')->with('contrato', $contrato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato = Contrato::find($id);
        return view('contratos.edit')->with('contrato', $contrato);
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
        $this->validate($request, [
            'nombre_contrato' => 'required',
            'nombre_cliente' => 'required',
        ]);

        //Crear nuevo contrato
        $contrato = Contrato::find($id);
        $contrato->nombre_contrato = $request->input('nombre_contrato');
        $contrato->nombre_cliente = $request->input('nombre_cliente');
        $contrato->save();

        return redirect('/contratos')->with('success', 'Contrato editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();
        return redirect('/contratos')->with('success', 'Contrato eliminado');
    }
}
