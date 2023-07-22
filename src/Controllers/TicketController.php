<?php

namespace hamidrezakiani\Ticket\Controllers;

use App\Http\Controllers\Controller;
use hamidrezakiani\Ticket\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        echo "26015";
    }

    public function store()
    {
        Ticket::create([
            'user_id' => 1,
            'title' => 'test',
             'importance' => 'MIDDLE',
        ]);

        echo "ticket stored successfully";
    }
}