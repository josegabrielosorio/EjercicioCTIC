<label for="Hora">Hora</label>
        <input type="time" name="Hora" value="{{ isset($tiempo->Hora)?$tiempo->Hora:old('Hora') }}" id="Hora">
<br>

<input type="submit" value="{{$modo}}">
        <a href="{{ url('tiempo/') }}"> Regresar.</a>