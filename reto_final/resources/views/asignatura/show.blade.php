@extends ('layouts.app')
@section('content')

<div class="container">
    <h1>Nombre Asignatura: {{$asignatura -> nombre_asignatura}}</h1>
    <p>Semestre: {{$asignatura -> semestre}}</p>
    <p>Creditos: {{$asignatura -> creditos}}</p>
    <p>Docente: {{$asignatura -> docente}}</p>
    <p>Prerrequisito: {{$asignatura -> prerrequisito}}</p>
    <p>Horas Autonomas: {{$asignatura -> horas_autonomo}}</p>
    <p>Horas Dirigidas: {{$asignatura -> horas_dirigido}}</p>
    <p>{{$post -> created_at}}</p>
    <p>{{$post -> updated_at}}</p>
    <a href="{{route('asignaturas.edit', $asignatura->id)}}" class="btn btn-primary">Editar</a>
    <form action="{{route('asignaturas.destroy', $asignatura->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
</div>
@endsection
