<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $paciente  = new Paciente();
            $paciente ->nombre = $request->nombre;
            $paciente ->apellido = $request->apellido;
            $paciente ->DNI = $request->DNI;
            $paciente ->telefono = $request->telefono;
            $paciente ->direccion = $request->direccion;
            $paciente ->edad = $request->edad;
            $paciente ->genero = $request->genero;
            $paciente->save();
        DB::commit();
        } catch (\Throwable $th) {
          DB::rollBack();
          return Redirect::route('pacientes.create')
          ->with('error', 'no se pudo guardar');
        }
        return Redirect::route('pacientes.index')
        ->with('info', 'se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $paciente = Paciente::findOrfail($id);
        return view('pacientes.create', compact('paciente'));
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
        //
        try {
            DB::beginTransaction();
        
            $paciente = new Paciente();
            $paciente->nombre = $request->nombre;
            $paciente->apellido = $request->apellido;
            $paciente->dni = $request->dni;
            $paciente->telefono = $request->telefono;
            $paciente->direccion = $request->direccion;
            $paciente->edad = $request->edad;
            $paciente->genero = $request->genero;
        
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('pacientes.index')->with('error', 'No se pudo guardar.');
        }
        return redirect()->route('pacientes.index')->with('info', 'Se guardó correctamente.');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
