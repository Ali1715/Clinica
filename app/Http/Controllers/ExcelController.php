<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\HistorialClinicoImport;

class ExcelController extends Controller
{


public function cargarExcel()
{

    return view('historial/cargar_excel');
}

}
