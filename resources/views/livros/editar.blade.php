@extends('template')

@section('title', 'CRUD | Editar')

@section('content')
<div class="col-6">
    <h2>Editar livro</h2>

    <form action="{{ route('livro.atualizar', ['id' => $livro->id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">Isbn</label>
            <input type="text" class="form-control" name="isbn" id="isbn" placeholder="Digite o isbn" value="{{ $livro->isbn }}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o titulo do livro" value="{{ $livro->nome }}">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Digite o nome do autor" value="{{ $livro->autor }}">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preco</label>
            <input type="text" class="form-control" name="preco" id="preco" placeholder="Digite o preco do livro" value="{{ $livro->preco }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('livro.listar') }}">
            <button type="button" class="btn btn-danger">Voltar</button>
        </a>
    </form>
</div>
@endsection