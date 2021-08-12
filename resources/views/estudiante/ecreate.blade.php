@include('navbar');
<div class="text-center">
<form action="{{url('/estudiante')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('estudiante.eform',['modo'=>'Crear']);
</form>
</div>