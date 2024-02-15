<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SnackController extends Controller
{
    public function index()
    {
        $snacks = Snack::all()->load('ticket.participant');
        $data = [
            'snacks' => $snacks,
        ];
        return Inertia::render('Snack/List', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ticket_id' => 'required'
        ]);

        if($validated) {
            Snack::create($validated);
        }

        return back();
    }

    public function scan()
    {
        $tickets = Ticket::all()->load('participant');
        $data = [
            'tickets' => $tickets,
        ];
        return Inertia::render('Snack/Scan', $data);
    }
}
