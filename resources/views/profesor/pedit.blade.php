@include('navbar');
<div class="text-center">
<form action="{{ url('/profesor/'.$profesor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('profesor.pform',['modo'=>'Editar']);
</form>
</div>