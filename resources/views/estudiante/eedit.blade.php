@include('navbar');
<div class="text-center">
<form action="{{ url('/estudiante/'.$estudiante->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('estudiante.eform',['modo'=>'Editar']);
</form>
</div>