<div>
    <!-- REQUIRED: jQuery and Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold p-5 m-5">Encuesta de Valoración de Activos</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <x-label for="codigo" value="{{ __('Codigo') }}" />
                                <x-input id="codigo" class="block mt-1 w-full" type="text" name="emafsdfil"
                                    :value="old('codigo')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="nombreActivo" value="{{ __('Activo') }}" />
                                <select id="nombreActivo" class="finder block mt-1 w-full" name="nombreActivo" required>
                                    @foreach ($activos as $activo)
                                    <option value="{{ $activo->id }}">{{ $activo->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4">
                                <x-label for="descripcion" value="{{ __('descripcion') }}" />
                                <textarea name="descripcion"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                    id="descripcion" required></textarea>
                            </div>

                            <div class="mt-4">
                                <x-label for="propietario" value="{{ __('Propietario') }}" />
                                <x-input id="propietario" class="block mt-1 w-full" type="text" name="propietario"
                                    value="{{ auth()->user()->name }}" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="responsable" value="{{ __('Responsable') }}" />
                                <x-input id="responsable" class="block mt-1 w-full" type="text" name="responsable"
                                    value="{{ auth()->user()->name }}" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="tipoActivo" value="{{ __('Tipo de activo') }}" />
                                <select wire:model="tipoActivoId" id="tipoActivo" class="block mt-1 w-full"
                                    name="tipoActivo" required>
                                    <option value="" disabled>Seleccione una opción:</option>
                                    <option value="Finley">Finley</option>
                                    <option value="Alfred">Alfred</option>
                                    <option value="Yovana">Yovana</option>
                                </select>
                            </div>

                            <div class="col-span-3 h-0.5 border-t-0 bg-green-700 opacity-100 dark:opacity-50"></div>

                            <div class="mt-10 sm:col-span-3">
                                <a href="#"
                                    class="rounded-md bg-blue-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Agregar activo dependencia +
                                </a>
                                <h2 class="text-xl font-superbold m-3">Dependencias de activos inferiores
                                    (hijos)</h2>
                                <table class="w-full">
                                    <thead>
                                        <tr
                                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-200 uppercase border-b border-gray-600">
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">ACTIVO</th>
                                            <th class="px-4 py-3">GRADO</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white" {{ $i=0 }}>
                                        @foreach($dependencias as $dependencia)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 border">{{ $i++ }}</td>
                                            <td class="px-4 py-3 font-semibold border">{{
                                                $dependencia->nombre_activo_id }}</td>
                                            <td class="px-4 py-3 border">{{ $dependencia->grado }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-span-3 h-0.5 border-t-0 bg-green-700 opacity-100 dark:opacity-50"></div>

                            <div class="mt-10 sm:col-span-3">
                                <a href="#"
                                    class="rounded-md bg-blue-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Agregar activo dependencia +
                                </a>
                                <h2 class="text-xl font-superbold m-3">Dependencias de activos inferiores
                                    (hijos)</h2>
                                <table class="w-full">
                                    <thead>
                                        <tr
                                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-200 uppercase border-b border-gray-600">
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">ACTIVO</th>
                                            <th class="px-4 py-3">GRADO</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white" {{ $i=0 }}>
                                        @foreach($dependencias as $dependencia)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 border">{{ $i++ }}</td>
                                            <td class="px-4 py-3 font-semibold border">{{
                                                $dependencia->nombre_activo_id }}</td>
                                            <td class="px-4 py-3 border">{{ $dependencia->grado }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.finder').select2();
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</div>