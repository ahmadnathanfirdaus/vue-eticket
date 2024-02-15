<?php

namespace App\Http\Controllers;

use App\Models\Lunch;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LunchController extends Controller
{
    public function index()
    {
        $lunchs = Lunch::all()->load('ticket.participant');
        $data = [
            'lunchs' => $lunchs,
        ];
        return Inertia::render('Lunch/List', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ticket_id' => 'required'
        ]);

        if($validated) {
            Lunch::create($validated);
        }

        return back();
    }

    public function scan()
    {
        $tickets = Ticket::all()->load('participant');
        $data = [
            'tickets' => $tickets,
        ];
        return Inertia::render('Lunch/Scan', $data);
    }
}
