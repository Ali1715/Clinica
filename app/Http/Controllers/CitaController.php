<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Consulta;
use Illuminate\Http\Request;

/**
 * Class CitaController
 * @package App\Http\Controllers
 */
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::paginate();

        return view('cita.index', compact('citas'))
            ->with('i', (request()->input('page', 1) - 1) * $citas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cita = new Cita();
        return view('cita.create', compact('cita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cita::$rules);

        $cita = Cita::create($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);

        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);

        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        request()->validate(Cita::$rules);

        $cita->update($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cita = Cita::find($id)->delete();

        return redirect()->route('citas.index')
            ->with('success', 'Cita deleted successfully');
    }
    public function calendario()
{
    $consulta = Consulta::select(

        'pacientes.nombre as nombre_paciente',
        'users.name as nombre_doctor',
        'citas.Fechahora as Fecha'

    )
    ->join('citas', 'consultas.CitaID', '=', 'citas.id')
    ->join('pacientes', 'consultas.PacienteID', '=', 'pacientes.id')
    ->join('doctors', 'consultas.DoctorID', '=', 'doctors.id')
    ->join('users', 'consultas.DoctorID', '=', 'users.id')
    ->get();

    return view('cita.calendario',compact('consulta'));

}
}
