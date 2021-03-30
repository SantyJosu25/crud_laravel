@extends('base')
@section('title') Inicio @endsection
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-3">Santiago Anrango</h1>
    <p class="lead">Ejercicio práctico de un CRUD de 3 tablas relacionadas.</p>

    <a class="btn btn-success" href="{{ route('author.index') }}">Autor</a>
    <a class="btn btn-primary" href="{{ route('category.index') }}">Categorias</a>
    <a class="btn btn-info" href="{{ route('post.index') }}">Posts</a>
</div>
</main>
<style>
    div{
        color: rgb(20, 21, 22);
    }
</style>
@endsection
