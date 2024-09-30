<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Evento;
use App\Models\Ingresso;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $vendas = Venda::with('cliente', 'ingresso')->get();
        return view('vendas.index', compact('vendas'));
    }
    
    public function create() {
        $clientes = Cliente::all();
        $ingressos = Ingresso::all();
        return view('vendas.create', compact('clientes', 'ingressos'));
    }
    
    public function store(Request $request) {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'evento_id' => 'required|exists:eventos,id',
            'ingresso_id' => 'required|exists:ingressos,id',
            'data_venda' => 'required|date'
        ]);
    
        Venda::create($request->all());
        return redirect()->route('vendas.index');
    }
    
    public function edit(Venda $venda) {
        $clientes = Cliente::all();
        $ingressos = Ingresso::all();
        $eventos = Evento::all();
        return view('vendas.edit', compact('venda', 'clientes', 'eventos', 'ingressos'));
    }
    
    public function update(Request $request, Venda $venda) {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'evento_id' => 'required|exists:eventos,id',
            'ingresso_id' => 'required|exists:ingressos,id',
            'data_venda' => 'required|date'
        ]);
    
        $venda->update($request->all());
        return redirect()->route('vendas.index');
    }
    
    public function destroy(Venda $venda) {
        $venda->delete();
        return redirect()->route('vendas.index');
    } 
    
    public function relatorio(Request $request)
{
    $inicio = $request->input('data_inicio');
    $fim = $request->input('data_fim');

    $vendas = Venda::whereBetween('created_at', [$inicio, $fim])->get();

    return view('vendas.relatorio', compact('vendas'));
}
}
