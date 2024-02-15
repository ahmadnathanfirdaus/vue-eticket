<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::where('status', 'player')->get();
        $data = [
            'participants' => $participants
        ];
        return Inertia::render('Participants', $data);
    }

    public function supporter()
    {
        $participants = Participant::where('status', 'supporter')->get();
        $data = [
            'participants' => $participants
        ];
        return Inertia::render('Supporter', $data);
    }
}
