<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::paginate(2);
        return view('home.index', ['events' => $events]);
    }

    public function show($id)
    {
         $scale = DB::table('tb_scales')
                         ->join('tb_team', 'team_id', '=', 'tb_team.id')
                         ->join('tb_users', 'user_id', '=', 'tb_users.id')
                         ->join('tb_events', 'event_id', '=', 'tb_events.id')
                         ->select('tb_team.name as teamName',
                                  'tb_users.name as userName',
                                  'tb_events.date as eventDate')
                         ->where('tb_events.id', '=', $id)
                         ->get();
        return view('home.show', compact($scale));
    }
}
