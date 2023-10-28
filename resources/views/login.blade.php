@extends('template')

@section('title', 'Login')
@section('content')

<x-wrapper>
    <x-slot name="title">
        Inicio de Sesión
    </x-slot>
    <form action="">
        <div>
            <x-label>Email</x-label>
            <x-input type="text" name="email"/>
        </div>
        <div class="mt-4">
            <x-label>Contraseña</x-label>
            <x-input type="password" name="password"/>
        </div>
        <div class="flex items-center gap-4 justify-end mt-8">
            <x-link href="/register">Registrarse</x-link>
            <x-button>Iniciar sesión</x-button>
        </div>
    </form>
</x-wrapper>

@endsection