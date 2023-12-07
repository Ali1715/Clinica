<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use Illuminate\Http\Request;

/**
 * Class HistorialClinicoController
 * @package App\Http\Controllers
 */
class HistorialClinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialClinicos = HistorialClinico::paginate();

        return view('historial-clinico.index', compact('historialClinicos'))
            ->with('i', (request()->input('page', 1) - 1) * $historialClinicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialClinico = new HistorialClinico();
        return view('historial-clinico.create', compact('historialClinico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistorialClinico::$rules);

        $historialClinico = HistorialClinico::create($request->all());

        return redirect()->route('historial-clinicos.index')
            ->with('success', 'HistorialClinico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialClinico = HistorialClinico::find($id);

        return view('historial-clinico.show', compact('historialClinico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialClinico = HistorialClinico::find($id);

        return view('historial-clinico.edit', compact('historialClinico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistorialClinico $historialClinico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialClinico $historialClinico)
    {
        request()->validate(HistorialClinico::$rules);

        $historialClinico->update($request->all());

        return redirect()->route('historial-clinicos.index')
            ->with('success', 'HistorialClinico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialClinico = HistorialClinico::find($id)->delete();

        return redirect()->route('historial-clinicos.index')
            ->with('success', 'HistorialClinico deleted successfully');
    }
}
