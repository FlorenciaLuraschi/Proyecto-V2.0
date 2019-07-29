<?php
//Este es el controlador del Perfil y las publicaciones
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\User;
use App\Game;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publications = Publication::with('authorPublication')->latest()->get();
      $games=Game::query()->with('player')->orderByDesc('score')->get();
      return view("publications.create")->with([
        'publications' => $publications,
        'games'=>$games,
        'user' => auth()->user(),    //devuelve el usuario logueado
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Publication::create([
        'body'=>$request->get('body'),
        'user_id' => $request->get('user_id'),
      ]);
      return redirect("/perfil");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $publications = Publication::with('authorPublication')->latest()->get();
        $games=Game::query()->with('player')->orderByDesc('score')->get();
        return view("publications.create")->with([
          'publications' => $publications,
          'games'=>$games,
          'user' => $user,  //acá devuelve el usuario de la url(según el id)
        ]);
    }

    public function showPublication(Publication $publication)
    {
        return view('publications.create', ['publication'=>$publication]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
      return view('publications.create', ['publication'=>$publication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
      $publication->update([
        'body'=>$request->get('body'),
        'user_id' => $request->get('user_id')
      ]);
      return redirect("/perfil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
      $publication->delete();
      return redirect('/perfil');
    }
}
