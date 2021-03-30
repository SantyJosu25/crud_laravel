@extends('base')
@section('title')
    Editar Post
@endsection
@section('content')

    <h1 style="text-align: center">Editar Post</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group has-feedback">
                    <label class="form-label">Autor</label>
                    <select name="author_id" class="form-select" required>
                        <option value="">Seleccione el Autor</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" selected="{{ $post->author_id == $post->id }}">{{ $author->name . ' ' . $author->lastname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label><br>
                    <img src="{{ asset('storage') . '/' . $post->image }}" alt="imagen post" width="200"><br>
                    <input type="file" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Resumen</label>
                    <textarea class="form-control" name="summary" id="summary" rows="2">{{ $post->summary }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description"
                        rows="2">{{ $post->description }}</textarea>
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
