<?php

namespace App\Http\Controllers;

use App\Models\SolicitaServicio;
use Illuminate\Http\Request;

/**
 * Class SolicitaServicioController
 * @package App\Http\Controllers
 */
class SolicitaServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitaServicios = SolicitaServicio::paginate();

        return view('solicita-servicio.index', compact('solicitaServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitaServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitaServicio = new SolicitaServicio();
        return view('solicita-servicio.create', compact('solicitaServicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SolicitaServicio::$rules);

        $solicitaServicio = SolicitaServicio::create($request->all());

        return redirect()->route('solicita-servicios.index')
            ->with('success', 'SolicitaServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitaServicio = SolicitaServicio::find($id);

        return view('solicita-servicio.show', compact('solicitaServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitaServicio = SolicitaServicio::find($id);

        return view('solicita-servicio.edit', compact('solicitaServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SolicitaServicio $solicitaServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitaServicio $solicitaServicio)
    {
        request()->validate(SolicitaServicio::$rules);

        $solicitaServicio->update($request->all());

        return redirect()->route('solicita-servicios.index')
            ->with('success', 'SolicitaServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitaServicio = SolicitaServicio::find($id)->delete();

        return redirect()->route('solicita-servicios.index')
            ->with('success', 'SolicitaServicio deleted successfully');
    }
}
