@extends('template.base')

@section('title', 'Cadastro de contas')

@section('content')
<form action="{{ empty($conta) ? route('contas.store') : route('contas.update',['conta'=>$conta->id])}}" method="POST">
    @csrf
    @isset($conta)
        @method('PUT')
    @endisset    
    <div class="mb-3">
    <label for="descricao" class="form-label">Insira a conta:</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricão da conta" value="{{$conta->descricao ?? ''}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="button" onclick="history.go(-1);" class="btn btn-secondary">Voltar</button>
</form>
@endsection