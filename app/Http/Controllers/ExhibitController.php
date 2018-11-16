<?php

namespace App\Http\Controllers;

use App\Exhibit;
use App\Http\Requests\ExhibitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExhibitController extends Controller
{
    /**
     * Require authentication
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all exhibits and paginate
        $exhibits = Exhibit::simplePaginate(1);
        return view('exhibits.index', compact('exhibits'));
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
     * @param  \App\Http\Requests\ExhibitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExhibitRequest $request)
    {
        $request->validated();

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
        return view('exhibits.show', compact('exhibit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibit $exhibit)
    {
        return view('exhibits.edit', compact('exhibit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ExhibitRequest  $request
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function update(ExhibitRequest $request, Exhibit $exhibit)
    {
        $request->validated();

        $exhibit->title = $request->title;
        $exhibit->year = $request->year;
        $exhibit->artist = $request->artist;
        $exhibit->url = $request->url;
        $exhibit->description = $request->description;

        $exhibit->save();
        return redirect()->route('home')
            ->with('status', 'Exhibit saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibit $exhibit)
    {
        $exhibit->forceDelete();
        return redirect()->route('home')
            ->with('status', 'Exhibit deleted');
    }
}
