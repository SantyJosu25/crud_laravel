@extends('base')
@section('title')
    Lista de Autores
@endsection
@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 style="text-align: center">Lista de Autores</h1>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th colspan="3" style="text-align: center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($authors) >= 1)
                @foreach ($authors as $author)
                <tr class="align-middle">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->lastname }}</td>
                                <td width="10px">
                                    <a href="{{ route('author.show', $author->id) }}"
                                        class="btn btn-sm btn-outline-info">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('author.edit', $author->id) }}"
                                        class="btn btn-sm btn-outline-primary">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('author.destroy', $author->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('¿Desea eliminar este registro?')">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" style="text-align: center">{{ 'No existen registros' }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
