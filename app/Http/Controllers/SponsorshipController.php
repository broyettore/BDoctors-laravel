<?php

namespace App\Http\Controllers;

use App\Models\Sponsorship;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sponsorships = Sponsorship::all();
        return view('admin.sponsorship.create', compact('sponsorships'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $user = auth()->user();

        $sponsorshipInput = (array) $request->input('sponsorship', []);
        $sponsorship = Sponsorship::find($sponsorshipInput);
        
        $end_date = date("Y-m-d H:i:s", strtotime("+{$sponsorship->toArray()[0]['duration']} hours"));
        $syncData = array_fill_keys($sponsorshipInput, ['end_date' => $end_date]);

        $user->doctor->sponsorships()->sync($syncData);

        return view('admin.user.show', compact('user'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
