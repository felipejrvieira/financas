@extends('template.base')

@section('title', 'Listagem de movimentacoes')

@section('content')
    <ul>
        <li><a href="{{ route('movimentacoes.create')}}">Criar nova movimentacao</a></li>
        @foreach($movimentacoes as $movimentacao)
            <form action="{{ route('movimentacoes.destroy', ['movimentacao'=>$movimentacao->id])}}" method="POST">
                <li>
                    <a class="btn btn-primary" href="{{ route('movimentacoes.edit',['movimentacao'=> $movimentacao->id]) }}">Editar</a>
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Excluir</button>
                    <strong>{{$movimentacao->descricao}}</strong>
                </li>
            </form>
            
        @endforeach
    </ul>
@endsection