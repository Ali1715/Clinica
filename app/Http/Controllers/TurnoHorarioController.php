<?php

namespace App\Http\Controllers;

use App\Models\TurnoHorario;
use Illuminate\Http\Request;

/**
 * Class TurnoHorarioController
 * @package App\Http\Controllers
 */
class TurnoHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnoHorarios = TurnoHorario::paginate();

        return view('turno-horario.index', compact('turnoHorarios'))
            ->with('i', (request()->input('page', 1) - 1) * $turnoHorarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turnoHorario = new TurnoHorario();
        return view('turno-horario.create', compact('turnoHorario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TurnoHorario::$rules);

        $turnoHorario = TurnoHorario::create($request->all());

        return redirect()->route('turno-horarios.index')
            ->with('success', 'TurnoHorario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnoHorario = TurnoHorario::find($id);

        return view('turno-horario.show', compact('turnoHorario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turnoHorario = TurnoHorario::find($id);

        return view('turno-horario.edit', compact('turnoHorario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TurnoHorario $turnoHorario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurnoHorario $turnoHorario)
    {
        request()->validate(TurnoHorario::$rules);

        $turnoHorario->update($request->all());

        return redirect()->route('turno-horarios.index')
            ->with('success', 'TurnoHorario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $turnoHorario = TurnoHorario::find($id)->delete();

        return redirect()->route('turno-horarios.index')
            ->with('success', 'TurnoHorario deleted successfully');
    }
}
