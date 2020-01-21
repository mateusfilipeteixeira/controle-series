@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" class="form-control" name="nome"/>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
