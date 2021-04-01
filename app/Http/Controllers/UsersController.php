<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

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
        $users = User::latest()->paginate(5);
        $teamUser = DB::table('tb_group_team_to_user')
                        ->join('tb_users', 'user_id', '=', 'tb_users.id')
                        ->join('tb_team', 'team_id', '=', 'tb_team.id')
                        ->select('tb_users.id as idUser',
                                'tb_users.name as idName',
                                'tb_team.id as idTeam',
                                'tb_team.name as teamName')->get();

        return view('admin.pages.users.index', ['users' => $users, 'teamUser' => $teamUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //passing team array object to choose the team on the view create
        $team = Team::all();
        return view('admin\pages\users\create', ['team' => $team]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$users = User::find($id))
            return redirect()->back();

        $usersTeam = DB::table('tb_group_team_to_user')
                        ->join('tb_users', 'user_id', '=', 'tb_users.id')
                        ->join('tb_team', 'team_id', '=', 'tb_team.id')
                        ->select('tb_users.id as idUser',
                                'tb_users.name as userName',
                                'tb_team.id as idTeam',
                                'tb_team.name as teamName')
                        ->where('tb_users.id', '=', $id)
                        ->get();

        return view('admin.pages.users.show', ['users' => $users, 'usersTeam' => $usersTeam]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$user = User::find($id))
            return redirect()->back();

        $team = Team::all();
        return view('admin.pages.users.edit', ['user' => $user, 'team' => $team]);
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
        //dd($request);
        if (!$user = User::find($id))
            return redirect()->back();

        //sql para linkar user ao team na tabela de entidade fraca
        DB::table('tb_group_team_to_user')
                                ->insert([
                                            'team_id'=> $request['team'],
                                            'user_id' => $user->id,
                                            'created_at' => new DateTime(),
                                            'updated_at' => new DateTime()
                                        ]);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user)
            return redirect()->back();

        $user->delete();
        return redirect()->route('users.index');
    }
}
