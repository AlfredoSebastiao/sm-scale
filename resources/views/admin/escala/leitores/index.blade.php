@extends('admin.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Escala</a>
        </li>
        <li class="breadcrumb-item active">Leitores</li>
    </ol>
@endsection

@section('conteudo')
    @include('admin.escala.leitores.lista-de-escala')
@endsection