<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        $games = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id')
            ->select(
                'games.id', 'games.title', 'games.score',
                'genres.id as genre_id', 'genres.name as genre_name'
            )
            ->get();
        $statistic = [
              'count' => $games->count(),
              'countScoreGtSeven' => $games->where('score', '>', 7)->count(),
              'max' => $games->max('score'),
              'min' => $games->min('score'),
              'avg' => $games->avg('score')
        ];

        return view('game.list', [
            'games' => $games,
            'statistics' => $statistic
        ]);
    }

    public function show($gameId)
    {
        $game = DB::table('games')->where('id', $gameId)->first();
        return view('game.show', [
            'game' => $game
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
