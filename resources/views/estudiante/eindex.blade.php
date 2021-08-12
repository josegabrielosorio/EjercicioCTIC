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
<a href="{{ url('estudiante/create') }}"> Resgistrar un estudiante nuevo.</a>
</div>
<br>
<div class="text-center">
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                </tr>
            </thead>
             <tbody>
                @foreach( $estudiantes as $estudiante)
                 <tr>
                     <td>{{ $estudiante->id }}</td>
                     <td>{{ $estudiante->Nombre }}</td>
                     <td>
                     <a href="{{url('/estudiante/'.$estudiante->id.'/edit')}}">
                     Editar
                     </a>
                     
                     <form action="{{url('/estudiante/'.$estudiante->id)}}" method="post">
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