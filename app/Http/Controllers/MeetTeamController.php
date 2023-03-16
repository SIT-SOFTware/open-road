<?php

namespace App\Http\Controllers;

use App\Models\MeetTeam;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MeetTeamController extends Controller
{
    /**
     * Display a listing of the team members.
     */
    public function index()
    {
        $teams = MeetTeam::where('id', '!=', null)->orderBy('id', 'asc')->get();
        return view('webcontent.meet-team')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new team member.
     */
    public function create()
    {
        return view('webcontent.create-team');
    }

    /**
     * Store a newly created team member in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //TODO validate fields appropriately
        if ($request->picture != null) {
            $imageName = $request->file('picture')->getClientOriginalName();
            $imagePath = "images/".$imageName;

            //Store images in public folder
            $request->picture->move(public_path('images'), $imageName);
        } else {
            $imagePath = asset('images/noimage.jpg');
        }

        //Store member details in the DB
        MeetTeam::create([
            'NAME' => $request->name,
            'ROLE' => $request->role,
            'BIO' => $request->bio,
            'FILEPATH' => $imagePath
        ]);

        //Return with success message
        return to_route('meet-team.index')->with('success', 'Team Member Successfully Created');
    }

    /**
     * Display the specified team member.
     */
    public function show(MeetTeam $meetTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified team member.
     */
    public function edit(MeetTeam $meetTeam)
    {
        return view('webcontent/edit-team')->with('team', $meetTeam);
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(Request $request, MeetTeam $meetTeam)
    {
        if ($request->picture != null) {
            $imageName = $request->file('picture')->getClientOriginalName();
            $imagePath = "images/".$imageName;
        
            $meetTeam->update([
                'NAME' => $request->name,
                'ROLE' => $request->role,
                'BIO' => $request->bio,
                'FILEPATH' => $imagePath
            ]);
        } else {
            $meetTeam->update([
                'NAME' => $request->name,
                'ROLE' => $request->role,
                'BIO' => $request->bio,
            ]);
        }

        return to_route('meet-team.index')->with('success', 'Team Member Updated');
    }

    /**
     * Remove the specified team member from storage.
     */
    public function destroy(MeetTeam $meetTeam)
    {
        // TODO Delete team member image from file storage
        $meetTeam->delete();

        return to_route('meet-team.index')->with('success', 'Team Member removed.');
    }
}
