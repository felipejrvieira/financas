@extends('template.base')

@section('title', 'Cadastro de categorias')

@section('content')
<form action="{{ empty($categoria) ? route('categorias.store') : route('categorias.update',['categoria'=>$categoria->id])}}" method="POST">
    @csrf
    @isset($categoria)
        @method('PUT')
    @endisset    
    <div class="mb-3">
    <label for="descricao" class="form-label">Insira a categoria:</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricão da categoria" value="{{$categoria->descricao ?? ''}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="button" onclick="history.go(-1);" class="btn btn-secondary">Voltar</button>
</form>
@endsection