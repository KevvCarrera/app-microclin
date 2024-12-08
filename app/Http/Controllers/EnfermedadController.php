<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enfermedad;
use Illuminate\Support\Facades\DB;

class EnfermedadController extends Controller
{
    public function index(Request $request)
{
    // Obtenemos los valores enviados en los filtros
    $filtroNombre = $request->input('nombre');
    $filtroEspecie = $request->input('especie');
    $filtroRegion = $request->input('region');

    // Construimos la consulta con filtros dinámicos
    $query = Enfermedad::query();

    if ($filtroNombre) {
        $query->where('Nombre', $filtroNombre);
    }

    if ($filtroEspecie) {
        $query->where('Especie', $filtroEspecie);
    }

    if ($filtroRegion) {
        $query->where('Region', $filtroRegion);
    }



    // Obtenemos valores únicos para los filtros
    $uniqueNombres = Enfermedad::select('Nombre')->distinct()->pluck('Nombre');
    $uniqueEspecies = Enfermedad::select('Especie')->distinct()->pluck('Especie');
    $uniqueRegiones = Enfermedad::select('Region')->distinct()->pluck('Region');

    // Obtener la cantidad de casos por especie (solo las 5 primeras)
    $casosPorEspecie = Enfermedad::select('Especie', DB::raw('SUM(Casos) as total_casos'))
        ->groupBy('Especie')
        ->orderByDesc('total_casos') // Ordenar por la cantidad de casos, de mayor a menor
        ->take(5) // Limitar a las 5 especies con más casos
        ->get();

    // Pasar los datos a la vista

    // Pasamos los datos necesarios a la vista
    return view('index', [
        'enfermedades' => $query->get(), // Todos los registros filtrados (para gráficos)
        'uniqueNombres' => $uniqueNombres, // Opciones para filtro de nombres
        'uniqueEspecies' => $uniqueEspecies, // Opciones para filtro de especies
        'uniqueRegiones' => $uniqueRegiones, // Opciones para filtro de regiones
        'casosPorEspecie' => $casosPorEspecie, // Datos para gráfico de casos por especie
    ]);
}

}
