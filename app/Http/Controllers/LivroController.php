<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livro::create([
            'isbn'  => $request->isbn,
            'nome'  => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco
        ]);

        return redirect()->route('livro.listar');
    }

    public function listar()
    {
        $livros = Livro::all();

        return view('livros.listar', compact('livros'));
    }

    public function destroy($id)
    {
        $livro = Livro::find($id);
        $livro->delete();

        return redirect()->route('livro.listar');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
        return view('livros.editar', compact('livro'));
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);

        $livro->update([
            'isbn'  => $request->isbn,
            'nome'  => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco
        ]);

        return redirect()->route('livro.listar');
    }

    public function view($id)
    {
        $livro = Livro::find($id);

        return view('livros.view', compact('livro'));
    }
}
