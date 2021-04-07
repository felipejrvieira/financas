@extends('template.base')

@section('title', 'Listagem de funcionalidades')

@section('content')
    <ul>
        <li><a href="{{ route('contas.index')}}">Listagens de contas</a></li>
        <li><a href="{{ route('categorias.index')}}">Listagens de categorias</a></li>
        <li><a href="{{ route('movimentacoes.index')}}">Listagem de movimentações</a></li>
    </ul>
@endsection