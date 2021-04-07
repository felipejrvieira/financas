@extends('template.base')

@section('title', 'Listagem de contas')

@section('content')
    <ul>
        <li><a href="{{ route('contas.create')}}">Criar nova conta</a></li>
        @foreach($contas as $conta)
            <form action="{{ route('contas.destroy', ['conta'=>$conta->id])}}" method="POST">
                <li>
                    <a class="btn btn-primary" href="{{ route('contas.edit',['conta'=> $conta->id]) }}">Editar</a>
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Excluir</button>
                    <a class="btn btn-secondary" href="{{ route('contas.show',['conta'=> $conta->id]) }}">Detalhar</a>
                    <strong>{{$conta->descricao}}</strong>
                </li>
            </form>
            
        @endforeach
    </ul>
@endsection