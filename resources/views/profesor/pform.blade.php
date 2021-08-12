<label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{ isset($profesor->Nombre)?$profesor->Nombre:old('Nombre') }}" id="Nombre">
        <br>

        <label for="Apellido">Apellido</label>
        <input type="text" name="Apellido" value="{{ isset($profesor->Apellido)?$profesor->Apellido:old('Apellido') }}" id="Apellido">
        <br>
<input type="submit" value="{{$modo}}">
        <a href="{{ url('salon/') }}"> Regresar.</a>