<?php
//Este es el controlador de editar perfil
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class PerfilController extends Controller
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

    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('editPerfil',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      if ($request->hasFile('avatar')) {
    $user->avatar=$request->file('avatar')->store('public/avatars');
  };
    $user->update();
    $user->update([
    'name'=>$request->get('name'),
    'email'=>$request->get('email'),
    // 'password'=>Hash::make($request->get('password')),
  ]);


  //  PasswordChangeController
  if(Hash::check($request['current-password'], auth()->user()->password)){
    $this->validate($request, [
    'password' => ['required', 'string', 'min:8', 'confirmed'],
  ]);
      auth()->user()->update([           //Al usuario logueado
    'password' => \Hash::make($request->get('password')),     //guarda la nueva contraseña hasheada a la base de datos
  ]);
   return redirect('/perfil')->with('status', 'Los datos del perfil han sido cambiados con éxito!');
 } return back()->with('message', 'Credenciales incorrectas!');


    return redirect("/perfil");
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
