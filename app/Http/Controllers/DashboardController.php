<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cirujia;
use App\Models\Consulta;
use App\Models\Factura;
use App\Models\ServAnalisi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
       // Obtén la fecha de inicio y fin del último mes
       $startDate = Carbon::now()->subMonth()->startOfMonth();
       $endDate = Carbon::now()->subMonth()->endOfMonth();

       // Obtén el total de pacientes registrados en el último mes
       $totalPacientesUltimoMes = Paciente::whereBetween('created_at', [$startDate, $endDate])->count();
        // Obtén el total de pacientes registrados 
        $totalPacientes = Paciente::count();
        // Obtén el número de pacientes que han tenido cirugías
        $totalCirugias = Cirujia::distinct('PacienteID')->count('PacienteID');
        // Obtén el número total de análisis solicitados
        $totalAnalisis = ServAnalisi::count();
        // Obtén el total facturado en el último mes
        $totalFacturado = Factura::whereBetween('Fecha_hora', [now()->subMonth(), now()])
            ->sum('Total');


       // Obtén los 3 tipos de análisis más solicitados con sus nombres
       $analisisMasSolicitados = ServAnalisi::select('analisis.Nombre as nombre_analisis', DB::raw('count(*) as total'))
       ->join('analisis', 'serv_analisis.AnalisisID', '=', 'analisis.id')
       ->groupBy('analisis.Nombre') // Añade esta línea
       ->orderByDesc('total')
       ->take(3)
       ->get();

       // Obtén la cantidad de veces que cada médico ha sido solicitado para consultas
       $medicosSolicitados = Consulta::join('users', 'consultas.DoctorID', '=', 'users.id')
       ->select('users.name as nombre_doctor', DB::raw('count(*) as total'))
       ->groupBy('nombre_doctor')
       ->orderByDesc('total')
       ->take(10)
       ->get();

       // Obtén los diagnósticos más comunes en un período específico
       $diagnosticosComunes = Consulta::select('Diagnostico', DB::raw('count(*) as total'))
       ->groupBy('Diagnostico')
       ->orderByDesc('total')
       ->take(5) // Obtén los 5 diagnósticos más comunes (puedes ajustar según sea necesario)
       ->get();


       return view('reportes.dashboard', compact('totalPacientes','totalCirugias','totalAnalisis','totalFacturado','analisisMasSolicitados','medicosSolicitados',
                     'diagnosticosComunes'));
    }
}
