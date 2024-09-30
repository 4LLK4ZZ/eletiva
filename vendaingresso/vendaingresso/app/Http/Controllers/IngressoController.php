<?php

namespace App\Http\Controllers;

use App\Models\Ingresso;
use App\Models\Evento;
use Illuminate\Http\Request;

class IngressoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingressos = Ingresso::with('evento')->get(); // Incluindo relação com evento
        return view('ingressos.index', compact('ingressos'));
    }

    public function create()
    {
        $eventos = Evento::all(); // Listar eventos para o Ingressos
        return view('ingressos.create', compact('eventos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'evento_id' => 'required|exists:eventos,id'
        ]);

        Ingresso::create($request->all());
        return redirect()->route('ingressos.index');
    }

    public function edit(Ingresso $ingresso)
{
    $eventos = Evento::all(); // Você pode querer listar todos os eventos para o formulário
    return view('ingressos.edit', compact('ingresso', 'eventos'));
}

    public function update(Request $request, Ingresso $ingressos)
    {
        $request->validate([
            'tipo' => 'required',
            'preco' => 'required|numeric',
            'evento_id' => 'required|exists:eventos,id'
        ]);

        $ingressos->update($request->all());
        return redirect()->route('ingressos.index');
    }

    public function destroy(Ingresso $ingresso)
    {
        $ingresso->delete();
        return redirect()->route('ingressos.index');
    }
}
