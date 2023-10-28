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
            <input  class="rounded shadow border border-gray-300 p-2 mt-1 w-full outline-none">
        </div>
        <div class="mt-4">
            <x-label>Contraseña</x-label>
            <x-input type="password" name="password"/>
        </div>
        <div class="flex items-center gap-4 justify-end mt-8">
            <x-link href="/register">Registrarse</x-link>
            <button type="submit" class="px-4 py-2 bg-blue-800 rounded text-xs text-white uppercase hover:bg-blue-700">Iniciar sesión</button>
        </div>
    </form>
</x-wrapper>

@endsection