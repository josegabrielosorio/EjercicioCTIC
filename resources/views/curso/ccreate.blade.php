@include('navbar');
<div class="text-center">
<form action="{{url('/curso')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('curso.cform',['modo'=>'Crear']);
        </form>
</div>