<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Tickets;
use Illuminate\Http\Response;

class ManageTickets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('home.showTickets', [
            'tickets' => Tickets::all()
        ]);
    }

    public function show($id)
    {
        return view('home.showTickets', [
            'tickets' => Tickets::findOrFail($id)
        ]);
    }
}

