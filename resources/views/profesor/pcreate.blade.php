@include('navbar');
<div class="text-center">
<form action="{{url('/profesor')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('profesor.pform',['modo'=>'Crear']);
        </form>
</div>