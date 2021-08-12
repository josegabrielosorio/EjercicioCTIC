@include('navbar');
<form action="{{url('/tiempo')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('tiempo.tform',['modo'=>'Crear']);
        </form>