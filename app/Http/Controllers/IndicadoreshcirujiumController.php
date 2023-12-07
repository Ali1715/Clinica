<?php

namespace App\Http\Controllers;

use App\Models\Indicadoreshcirujium;
use Illuminate\Http\Request;

/**
 * Class IndicadoreshcirujiumController
 * @package App\Http\Controllers
 */
class IndicadoreshcirujiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadoreshcirujia = Indicadoreshcirujium::paginate();

        return view('indicadoreshcirujium.index', compact('indicadoreshcirujia'))
            ->with('i', (request()->input('page', 1) - 1) * $indicadoreshcirujia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadoreshcirujium = new Indicadoreshcirujium();
        return view('indicadoreshcirujium.create', compact('indicadoreshcirujium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Indicadoreshcirujium::$rules);

        $indicadoreshcirujium = Indicadoreshcirujium::create($request->all());

        return redirect()->route('indicadoreshcirujia.index')
            ->with('success', 'Indicadoreshcirujium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicadoreshcirujium = Indicadoreshcirujium::find($id);

        return view('indicadoreshcirujium.show', compact('indicadoreshcirujium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicadoreshcirujium = Indicadoreshcirujium::find($id);

        return view('indicadoreshcirujium.edit', compact('indicadoreshcirujium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Indicadoreshcirujium $indicadoreshcirujium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicadoreshcirujium $indicadoreshcirujium)
    {
        request()->validate(Indicadoreshcirujium::$rules);

        $indicadoreshcirujium->update($request->all());

        return redirect()->route('indicadoreshcirujia.index')
            ->with('success', 'Indicadoreshcirujium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $indicadoreshcirujium = Indicadoreshcirujium::find($id)->delete();

        return redirect()->route('indicadoreshcirujia.index')
            ->with('success', 'Indicadoreshcirujium deleted successfully');
    }
}
