<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $games=Game::query()->with('player')->orderByDesc('score')->get();

      return view("games.posiciones_perfil")->with('games',$games);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $max_score=Game::query()->with('player')->max('score')->get();
      $min_score=Game::query()->with('player')->min('score')->get();


      if($id===$max_score->player->id){
          $games=Game::query()->with('player')->orderByDesc('score')->take(5)->get();
        }elseif($id===$min_score->player->id){
          $games=Game::query()->with('player')->orderBy('score', 'desc')->take(5)->orderByDesc('score')->get();
        }else{
          $games=Game::query()->with('player')->orderByDesc('score')->find($id)->get();
        }

      return view("games.posiciones_perfil")->with('games',$games);
      
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
