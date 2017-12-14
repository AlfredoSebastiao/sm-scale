@extends('admin.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Leitores</li>
    </ol>
@endsection

@section('conteudo')

    {{--@include('admin.leitores.sessao-novo')--}}
    @include('admin.leitores.tabela-leitores')
@endsection