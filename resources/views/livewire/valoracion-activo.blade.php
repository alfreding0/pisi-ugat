<div>
    <!-- REQUIRED: jQuery and Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold p-5 m-5">Encuesta de Valoración de Activos</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="grid grid-cols-4 gap-4">
                            <div>
                                <x-label for="codigo" value="{{ __('Codigo') }}" />
                                <x-input id="codigo" class="block mt-1 w-full" type="text" name="emafsdfil" :value="old('codigo')" required autofocus autocomplete="username" />
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
                                <textarea name="descripcion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="descripcion" required></textarea>
                            </div>

                            <div class="mt-4">
                                <x-label for="propietario" value="{{ __('Propietario') }}" />
                                <x-input id="propietario" class="block mt-1 w-full" type="text" name="propietario" value="{{ auth()->user()->name }}" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="responsable" value="{{ __('Responsable') }}" />
                                <x-input id="responsable" class="block mt-1 w-full" type="text" name="responsable" value="{{ auth()->user()->name }}" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="tipoActivo" value="{{ __('Tipo de activo') }}" />
                                <select id="tipoActivo" class="block mt-1 w-full" name="tipoActivo" required>
                                    <option value="">Uno</option>
                                    <option value="">Dos</option>
                                    <option value="">Tres</option>
                                    <option value="">Cuatro</option>
                                </select>
                            </div>

                            <div class="mt-4">
                                <input wire:model="search" type="text" placeholder="Search users..."/>
                                
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>VALOR</th>
                                            <th>JUSTIFICACION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->password }}</td>
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
