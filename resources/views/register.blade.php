@extends('template')

@section('title', 'Register')
@section('content')

<x-wrapper>
    <x-slot name="title">
        Crear cuenta
    </x-slot>
    <form action="">
        <div>
            <x-label>Nombre</x-label>
            <x-input type="text" name="name" />
        </div>
        <div class="mt-4">
            <x-label>Email</x-label>
            <x-input type="text" name="email" />
        </div>
        <div class="mt-4">
            <x-label>Contraseña</x-label>
            <x-input type="password" name="password" />
        </div>
        <div class="flex items-center gap-4 justify-end mt-8">
            <x-link href="/login">Estoy registrado</x-link>
            <button type="submit" class="px-4 py-2 bg-blue-800 rounded text-xs text-white uppercase hover:bg-blue-700">Registrarse</button>
        </div>
    </form>
</x-wrapper>

@endsection