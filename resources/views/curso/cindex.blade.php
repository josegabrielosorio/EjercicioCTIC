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

<a href="{{ url('curso/create') }}" > Resgistrar curso nuevo.</a>
</div>
<br>
<div class="text-center">

<table class="table table-light">
            <thead class="thead-light">
                <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>Fecha</th>
                     <th>Hora</th>
                     <th>Salón</th>
                     <th>Docente</th>
                     <th>Estado</th>
                </tr>
            </thead>
             <tbody>
                @foreach( $cursos as $curso)
                
                
                 <tr>
                     <td>{{ $curso->id }}</td>
                     <td>{{ $curso->Nombre }}</td>
                     <td>{{ $curso->fecha }}</td>
                     <td>{{ $curso->hora }}</td>
                     <td>{{ $curso->salon_id }}</td>
                     <td>{{ $curso->profesor_id }}</td>
                     <td>@if($curso->hora < $curso->Actu)
                            <p class="ama">Amarillo</p>
                         @else
                            <p class="verd">Verde</p>
                        @endif
                     </td>
                     <td>
                     <a href="{{url('/curso/'.$curso->id.'/edit')}}">
                     Editar
                     </a>
                     
                     <form action="{{url('/curso/'.$curso->id)}}" method="post">
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