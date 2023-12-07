<?php

namespace App\Http\Controllers;

use App\Models\Transplante;
use Illuminate\Http\Request;

/**
 * Class TransplanteController
 * @package App\Http\Controllers
 */
class TransplanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transplantes = Transplante::paginate();

        return view('transplante.index', compact('transplantes'))
            ->with('i', (request()->input('page', 1) - 1) * $transplantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transplante = new Transplante();
        return view('transplante.create', compact('transplante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transplante::$rules);

        $transplante = Transplante::create($request->all());

        return redirect()->route('transplantes.index')
            ->with('success', 'Transplante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transplante = Transplante::find($id);

        return view('transplante.show', compact('transplante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transplante = Transplante::find($id);

        return view('transplante.edit', compact('transplante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transplante $transplante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transplante $transplante)
    {
        request()->validate(Transplante::$rules);

        $transplante->update($request->all());

        return redirect()->route('transplantes.index')
            ->with('success', 'Transplante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transplante = Transplante::find($id)->delete();

        return redirect()->route('transplantes.index')
            ->with('success', 'Transplante deleted successfully');
    }
}
