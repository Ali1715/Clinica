<?php

namespace App\Http\Controllers;

use App\Models\Cirujium;
use Illuminate\Http\Request;

/**
 * Class CirujiumController
 * @package App\Http\Controllers
 */
class CirujiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cirujia = Cirujium::paginate();

        return view('cirujium.index', compact('cirujia'))
            ->with('i', (request()->input('page', 1) - 1) * $cirujia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cirujium = new Cirujium();
        return view('cirujium.create', compact('cirujium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cirujium::$rules);

        $cirujium = Cirujium::create($request->all());

        return redirect()->route('cirujia.index')
            ->with('success', 'Cirujium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cirujium = Cirujium::find($id);

        return view('cirujium.show', compact('cirujium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cirujium = Cirujium::find($id);

        return view('cirujium.edit', compact('cirujium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cirujium $cirujium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cirujium $cirujium)
    {
        request()->validate(Cirujium::$rules);

        $cirujium->update($request->all());

        return redirect()->route('cirujia.index')
            ->with('success', 'Cirujium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cirujium = Cirujium::find($id)->delete();

        return redirect()->route('cirujia.index')
            ->with('success', 'Cirujium deleted successfully');
    }
}
