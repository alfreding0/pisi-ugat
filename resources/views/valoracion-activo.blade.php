<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Valoración Activo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold p-5 m-5">Encuesta de Valoraci'on de activos</h1>  
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <div>
                            <x-label for="email" value="{{ __('Propietario') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Responsable') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="text" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="tipoActivo" value="{{ __('Tipo de activo') }}" />
                            <select id="tipoActivo" class="w-full" name="tipoActivo" required>
                                <option value="">Uno</option>
                                <option value="">Dos</option>
                                <option value="">Tres</option>
                                <option value="">Cuatro</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Responsable') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="text" name="password" required autocomplete="current-password" />
                        </div>

                    </form>
                </div>                
            </div>
        </div>
    </div>
</x-app-layout>
