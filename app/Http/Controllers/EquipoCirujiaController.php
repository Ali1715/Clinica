<?php

namespace App\Http\Controllers;

use App\Models\EquipoCirujia;
use Illuminate\Http\Request;

/**
 * Class EquipoCirujiaController
 * @package App\Http\Controllers
 */
class EquipoCirujiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipoCirujias = EquipoCirujia::paginate();

        return view('equipo-cirujia.index', compact('equipoCirujias'))
            ->with('i', (request()->input('page', 1) - 1) * $equipoCirujias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipoCirujia = new EquipoCirujia();
        return view('equipo-cirujia.create', compact('equipoCirujia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EquipoCirujia::$rules);

        $equipoCirujia = EquipoCirujia::create($request->all());

        return redirect()->route('equipo-cirujias.index')
            ->with('success', 'EquipoCirujia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipoCirujia = EquipoCirujia::find($id);

        return view('equipo-cirujia.show', compact('equipoCirujia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipoCirujia = EquipoCirujia::find($id);

        return view('equipo-cirujia.edit', compact('equipoCirujia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EquipoCirujia $equipoCirujia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EquipoCirujia $equipoCirujia)
    {
        request()->validate(EquipoCirujia::$rules);

        $equipoCirujia->update($request->all());

        return redirect()->route('equipo-cirujias.index')
            ->with('success', 'EquipoCirujia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipoCirujia = EquipoCirujia::find($id)->delete();

        return redirect()->route('equipo-cirujias.index')
            ->with('success', 'EquipoCirujia deleted successfully');
    }
}
