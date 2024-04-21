@extends ('layouts.app')
@section('content')
<div class="container">
    <h1>Editar categoria</h1>
    <form action="{{ route("posts.update",$post->id)}}" method= "POST">
        @csrf 
        @method('PUT')
        <div class="form-group
        @error('title')
            has-error
        @enderror">
            <label for="title" class="form-label">Titulo Post</label>
            <input type= 'text' name = "title" id = "title" class ="form control"
            value = "{{ $post-> title}}">
            @error('title')
                <span class= 'help-block'>{{$message}}</span>
            @enderror
        </div>

        <div class="form-group
        @error('content')
            has-error
        @enderror">
            <label for="content" class="form-label">Contenido Post</label>
            <input type= 'text' name = "content" id = "content" class ="form control"
            value = "{{ $post-> content}}">
            @error('content')
                <span class= 'help-block'>{{$message}}</span>
            @enderror
        </div>

        <div class="form-group  mb-3">
            <label for="category">Categoria</label>
            <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

            <button type="btn btn-primary mb-3" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection