<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Scale;
use App\Models\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all the teams
        $allTeam = DB::table('tb_team')
                        ->select('id', 'name')
                        ->get();
        //return escale
        $scale = DB::table('tb_scales')
                    ->join('tb_team', 'team_id', '=', 'tb_team.id')
                    ->join('tb_events', 'event_id', '=', 'tb_events.id')
                    ->join('tb_users', 'user_id', '=', 'tb_users.id')
                    ->select('tb_events.id',
                             'tb_scales.id as scale_id',
                             'tb_team.id as idTeam' ,
                             'tb_events.name as eventName',
                             'tb_scales.team_id as teamID',
                             'tb_team.name as teamName',
                             'tb_events.date',
                             'tb_users.name as userName')
                            ->get();
                            //dd($scale);
        //return leaders of the data base
        $leaders = DB::table('tb_users')
                    ->join('tb_team', 'leader', '=', 'tb_users.id')
                    ->select('tb_team.id', 'tb_users.name as userName')
                    ->get();
        
        return view('admin.pages.scale.index', ['allTeam' => $allTeam, 'scale' => $scale, 'leaders' => $leaders]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users  = User::all();
        $team   = Team::all();
        $events = Event::all();

        $allUserOfTheTeam = DB::table('tb_group_team_to_user')
                                ->select('tb_users.id as idUser',
                                         'tb_users.name as userName',
                                         'tb_team.id as idTeam',
                                         'tb_team.name as teamName')
                                ->join('tb_users', 'user_id', '=', 'tb_users.id')
                                ->join('tb_team', 'team_id', '=', 'tb_team.id')
                                //->where('tb_team.id', '=', $id)
                                ->get();
                                //dd($allUserOfTheTeam);
        return view('admin\pages\scale\create',
                    [
                        'users'  => $users,
                        'team'   => $team,
                        'events' => $events
                    ]);
    }

    public function passID($id){

        $allUserOfTheTeam = DB::table('tb_group_team_to_user')
                                ->select('tb_users.id as idUser',
                                         'tb_users.name as userName',
                                         'tb_team.id as idTeam',
                                         'tb_team.name as teamName')
                                ->join('tb_users', 'user_id', '=', 'tb_users.id')
                                ->join('tb_team', 'team_id', '=', 'tb_team.id')
                                ->where('tb_team.id', '=', $id)
                                ->get();
                                dd($allUserOfTheTeam);
        return route('scale.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Scale::create($request->all());
        return redirect()->route('scale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scale = DB::table('tb_scales')
                    ->join('tb_team', 'team_id', '=', 'tb_team.id')
                    ->join('tb_events', 'event_id', '=', 'tb_events.id')
                    ->join('tb_users', 'user_id', '=', 'tb_users.id')
                    ->select('tb_events.id',
                             'tb_events.name as eventName',
                             'tb_team.name as teamName',
                             'tb_events.date',
                             'tb_users.name as userName')
                    ->where('tb_team.id', '=', $id)
                    ->get();
        return view('admin.pages.scale.show', ['scale' => $scale]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users  = User::all();
        $events = Event::all();
        if (!$scale = Scale::find($id))
            return redirect()->back();

        $scale = DB::table('tb_scales')
                ->join('tb_team', 'team_id', '=', 'tb_team.id')
                ->join('tb_events', 'event_id', '=', 'tb_events.id')
                ->join('tb_users', 'user_id', '=', 'tb_users.id')
                ->select('tb_events.id',
                            'tb_events.name as eventName',
                            'tb_team.name as teamName',
                            'tb_events.date',
                            'tb_users.name as userName')
                ->where('tb_team.id', '=', $id)
                ->get();
        $allTeam = DB::table('tb_team')
                ->select('id', 'name')
                ->get();
                
        return view('admin.pages.scale.edit', ['scale' => $scale, 'users' => $users, 'team' => $allTeam, 'events' => $events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scale = Scale::where('id', $id)->first();
        if (!$scale)
            return redirect()->back();

        $scale->delete();
        return redirect()->route('scale.index');
    }
}
