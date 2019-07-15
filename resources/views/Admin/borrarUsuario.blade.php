<ul>
       @foreach ($users as $user)
       <li>{{$user->name}}
       <form class="" action="{{url('/borrarUsuario',$user->id)}}" method="post">
         @csrf
         {{method_field('DELETE')}}
         <button>Borrar</button>
       </form>
       </li>
       @endforeach
     </ul>
