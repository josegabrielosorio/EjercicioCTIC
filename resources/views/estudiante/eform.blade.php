
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{ isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre') }}" id="Nombre">
        <br>
        
        <input type="submit" value="{{$modo}}">
        <a href="{{ url('salon/') }}"> Regresar.</a>