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
<a href="{{ url('salon/create') }}"> Resgistrar un salón nuevo.</a>
</div>
<br>
<div class="text-center">
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                     <th>ID</th>
                     <th>Área</th>
                     <th>Capacidad</th>
                </tr>
            </thead>
             <tbody>
                @foreach( $salons as $salon)
                 <tr>
                     <td>{{ $salon->id }}</td>
                     <td>{{ $salon->Area }}</td>
                     <td>{{ $salon->Capacidad }}</td>
                     <td>
            
                     <a href="{{url('/salon/'.$salon->id.'/edit')}}">
                     Editar
                     </a>
                     
                     <form action="{{url('/salon/'.$salon->id)}}" method="post">
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