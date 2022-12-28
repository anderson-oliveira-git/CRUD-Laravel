@extends('template')

@section('title', 'CRUD | Listar')

@section('content')

<div class="d-flex justify-content-end">
    <a href="{{ route('livro.create') }}">
        <button type="button" class="btn btn-primary mb-3">Cadastrar livro</button>
    </a>
</div>

<table class="table table-striped table-hover">
    <tr>
        <th style="width: 20%;">Isbn</th>
        <th style="width: 20%;">Titulo</th>
        <th style="width: 20%;">Autor</th>
        <th style="width: 20%;">Preco</th>
        <th style="width: 20%;">Ações</th>
    </tr>
    @foreach($livros as $livro)
        <tr>
            <td>{{ $livro->isbn }}</td>
            <td>{{ $livro->nome }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->preco }}</td>
            <td>
                <a style="text-decoration: none;" href="{{ route('livro.visualizar', ['id' => $livro->id]) }}" 
                    title="Visualizar livro {{ $livro->nome }}">
                    <button type="button" class="btn btn-success mb-3">Visualizar</button>
                </a>
                <a style="text-decoration: none;" href="{{ route('livro.atualizar', ['id' => $livro->id]) }}" 
                    title="Editar livro {{ $livro->nome }}">
                    <button type="button" class="btn btn-warning mb-3">Editar</button>
                </a>
                <a style="text-decoration: none;" href="{{ route('livro.delete', ['id' => $livro->id]) }}" 
                    title="Excluir livro {{ $livro->nome }}">
                    <button type="button" class="btn btn-danger mb-3">Excluir</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection