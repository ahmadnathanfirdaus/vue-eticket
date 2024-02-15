<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegisterController extends Controller
{
    public function index()
    {
        return Inertia::render('Register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'school' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $data = [];

        if ($validated) {
            $validated['status'] = 'supporter';
            $participant = Participant::create($validated);
            $code = $this->generateCode();
            $ticket = Ticket::create([
                'code' => $code,
                'participant_id' => $participant->id,
            ]);
            $data['ticket'] = $ticket;
            $data['qrCode'] = strval(QrCode::size(150)->generate($ticket->code));
        }

        return Inertia::render('RegisterSuccess', $data);
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
