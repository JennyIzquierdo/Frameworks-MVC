@extends ('layouts.app')
@section('content')
<div class='container'> 
    <h5>Lista de Asignaturas</h5>
    <a href="{{ route ('asignaturas.create') }}" class="btn btn-primary">Crear Asignatura</a>
    <table class="Table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de asignatura</th>
            <th>Semestre</th>
            <th>Creditos</th>   
            <th>Docente</th>  
            <th>Prerrequisito</th>  
            <th>Horas Autonomas</th> 
            <th>Horas Dirigidas</th> 

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->nombre_asignatura }}</td>
                <td>{{ $post->semestre }}</td>
                <td>{{ $post->creditos }}</td>
                <td>{{ $post->docente }}</td>
                <td>{{ $post->prerrequisito }}</td>
                <td>{{ $post->horas_autonomo }}</td>
                <td>{{ $post->horas_dirigido }}</td>
                </td>
                <td>
                    <a class="btn btn-primary" href={{ route('asignaturas.show', $asignatura->id)}}>Ver</a>
                    <a class="btn btn-primary" href={{ route('asignaturas.edit', $asignatura->id)}}>Editar</a>
                    <form action= "{{ route('asignaturas.destroy', $asignatura->id)}}" method="POST" style = "display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

