@extends('base')
@section('title')
    Vista de la Categoría
@endsection
@section('content')

    <h1 style="text-align: center">Vista de la Categoría</h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                @method('head')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $author->lastname }}" disabled>
                </div>
                <div class="form-group has-feedback">
                    <label class="form-label">Categoria</label>
                    <select name="category_id" class="form-select" required>
                        <option value="" disabled>Seleccione la Categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" selected="{{ $author->category_id == $category->id }}" disabled>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div style="text-align: center">
                    <a href="{{ route('author.index') }}" class="btn btn-outline-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
