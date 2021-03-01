<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Team;
use App\Models\Office;
use App\Http\Requests\StoreUpdateMembersRequest;

class MembersController extends Controller
{
    protected $request;

    public function __contruct(Request $request)
    {
        $this->request = $request;
        //$this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $members = Member::paginate(10);
        return view('admin.pages.members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        $office = Office::all();
        return view('admin\pages\members\create', ['team' => $team, 'office' => $office]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateMembersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateMembersRequest $request)
    {
        Member::create($request->only('name'));
        
        //$data = $request->only('name');
        //Member::create($data);
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$member = Member::find($id))
            return redirect()->back();

        return view('admin.pages.members.show', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
