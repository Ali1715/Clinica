<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

/**
 * Class MedicamentoController
 * @package App\Http\Controllers
 */
class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::paginate();

        return view('medicamento.index', compact('medicamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $medicamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = new Medicamento();
        return view('medicamento.create', compact('medicamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicamento::$rules);

        $medicamento = Medicamento::create($request->all());

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicamento $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        request()->validate(Medicamento::$rules);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id)->delete();

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento deleted successfully');
    }
}
