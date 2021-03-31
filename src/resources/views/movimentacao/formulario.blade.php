@extends('template.base')

@section('title', 'Cadastro de movimentacoes')

@section('content')
<form action="{{ empty($movimentacao) ? route('movimentacoes.store') : route('movimentacoes.update',['movimentacao'=>$movimentacao->id])}}" method="POST">
    @csrf
    @isset($movimentacao)
        @method('PUT')
    @endisset
   
    <div class="mb-3">
        <label for="descricao" class="form-label">Escolha a conta:</label>
        <select class="form-select" aria-label="Escolha a conta" name="conta_id" id="contas">
            @foreach($contas as $conta)
                <option value="{{ $conta->id }}">{{ $conta->descricao }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Escolha a categoria:</label>
        <select class="form-select" aria-label="Escolha a categoria" name="categoria_id" id="categorias">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->descricao }}</option>
            @endforeach
        </select>
    </div>   
    <div class="mb-3">
    <label for="descricao" class="form-label">Insira a movimentacao:</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricão da movimentacao" value="{{$movimentacao->descricao ?? ''}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="button" onclick="history.go(-1);" class="btn btn-secondary">Voltar</button>
</form>
@endsection