
@if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach    
        </ul>
        </div>
@endif
<label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{ isset($curso->Nombre)?$curso->Nombre:old('Nombre') }}" id="Nombre">
        <br>
<label for="Fecha">Fecha</label>
        <input type="date" name="Fecha" value="{{ isset($curso->Fecha)?$curso->Fecha:old('Fecha') }}" id="Fecha">
        <br>
<label for="Hora">Hora</label>
        <input type="time" name="Hora" value="{{ isset($curso->Hora)?$curso->Hora:old('Hora') }}" id="Hora">
        <br>
<label for="Actu">Hora Actual</label>
        <input type="time" name="Actu" value="{{ date('h:i:s')  }}" id="Actu">
        <br>
<label for="salon_id">Salon</label>
        <select name="salon_id">
@foreach($salons as $salon)
        <option type="text" name="salon_id" value="{{ $salon->id}}" id="salon_id"> {{$salon->id}} {{$salon->Area}}
@endforeach
</select>
<br>
<label for="profesor_id">Profesor</label>
        <select name="profesor_id">
@foreach($profesors as $profesor)
        <option type="text" name="profesor_id" value="{{ $profesor->id}}" id="profesor_id"> {{$profesor->Nombre}} {{$profesor->Apellido}}
@endforeach
</select>
<br>
<input type="submit" value="{{$modo}}">
        <a href="{{ url('curso/') }}"> Regresar.</a>