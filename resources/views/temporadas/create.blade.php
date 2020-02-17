@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST">
        @csrf
        <div class="row">
            <div class="col col-8">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" class="form-control" name="nome" id="nome"/>
                </div>
            </div>

            <div class="col col-2">
                <label for="qtd_temporadas">Nº temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
            </div>

            <div class="col col-2">
                <label for="ep_por_temporada">Ep. por temporada</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
            </div>
        </div>

        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection