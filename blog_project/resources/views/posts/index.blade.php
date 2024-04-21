@extends ('layouts.app')
@section('content')
<div class='container'> 
    <h5>Lista de Publicaciones</h5>
    <a href="{{ route ('posts.create') }}" class="btn btn-primary">Crear publicación</a>
    <table class="Table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th>Categoria</th>   
            <th>Acciones</th>  
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->category_id }}</td>
                </td>
                <td>
                    <a class="btn btn-primary" href={{ route('posts.show', $post->id)}}>Ver</a>
                    <a class="btn btn-primary" href={{ route('posts.edit', $post->id)}}>Editar</a>
                    <form action= "{{ route('posts.destroy', $post->id)}}" method="POST" style = "display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection