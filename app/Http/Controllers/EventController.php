<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index () {
        $events = Event::all(); //resgatar todos os dados 'SELECT'
        $cont = 1;
        return view('welcome',['events' => $events, 'cont' => $cont]); //mandei para a view
    }

    public function create () {
        return view('events.create');
    }
}
