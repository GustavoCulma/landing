<?php

namespace App\Http\Controllers;
use App\Exports\PartipantExport;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    public function exportAllParticipants()
    {
        return Excel::download(new PartipantExport(), 'participant.xlsx');
    }
}
