@extends('template');

@section('title', 'CRUD | Visualizar')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Titulo: {{ $livro->nome }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Autor: {{ $livro->autor }}</h6>
            <p class="card-text">R${{ $livro->preco }}</p>
            <a href="{{ route('livro.listar') }}">
                <button type="button" class="btn btn-danger">Voltar</button>
            </a>
        </div>
    </div>
@endsection