@extends('layouts.app')

@section('title', 'Editar comentário')

@section('content')
    
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Editar o comentário do usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.update', $comment->id) }}" method="post">
        @method('PUT')
        @include('users.comments._partials.form')
    </form>

@endsection