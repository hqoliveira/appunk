<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\User;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    protected $request;

    public function __contruct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::latest()->paginate(5);
        //Consulta sql para mostrar os líderes de ministério na index
        $leaders = DB::table('tb_users')
                    ->join('tb_team', 'leader', '=', 'tb_users.id')
                    ->select('tb_team.id', 'tb_users.name as userName')
                    ->get();
        return view('admin\pages\team\index', ['team' => $team, 'leaders' => $leaders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin\pages\team\create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Team::create($request->all());
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (!$users = User::find($id))
        //     return redirect()->back();

        //Consulta sql para retornar todos os users de um determinado team pelo id
        $usersTeam = DB::table('tb_group_team_to_user')
                        ->join('tb_users', 'user_id', '=', 'tb_users.id')
                        ->join('tb_team', 'team_id', '=', 'tb_team.id')
                        ->select('tb_users.id as idUser',
                                'tb_users.name as userName',
                                'tb_team.id as idTeam',
                                'tb_team.name as teamName')
                        ->where('tb_team.id', '=', $id)
                        ->get();
        return view('admin.pages.team.show', ['usersTeam' => $usersTeam]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();

        if (!$team = Team::find($id))
            return redirect()->back();

        return view('admin\pages\team\edit', compact('team', 'users'));
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
        if (!$team = Team::find($id))
            return redirect()->back();

        $team->update($request->all());

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::where('id', $id)->first();
        if (!$team)
            return redirect()->back();

        $team->delete();
        return redirect()->route('team.index');
    }
}
