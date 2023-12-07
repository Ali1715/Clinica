<?php

namespace App\Http\Controllers;

use App\Models\Indicadorhclinico;
use Illuminate\Http\Request;

/**
 * Class IndicadorhclinicoController
 * @package App\Http\Controllers
 */
class IndicadorhclinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadorhclinicos = Indicadorhclinico::paginate();

        return view('indicadorhclinico.index', compact('indicadorhclinicos'))
            ->with('i', (request()->input('page', 1) - 1) * $indicadorhclinicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadorhclinico = new Indicadorhclinico();
        return view('indicadorhclinico.create', compact('indicadorhclinico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Indicadorhclinico::$rules);

        $indicadorhclinico = Indicadorhclinico::create($request->all());

        return redirect()->route('indicadorhclinicos.index')
            ->with('success', 'Indicadorhclinico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicadorhclinico = Indicadorhclinico::find($id);

        return view('indicadorhclinico.show', compact('indicadorhclinico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicadorhclinico = Indicadorhclinico::find($id);

        return view('indicadorhclinico.edit', compact('indicadorhclinico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Indicadorhclinico $indicadorhclinico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicadorhclinico $indicadorhclinico)
    {
        request()->validate(Indicadorhclinico::$rules);

        $indicadorhclinico->update($request->all());

        return redirect()->route('indicadorhclinicos.index')
            ->with('success', 'Indicadorhclinico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $indicadorhclinico = Indicadorhclinico::find($id)->delete();

        return redirect()->route('indicadorhclinicos.index')
            ->with('success', 'Indicadorhclinico deleted successfully');
    }
}
