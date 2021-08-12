@include('navbar');
<div class="text-center">
<form action="{{url('/salon')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('salon.sform',['modo'=>'Crear']);
        </form>
</div>