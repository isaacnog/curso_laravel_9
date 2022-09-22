@extends('layouts.app')

@section('title', "Novo comentário para o usuário {$user->name}")

@section('content')
    
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Novo comentário para o usuário {{$user->name}}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.store', $user->id) }}" method="POST">
        @include('users.comments._partials.form')
    </form>

@endsection