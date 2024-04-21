@extends ('layouts.app')
@section('content')
<div class="container">
    <h1>Editar categoria</h1>
    <form action="{{ route("asignatutas.update",$asignatura->id)}}" method= "POST">
        @csrf 
        @method('PUT')
        <div class="form-group
        @error('prerrequisito')
            has-error
        @enderror">
            <label for="prerrequisito" class="form-label">Prerrequisitos</label>
            <input type= 'text' name = "prerrequisito" id = "prerrequisito" class ="form control"
            value = "{{ $asignatura-> prerrequisito}}">
            @error('prerrequisito')
                <span class= 'help-block'>{{$message}}</span>
            @enderror
        </div>

        <div class="form-group
        @error('docente')
            has-error
        @enderror">
            <label for="docente" class="form-label">Docente</label>
            <input type= 'text' name = "docente" id = "docente" class ="form control"
            value = "{{ $asignatura-> content}}">
            @error('content')
                <span class= 'help-block'>{{$message}}</span>
            @enderror
        </div>

        
            <button type="btn btn-primary mb-3" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
