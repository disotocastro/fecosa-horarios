<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agendaController extends Controller
{
    public function index()
    {
        return view('agenda.index');
    }

    public function show($agenda)
    {
        return view('agenda.show', ['agenda' => $agenda]);
    }
}
