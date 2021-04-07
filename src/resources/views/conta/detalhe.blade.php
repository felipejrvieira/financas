@extends('template.base')

@section('title', "Listagem de movimentações da conta $conta->descricao")

@section('content')
    <br/>
    <ul>
        @foreach($conta->movimentacoes as $movimentacao)
                <li>
                     {{$movimentacao->categoria->descricao}} | {{$movimentacao->valor}} | {{$movimentacao->efetuado_em}} | {{$movimentacao->comentario}}
                </li>
            
        @endforeach
    </ul>
@endsection