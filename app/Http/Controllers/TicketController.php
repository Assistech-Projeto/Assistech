<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        // Exibir todos os tickets do usuário logado
        $tickets = Ticket::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        // Exibir formulário para criar um novo ticket
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validar e armazenar um novo ticket
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Ticket::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket criado com sucesso!');
    }

    public function show(Ticket $ticket)
    {
        // Exibir detalhes de um ticket específico
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        // Exibir formulário para editar um ticket
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        // Validar e atualizar um ticket
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:aberto,em_andamento,fechado',
        ]);

        $ticket->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket atualizado com sucesso!');
    }

    public function destroy(Ticket $ticket)
    {
        // Deletar um ticket
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket deletado com sucesso!');
    }
}
