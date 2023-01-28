<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::withCount('uniquePlayers')->get();

        return response(
            [
                'games' => $games,
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        $game = Game::create([
            'name'  => $request->validated()['name'],
            'genre' => $request->validated()['genre'],
            'platform' => $request->validated()['platform'],
            'release_date' => $request->validated()['release_date'],
        ]);
        return response(
            [
                'message' => 'Game created successfully.',
                'game' => $game
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $game = Game::withCount('uniquePlayers')->find($id);

        if (!$game) {
            return response([
                'message' => 'Game not found.',
            ], 404);
        }

        return response(
            [
                'game' => $game,
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, int $id)
    {
        $game = Game::find($id);

        if (!$game) {
            return response()->json(
                [
                    'message' => 'Game not found.',
                ],
                404
            );
        }
        $game->update([
            'name' => $request->validated()['name'],
            'genre' => $request->validated()['genre'],
            'platform' => $request->validated()['platform'],
            'release_date' => $request->validated()['release_date'],
        ]);

        return response(
            [
                'message' => 'Game updated successfully.',
                'game' => $game
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $game = Game::find($id);

        if (!$game) {
            return response([
                'message' => 'Game not found.',
            ], 404);
        }

        $game->delete();

        return response(
            [
                'message' => 'Game deleted successfully.',
            ],
            200
        );
    }

    public function selectTopByPlaytime(Request $request)
    {
        $genre = $request->all()['genre'];
        $platform = $request->all()['platform'];

        $games = Game::selectRaw('games.*, SUM(play_time) as total_playtime')
            ->join('game_users', 'games.id', '=', 'game_users.game_id')
            ->groupByRaw('games.id')
            ->orderBy('total_playtime', 'desc');

        if ($genre) {
            $games->where('genre', $genre);
        }

        if ($platform) {
            $games->where('platform', $platform);
        }

        $games = $games->get();

        return response()->json(
            [
                'result' => $games
            ],
            200
        );
    }


    public function selectTopByPlayers(Request $request)
    {
        $genre = $request->input('genre');
        $platform = $request->input('platform');

        $games = Game::selectRaw('games.*, COUNT(DISTINCT game_users.user_id) as unique_players')
            ->join('game_users', 'games.id', '=', 'game_users.game_id')
            ->groupByRaw('games.id')
            ->orderBy('unique_players', 'desc');

        if ($genre) {
            $games->where('genre', $genre);
        }

        if ($platform) {
            $games->where('platform', $platform);
        }

        $games = $games->get();

        return response()->json(
            [
                'games' => $games
            ],
            200
        );
    }
}