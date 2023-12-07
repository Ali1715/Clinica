<?php

namespace App\Http\Controllers;

use App\Models\EquipoCirujium;
use Illuminate\Http\Request;

/**
 * Class EquipoCirujiumController
 * @package App\Http\Controllers
 */
class EquipoCirujiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipoCirujia = EquipoCirujium::paginate();

        return view('equipo-cirujium.index', compact('equipoCirujia'))
            ->with('i', (request()->input('page', 1) - 1) * $equipoCirujia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipoCirujium = new EquipoCirujium();
        return view('equipo-cirujium.create', compact('equipoCirujium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EquipoCirujium::$rules);

        $equipoCirujium = EquipoCirujium::create($request->all());

        return redirect()->route('equipo-cirujia.index')
            ->with('success', 'EquipoCirujium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipoCirujium = EquipoCirujium::find($id);

        return view('equipo-cirujium.show', compact('equipoCirujium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipoCirujium = EquipoCirujium::find($id);

        return view('equipo-cirujium.edit', compact('equipoCirujium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EquipoCirujium $equipoCirujium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EquipoCirujium $equipoCirujium)
    {
        request()->validate(EquipoCirujium::$rules);

        $equipoCirujium->update($request->all());

        return redirect()->route('equipo-cirujia.index')
            ->with('success', 'EquipoCirujium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipoCirujium = EquipoCirujium::find($id)->delete();

        return redirect()->route('equipo-cirujia.index')
            ->with('success', 'EquipoCirujium deleted successfully');
    }
}
