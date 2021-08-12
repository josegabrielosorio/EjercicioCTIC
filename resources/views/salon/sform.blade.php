        <label for="Area">Area</label>
        <select type="text" name="Area" value="{{ isset($salon->Area)?$salon->Area:old('Area') }}" id="Area">

        <option value="Sur">Sur</option>
        <option value="Este">Este</option>
        <option value="Oeste">Oeste</option>
        <option value="Norte">Norte</option>

        </select>
        <br>
      
        <br>
        <label for="Capacidad">Capacidad</label>
        <input type="number" name="Capacidad" value="{{ isset($salon->Capacidad)?$salon->Capacidad:old('Capacidad') }}" id="Capacidad">
        <br>
        
        <input type="submit" value="{{$modo}}">
        <a href="{{ url('salon/') }}"> Regresar.</a>