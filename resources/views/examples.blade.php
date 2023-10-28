@extends('template')

@section('content')
<x-nav class="mb-4">
    <x-nav.link href="#">Cursos</x-nav.link>
    <x-nav.link href="#">Planes</x-nav.link>
    <x-nav.link href="#">Documentos</x-nav.link>
</x-nav>

<div class="container mx-auto px-4">
    <h1 class="text-3xl">Listado de ejemplos</h1>

    <hr class="my-4">

    <!-- No agrego type="success" ya que es la opción por defecto en el componente flash -->
    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de ERROR</x-flash>
    <x-flash type="info">Mensaje de INFORMACIÓN</x-flash>
    <x-flash type="warning">Mensaje de ADVERTENCIA</x-flash>
</div>
@endsection