<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Valoración Activo') }}
        </h2>
    </x-slot>
    @livewireStyles
    @livewire('valoracion-activo')
    @livewireScripts
</x-app-layout>
