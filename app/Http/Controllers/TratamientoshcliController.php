<?php

namespace App\Http\Controllers;

use App\Models\Tratamientoshcli;
use Illuminate\Http\Request;

/**
 * Class TratamientoshcliController
 * @package App\Http\Controllers
 */
class TratamientoshcliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientoshclis = Tratamientoshcli::paginate();

        return view('tratamientoshcli.index', compact('tratamientoshclis'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientoshclis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamientoshcli = new Tratamientoshcli();
        return view('tratamientoshcli.create', compact('tratamientoshcli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tratamientoshcli::$rules);

        $tratamientoshcli = Tratamientoshcli::create($request->all());

        return redirect()->route('tratamientoshclis.index')
            ->with('success', 'Tratamientoshcli created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamientoshcli = Tratamientoshcli::find($id);

        return view('tratamientoshcli.show', compact('tratamientoshcli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamientoshcli = Tratamientoshcli::find($id);

        return view('tratamientoshcli.edit', compact('tratamientoshcli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tratamientoshcli $tratamientoshcli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamientoshcli $tratamientoshcli)
    {
        request()->validate(Tratamientoshcli::$rules);

        $tratamientoshcli->update($request->all());

        return redirect()->route('tratamientoshclis.index')
            ->with('success', 'Tratamientoshcli updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tratamientoshcli = Tratamientoshcli::find($id)->delete();

        return redirect()->route('tratamientoshclis.index')
            ->with('success', 'Tratamientoshcli deleted successfully');
    }
}
