<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Administrativo;

class AdministrativoController extends Controller
{
    public function index()
    {
        $administrativos = Administrativo::with('user')->get();
        return view('administrativos.index', compact('administrativos'));
        
    }

    public function create()
    {
        return view('administrativos.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo administrativo
        // Validar los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'cargo' => 'required|string|max:255',
        // Agrega más campos si es necesario
    ]);

    // Crear un nuevo usuario
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'tipo' => 'Administrativo', // Establecer el tipo como Administrativo
    ]);

    // Crear un nuevo registro para el administrativo
    Administrativo::create([
        'usuario_id' => $user->id,
        'cargo' => $request->input('cargo'),
        // Agrega más campos si es necesario
    ]);

    // Redirigir a una página de éxito o a la lista de administrativos
    return redirect()->route('administrativos.index')->with('success', 'Administrativo registrado correctamente');
}

    public function show($id)
    {
        // Lógica para mostrar un administrativo específico
    }

    public function edit($id)
    {
        // Lógica para editar un administrativo
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un administrativo
    }

    public function destroy($id)
    {
        // Lógica para eliminar un administrativo
    }
}
