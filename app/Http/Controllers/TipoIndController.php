<?php

namespace App\Http\Controllers;

use App\Models\TipoInd;
use Illuminate\Http\Request;

/**
 * Class TipoIndController
 * @package App\Http\Controllers
 */
class TipoIndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoInds = TipoInd::paginate();

        return view('tipo-ind.index', compact('tipoInds'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoInds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoInd = new TipoInd();
        return view('tipo-ind.create', compact('tipoInd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoInd::$rules);

        $tipoInd = TipoInd::create($request->all());

        return redirect()->route('tipo-inds.index')
            ->with('success', 'TipoInd created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoInd = TipoInd::find($id);

        return view('tipo-ind.show', compact('tipoInd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoInd = TipoInd::find($id);

        return view('tipo-ind.edit', compact('tipoInd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoInd $tipoInd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoInd $tipoInd)
    {
        request()->validate(TipoInd::$rules);

        $tipoInd->update($request->all());

        return redirect()->route('tipo-inds.index')
            ->with('success', 'TipoInd updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoInd = TipoInd::find($id)->delete();

        return redirect()->route('tipo-inds.index')
            ->with('success', 'TipoInd deleted successfully');
    }
}
