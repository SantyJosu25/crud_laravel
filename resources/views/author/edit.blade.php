@extends('base')
@section('title')
    Editar Autor
@endsection
@section('content')

    <h1 style="text-align: center">Editar Autor</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('author.update', $author->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $author->lastname }}">
                </div>
                <div class="form-group has-feedback">
                    <label class="form-label">Categoria</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Seleccione la Categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" selected="{{ $author->category_id == $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
