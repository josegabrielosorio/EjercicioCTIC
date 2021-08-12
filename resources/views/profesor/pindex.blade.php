@include('navbar');
@if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
<br>
<div  class="text-center">
<a href="{{ url('profesor/create') }}"> Resgistrar un profesor nuevo.</a>
</div>
<br>
<div class="text-center">
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>Apellido</th>
                </tr>
            </thead>
             <tbody>
                @foreach( $profesors as $profesor)
                 <tr>
                     <td>{{ $profesor->id }}</td>
                     <td>{{ $profesor->Nombre }}</td>
                     <td>{{ $profesor->Apellido }}</td>
                     <td>
                     <a href="{{url('/profesor/'.$profesor->id.'/edit')}}">
                     Editar
                     </a>
                     
                     <form action="{{url('/profesor/'.$profesor->id)}}" method="post">
                     @csrf
                     {{ method_field('DELETE') }}
                     <input type="submit" onclick="return confirm('¿Realmente quiere borrar este registro?')"
                     value="Borrar">
                     </form>
                     
                     </td>
                 </tr>
                @endforeach
          </tbody>
       </table>
       </div>