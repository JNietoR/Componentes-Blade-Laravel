@extends('template')

@section('content')
<x-nav class="mb-4">
    <x-nav.link href="#">Cursos</x-nav.link>
    <x-nav.link href="#">Planes</x-nav.link>
    <x-nav.link href="#">Documentos</x-nav.link>

    <x-nav.link href="/login" class="rounded-full px-3 py-1 bg-gray-900 text-white hover:text-white">Login</x-nav.link>
    <x-nav.link href="/register" class="rounded-full px-3 py-2 border-2 border-gray-900 text-gray-900">Registro</x-nav.link>
</x-nav>

<div class="container mx-auto px-4">
    <h1 class="text-3xl">Listado de ejemplos</h1>

    <hr class="my-4">

    <!-- No agrego type="success" ya que es la opción por defecto en el componente flash -->
    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de ERROR</x-flash>
    <x-flash type="info">Mensaje de INFORMACIÓN</x-flash>
    <x-flash type="warning">Mensaje de ADVERTENCIA</x-flash>

    <hr class="my-4">

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <x-card 
            img="https://images.unsplash.com/photo-1551434678-e076c223a692"
            date="Octubre, 2023"
            title="Lorem ipsum dolor sit amet, consectetur"
            content="Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur"
        ></x-card>
        <x-card 
            img="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
            date="Octubre, 2023"
            title="Lorem ipsum dolor sit amet, consectetur"
            content="Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur"
        ></x-card>
        <x-card 
            img="https://images.unsplash.com/photo-1623479322729-28b25c16b011"
            date="Octubre, 2023"
            title="Lorem ipsum dolor sit amet, consectetur"
            content="Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur"
        ></x-card>
        <x-card 
            img="https://images.unsplash.com/photo-1528901166007-3784c7dd3653"
            date="Octubre, 2023"
            title="Lorem ipsum dolor sit amet, consectetur"
            content="Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur... Lorem ipsum dolor sit amet, consectetur"
        ></x-card>
    </div>
</div>
@endsection