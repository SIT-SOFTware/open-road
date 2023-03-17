<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdvertisementController extends Controller
{

    /**
     * Passing images to carousel component.
     */
    public $advertisement;

    public function __construct(Advertisement $advertisement)
    {
        $this->advertisement = $advertisement;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        // Get all active ads
        $ads = Advertisement::all();
        
        // Get only trashed ads
        $trashedAds = Advertisement::onlyTrashed()->get();

        return view('advertisement.index')->with('ads', $ads)->with('trashedAds', $trashedAds);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //TODO validate fields appropriately
        $imageName = $request->file('advertisement')->getClientOriginalName();
        $imagePath = "images/".$imageName;

        //Store images in public folder
        $request->advertisement->move(public_path('images'), $imageName);

        //Store image details in DB
        Advertisement::create([
            'AD_TITLE' => 'temp',
            'AD_DESCRIPTION' => 'temp',
            'AD_URL' => 'temp',
            'AD_PATH' => $imagePath,
            'AD_SPACE_TYPE' => 1,
            'AD_LOCATION' => 'temp',
            'START_DATE' => '2023-03-04',
            'END_DATE' => '2023-03-07',
            'USER_ID' => '1'
        ]);

        //Return with success message
        return back()->with('success', 'Image uploaded successfully!')->with('image', $imageName);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $ad)
    {
        //updates the DB entry
        $ad->update([
            'AD_SPACE_TYPE' => $request->adStatus,
        ]);

        //Return with success message
        return back()->with('success', 'Image status updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $ad)
    {
        $ad->delete();

        return to_route('advertisements.index')
            ->with('success', 'Moved to Trash!');
    }
}
