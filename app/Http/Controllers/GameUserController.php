<?php

namespace App\Http\Controllers;

use App\Models\GameUser;
use App\Http\Requests\StoreGameUserRequest;
use App\Http\Requests\UpdateGameUserRequest;

class GameUserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function show(GameUser $gameUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function edit(GameUser $gameUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameUserRequest  $request
     * @param  \App\Models\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameUserRequest $request, GameUser $gameUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameUser $gameUser)
    {
        //
    }
}
