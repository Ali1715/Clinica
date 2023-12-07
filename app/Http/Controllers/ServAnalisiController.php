<?php

namespace App\Http\Controllers;

use App\Models\ServAnalisi;
use Illuminate\Http\Request;

/**
 * Class ServAnalisiController
 * @package App\Http\Controllers
 */
class ServAnalisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servAnalisis = ServAnalisi::paginate();

        return view('serv-analisi.index', compact('servAnalisis'))
            ->with('i', (request()->input('page', 1) - 1) * $servAnalisis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servAnalisi = new ServAnalisi();
        return view('serv-analisi.create', compact('servAnalisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ServAnalisi::$rules);

        $servAnalisi = ServAnalisi::create($request->all());

        return redirect()->route('serv-analisis.index')
            ->with('success', 'ServAnalisi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servAnalisi = ServAnalisi::find($id);

        return view('serv-analisi.show', compact('servAnalisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servAnalisi = ServAnalisi::find($id);

        return view('serv-analisi.edit', compact('servAnalisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ServAnalisi $servAnalisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServAnalisi $servAnalisi)
    {
        request()->validate(ServAnalisi::$rules);

        $servAnalisi->update($request->all());

        return redirect()->route('serv-analisis.index')
            ->with('success', 'ServAnalisi updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $servAnalisi = ServAnalisi::find($id)->delete();

        return redirect()->route('serv-analisis.index')
            ->with('success', 'ServAnalisi deleted successfully');
    }
}
