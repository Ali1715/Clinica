<?php

namespace App\Http\Controllers;

use App\Models\HistorialCirujia;
use Illuminate\Http\Request;

/**
 * Class HistorialCirujiaController
 * @package App\Http\Controllers
 */
class HistorialCirujiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialCirujias = HistorialCirujia::paginate();

        return view('historial-cirujia.index', compact('historialCirujias'))
            ->with('i', (request()->input('page', 1) - 1) * $historialCirujias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialCirujia = new HistorialCirujia();
        return view('historial-cirujia.create', compact('historialCirujia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistorialCirujia::$rules);

        $historialCirujia = HistorialCirujia::create($request->all());

        return redirect()->route('historial-cirujias.index')
            ->with('success', 'HistorialCirujia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialCirujia = HistorialCirujia::find($id);

        return view('historial-cirujia.show', compact('historialCirujia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialCirujia = HistorialCirujia::find($id);

        return view('historial-cirujia.edit', compact('historialCirujia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistorialCirujia $historialCirujia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialCirujia $historialCirujia)
    {
        request()->validate(HistorialCirujia::$rules);

        $historialCirujia->update($request->all());

        return redirect()->route('historial-cirujias.index')
            ->with('success', 'HistorialCirujia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialCirujia = HistorialCirujia::find($id)->delete();

        return redirect()->route('historial-cirujias.index')
            ->with('success', 'HistorialCirujia deleted successfully');
    }
}
