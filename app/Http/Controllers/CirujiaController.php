<?php

namespace App\Http\Controllers;

use App\Models\Cirujia;
use Illuminate\Http\Request;

/**
 * Class CirujiaController
 * @package App\Http\Controllers
 */
class CirujiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cirujias = Cirujia::paginate();

        return view('cirujia.index', compact('cirujias'))
            ->with('i', (request()->input('page', 1) - 1) * $cirujias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cirujia = new Cirujia();
        return view('cirujia.create', compact('cirujia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cirujia::$rules);

        $cirujia = Cirujia::create($request->all());

        return redirect()->route('cirujias.index')
            ->with('success', 'Cirujia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cirujia = Cirujia::find($id);

        return view('cirujia.show', compact('cirujia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cirujia = Cirujia::find($id);

        return view('cirujia.edit', compact('cirujia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cirujia $cirujia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cirujia $cirujia)
    {
        request()->validate(Cirujia::$rules);

        $cirujia->update($request->all());

        return redirect()->route('cirujias.index')
            ->with('success', 'Cirujia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cirujia = Cirujia::find($id)->delete();

        return redirect()->route('cirujias.index')
            ->with('success', 'Cirujia deleted successfully');
    }
}
