@extends('admin.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Nucleos</li>
    </ol>
@endsection

@section('conteudo')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @include('admin.info-adicional.nucleos.tabela-nucleos')
@endsection