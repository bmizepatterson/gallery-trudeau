<?php

namespace App\Http\Controllers;

use App\Exhibit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // No separate create page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exhibit = new Exhibit;
        $exhibit->title = $request->title;
        $exhibit->year = $request->year;
        $exhibit->artist = $request->artist;
        $exhibit->url = $request->url;
        $exhibit->description = $request->description;

        Auth::user()->exhibits()->save($exhibit);

        return redirect()->route('home')
            ->with('status', 'Exhibit saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibit $exhibit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibit $exhibit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibit $exhibit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibit $exhibit)
    {
        //
    }
}
