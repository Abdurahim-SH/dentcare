<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.team.index',['teams'=>Team::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {

        $teamData = $request->all();

        if($request->hasFile('image_first')){

            $file = $request->file('image_first');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_first'] = $fileName;

        }
        if($request->hasFile('image_second')){

            $file = $request->file('image_second');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_second'] = $fileName;

        }
        if($request->hasFile('image_third')){

            $file = $request->file('image_third');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_third'] = $fileName;

        }

        if($request->hasFile('image_fourth')){

            $file = $request->file('image_fourth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_fourth'] = $fileName;

        }

        if($request->hasFile('image_fifth')){

            $file = $request->file('image_fifth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_fifth'] = $fileName;

        }

        Team::create($teamData);

        return redirect()->route('admin.team.index')->with('created','Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $team)
    {

        $teamData = $request->all();

        if($request->hasFile('image_first')){

            $file = $request->file('image_first');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_first'] = $fileName;

        }
        if($request->hasFile('image_second')){

            $file = $request->file('image_second');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_second'] = $fileName;

        }
        if($request->hasFile('image_third')){

            $file = $request->file('image_third');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_third'] = $fileName;

        }

        if($request->hasFile('image_fourth')){

            $file = $request->file('image_fourth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_fourth'] = $fileName;

        }

        if($request->hasFile('image_fifth')){

            $file = $request->file('image_fifth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $teamData['image_fifth'] = $fileName;

        }


        $team->update($teamData);

        return redirect()->route('admin.team.index')->with('updated','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return back()->with('deleted','Post deleted successfully!');
    }
}
