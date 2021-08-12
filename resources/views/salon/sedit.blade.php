@include('navbar');
<div class="text-center">
<form action="{{ url('/salon/'.$salon->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('salon.sform',['modo'=>'Editar']);
</form>
</div>