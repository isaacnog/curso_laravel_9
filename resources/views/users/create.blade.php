@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Novo usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @include('users._partials.form')
    </form>

@endsection