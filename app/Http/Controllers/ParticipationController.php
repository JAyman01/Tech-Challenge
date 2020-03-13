<?php

namespace App\Http\Controllers;

use App\participation;
use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $results = participation::orderBy('id', 'asc')->paginate(10);
        error_log($results);
        return view('result')->with('results', $results)->withTitle('result');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(participation $participation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(participation $participation)
    {
        //
    }
}
