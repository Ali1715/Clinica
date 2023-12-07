<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF; // Import the PDF class
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportExport;
use App\Models\Factura;
use App\Models\Paciente;
use App\Models\Servicio;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function generateCSV()
    {
        $fechaInicio = Carbon::now()->subMonth()->startOfMonth();
        $fechaFinal = Carbon::now()->subMonth()->endOfMonth();
    
        $totalFacturado = Factura::whereBetween('Fecha_hora', [$fechaInicio, $fechaFinal])->sum('Total');
    
        $data = [
            'totalFacturado' => $totalFacturado,
            'otrosDatos' => [
                'totalPacientes' => $this->totalPacientesRegistradosUltimoMes(),
                'totalServicios' => $this->totalServiciosDadosUltimoMes(),
                // ... otros datos
            ],
            'facturas' => Factura::whereBetween('Fecha_hora', [$fechaInicio, $fechaFinal])->get(),
        ];
    
        // Use the FacturaExport class to handle the export logic
        return Excel::download(new ReportExport($data), 'reporteFactura.csv');
    }

    public function totalPacientesRegistradosUltimoMes()
{
    $fechaInicio = Carbon::now()->subMonth()->startOfMonth();
    $fechaFinal = Carbon::now()->subMonth()->endOfMonth();

    $totalPacientes = Paciente::count();

    return $totalPacientes;
}
public function totalMontoFacturadoUltimoMes()
{
    $fechaInicio = Carbon::now()->subMonth()->startOfMonth();
    $fechaFinal = Carbon::now()->subMonth()->endOfMonth();

    $totalMontoFacturado = Factura::whereBetween('Fecha_hora', [$fechaInicio, $fechaFinal])->sum('Total');

    return $totalMontoFacturado;
}
public function totalServiciosDadosUltimoMes()
{
    $fechaInicio = Carbon::now()->subMonth()->startOfMonth();
    $fechaFinal = Carbon::now()->subMonth()->endOfMonth();

    $totalServiciosDados = Servicio::whereBetween('Fecha_hora', [$fechaInicio, $fechaFinal])->count();

    return $totalServiciosDados;
}
}

  
