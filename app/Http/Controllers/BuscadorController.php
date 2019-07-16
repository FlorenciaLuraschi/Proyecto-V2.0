<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BuscadorController extends Controller
{
    public function buscar(Request $request){

      $nombres= User::query()->select('name');
      if($request->has('search')){
        $nombres->where('name','like',$request->get('search').'%');
      }

        return view('buscador',['nombres' => $nombres->get()]);

    }
    

}
