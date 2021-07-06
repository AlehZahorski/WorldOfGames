<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    // CRUD
    // C - create
    // R - read
    // U - update
    // D - delete


    public function index()
    {
        $games = DB::table('games')->get();

        return view('game.list', [
            'games' => $games
        ]);
    }

    /**
     * @return Response
     */
    public function create()
    {
        //
    }

    public function show($gameId)
    {
        $game = DB::table('games')->where('id', $gameId)->first();
        return view('game.show', [
            'game' => $game
        ]);
    }

    public function store(Request $request)
    {
        //
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
