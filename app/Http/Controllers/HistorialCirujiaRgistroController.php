<?php

namespace App\Http\Controllers;

use App\Models\HistorialCirujiaRgistro;
use Illuminate\Http\Request;

/**
 * Class HistorialCirujiaRgistroController
 * @package App\Http\Controllers
 */
class HistorialCirujiaRgistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialCirujiaRgistros = HistorialCirujiaRgistro::paginate();

        return view('historial-cirujia-rgistro.index', compact('historialCirujiaRgistros'))
            ->with('i', (request()->input('page', 1) - 1) * $historialCirujiaRgistros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialCirujiaRgistro = new HistorialCirujiaRgistro();
        return view('historial-cirujia-rgistro.create', compact('historialCirujiaRgistro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistorialCirujiaRgistro::$rules);

        $historialCirujiaRgistro = HistorialCirujiaRgistro::create($request->all());

        return redirect()->route('historial-cirujia-rgistros.index')
            ->with('success', 'HistorialCirujiaRgistro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialCirujiaRgistro = HistorialCirujiaRgistro::find($id);

        return view('historial-cirujia-rgistro.show', compact('historialCirujiaRgistro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialCirujiaRgistro = HistorialCirujiaRgistro::find($id);

        return view('historial-cirujia-rgistro.edit', compact('historialCirujiaRgistro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistorialCirujiaRgistro $historialCirujiaRgistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialCirujiaRgistro $historialCirujiaRgistro)
    {
        request()->validate(HistorialCirujiaRgistro::$rules);

        $historialCirujiaRgistro->update($request->all());

        return redirect()->route('historial-cirujia-rgistros.index')
            ->with('success', 'HistorialCirujiaRgistro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialCirujiaRgistro = HistorialCirujiaRgistro::find($id)->delete();

        return redirect()->route('historial-cirujia-rgistros.index')
            ->with('success', 'HistorialCirujiaRgistro deleted successfully');
    }
}
