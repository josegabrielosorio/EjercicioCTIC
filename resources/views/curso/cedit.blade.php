@include('navbar');
<div class="text-center">
<form action="{{ url('/curso/'.$curso->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('curso.cform',['modo'=>'Editar']);
</form>
</div>