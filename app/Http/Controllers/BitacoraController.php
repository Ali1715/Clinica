<?php

namespace App\Http\Controllers;

use App\Exports\LogsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Bitacora;


class BitacoraController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitacoras = Bitacora::paginate(10);
        return view('bitacoras.index', compact('bitacoras'));
    }

    public function edit($data)
    {
        if ($data == 'csv') {
            return Excel::download(new LogsExport, 'logs.csv');
        } else {
            return Excel::download(new LogsExport, 'logs.xlsx');
        }
    }

}
