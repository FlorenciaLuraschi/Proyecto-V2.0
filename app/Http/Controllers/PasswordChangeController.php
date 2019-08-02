<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordChangeController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('guest');
  // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('changePassword');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      if(Hash::check($request['current-password'], auth()->user()->password)){
        $this->validate($request, [
        'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
          auth()->user()->update([           //Al usuario logueado
        'password' => \Hash::make($request->get('password')),     //guarda la nueva contraseña hasheada a la base de datos
      ]);
       return redirect('/perfil')->with('status', 'La contraseña ha sido cambiado con éxito!');
    } return redirect('/changePassword')->with('message', 'Credenciales incorrectas!');



    }


}
