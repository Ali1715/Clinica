<?php

namespace App\Http\Controllers;

use App\Models\Indicadoreshcirujia;
use Illuminate\Http\Request;

/**
 * Class IndicadoreshcirujiaController
 * @package App\Http\Controllers
 */
class IndicadoreshcirujiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadoreshcirujias = Indicadoreshcirujia::paginate();

        return view('indicadoreshcirujia.index', compact('indicadoreshcirujias'))
            ->with('i', (request()->input('page', 1) - 1) * $indicadoreshcirujias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadoreshcirujia = new Indicadoreshcirujia();
        return view('indicadoreshcirujia.create', compact('indicadoreshcirujia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Indicadoreshcirujia::$rules);

        $indicadoreshcirujia = Indicadoreshcirujia::create($request->all());

        return redirect()->route('indicadoreshcirujias.index')
            ->with('success', 'Indicadoreshcirujia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicadoreshcirujia = Indicadoreshcirujia::find($id);

        return view('indicadoreshcirujia.show', compact('indicadoreshcirujia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicadoreshcirujia = Indicadoreshcirujia::find($id);

        return view('indicadoreshcirujia.edit', compact('indicadoreshcirujia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Indicadoreshcirujia $indicadoreshcirujia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicadoreshcirujia $indicadoreshcirujia)
    {
        request()->validate(Indicadoreshcirujia::$rules);

        $indicadoreshcirujia->update($request->all());

        return redirect()->route('indicadoreshcirujias.index')
            ->with('success', 'Indicadoreshcirujia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $indicadoreshcirujia = Indicadoreshcirujia::find($id)->delete();

        return redirect()->route('indicadoreshcirujias.index')
            ->with('success', 'Indicadoreshcirujia deleted successfully');
    }
}
