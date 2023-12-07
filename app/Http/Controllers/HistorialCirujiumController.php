<?php

namespace App\Http\Controllers;

use App\Models\HistorialCirujium;
use Illuminate\Http\Request;

/**
 * Class HistorialCirujiumController
 * @package App\Http\Controllers
 */
class HistorialCirujiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialCirujia = HistorialCirujium::paginate();

        return view('historial-cirujium.index', compact('historialCirujia'))
            ->with('i', (request()->input('page', 1) - 1) * $historialCirujia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialCirujium = new HistorialCirujium();
        return view('historial-cirujium.create', compact('historialCirujium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistorialCirujium::$rules);

        $historialCirujium = HistorialCirujium::create($request->all());

        return redirect()->route('historial-cirujia.index')
            ->with('success', 'HistorialCirujium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialCirujium = HistorialCirujium::find($id);

        return view('historial-cirujium.show', compact('historialCirujium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialCirujium = HistorialCirujium::find($id);

        return view('historial-cirujium.edit', compact('historialCirujium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistorialCirujium $historialCirujium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialCirujium $historialCirujium)
    {
        request()->validate(HistorialCirujium::$rules);

        $historialCirujium->update($request->all());

        return redirect()->route('historial-cirujia.index')
            ->with('success', 'HistorialCirujium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialCirujium = HistorialCirujium::find($id)->delete();

        return redirect()->route('historial-cirujia.index')
            ->with('success', 'HistorialCirujium deleted successfully');
    }
}
