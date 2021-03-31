@extends('template.base')

@section('title', 'Listagem de categorias')

@section('content')
    <ul>
        <li><a href="{{ route('categorias.create')}}">Criar nova categoria</a></li>
        @foreach($categorias as $categoria)
            <form action="{{ route('categorias.destroy', ['categoria'=>$categoria->id])}}" method="POST">
                <li>
                    <a class="btn btn-primary" href="{{ route('categorias.edit',['categoria'=> $categoria->id]) }}">Editar</a>
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Excluir</button>
                    <strong>{{$categoria->descricao}}</strong>
                </li>
            </form>
            
        @endforeach
    </ul>
@endsection