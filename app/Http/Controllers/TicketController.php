<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all()->load('participant');
        $codes = [];
        // foreach ($tickets as $ticket) {
        //     array_push($codes, strval(QrCode::size(100)->generate($ticket->code)));
        // }
        $data = [
            'tickets' => $tickets,
            // 'codes' => $codes,
        ];
        return Inertia::render('Ticket', $data);
    }

    public function store(Request $request)
    {
        $participants = Participant::all();
        foreach ($participants as $participant) {
            Ticket::create([
                'participant_id' => $participant->id,
                'code' => $this->generateCode(),
            ]);
        }
        return redirect('/ticket');
    }

    public function generateCode()
    {
        $length = 16;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }
}
