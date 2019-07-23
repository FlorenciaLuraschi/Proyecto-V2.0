<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BuscadorController extends Controller
{
    public function buscar(Request $request){
      // $id = User::query()->select('id');
      $nombres= User::query()->select('id','name');
      if($request->has('search')){
        $nombres->where('name','like',$request->get('search').'%');
      }

        return view('buscador',[
          'nombres' => $nombres->get(),
          // 'id' => $id->get(),
        ]);

    }
    // public function show(User $user){
    //   return view('buscador', ['user'=> $user]);
    // }


}
