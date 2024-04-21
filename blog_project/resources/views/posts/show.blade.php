@extends ('layouts.app')
@section('content')

<div class="container">
    <h1>{{$post -> title}}</h3>
    <p>{{$post -> content}}</p>
    <p>{{$post -> created_at}}</p>
    <p>{{$post -> updated_at}}</p>
    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Editar</a>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
    </div>
</div>
@endsection