<?php

namespace App\Http\Controllers;

use App\Models\CheckIn;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckInController extends Controller
{
    public function index()
    {
        $checkins = CheckIn::all()->load('ticket.participant');
        $data = [
            'checkins' => $checkins,
        ];
        return Inertia::render('CheckIn/List', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ticket_id' => 'required'
        ]);

        if($validated) {
            CheckIn::create($validated);
        }

        return back();
    }

    public function scan()
    {
        $tickets = Ticket::all()->load('participant');
        $data = [
            'tickets' => $tickets,
        ];
        return Inertia::render('CheckIn/Scan', $data);
    }
}
