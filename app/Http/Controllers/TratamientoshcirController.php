<?php

namespace App\Http\Controllers;

use App\Models\Tratamientoshcir;
use Illuminate\Http\Request;

/**
 * Class TratamientoshcirController
 * @package App\Http\Controllers
 */
class TratamientoshcirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientoshcirs = Tratamientoshcir::paginate();

        return view('tratamientoshcir.index', compact('tratamientoshcirs'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientoshcirs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamientoshcir = new Tratamientoshcir();
        return view('tratamientoshcir.create', compact('tratamientoshcir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tratamientoshcir::$rules);

        $tratamientoshcir = Tratamientoshcir::create($request->all());

        return redirect()->route('tratamientoshcirs.index')
            ->with('success', 'Tratamientoshcir created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamientoshcir = Tratamientoshcir::find($id);

        return view('tratamientoshcir.show', compact('tratamientoshcir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamientoshcir = Tratamientoshcir::find($id);

        return view('tratamientoshcir.edit', compact('tratamientoshcir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tratamientoshcir $tratamientoshcir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamientoshcir $tratamientoshcir)
    {
        request()->validate(Tratamientoshcir::$rules);

        $tratamientoshcir->update($request->all());

        return redirect()->route('tratamientoshcirs.index')
            ->with('success', 'Tratamientoshcir updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tratamientoshcir = Tratamientoshcir::find($id)->delete();

        return redirect()->route('tratamientoshcirs.index')
            ->with('success', 'Tratamientoshcir deleted successfully');
    }
}
