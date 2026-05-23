<x-layout>
    <x-slot name="title">Panel Admin</x-slot>

    <h1>Bienvenido, {{ Auth::user()->nombreRegistro }}</h1>
    {{-- contenido del dashboard --}}
</x-layout>