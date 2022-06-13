<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="documento" value="{{ __('Documento') }}" />
                    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento',$estudiante->documento)" readonly /><br>

                    <x-jet-label for="namee" value="{{ __('Nombre') }}" />
                    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="namee" :value="old('nombre',$estudiante->nombre)" readonly /><br>

                    <x-jet-label for="edad" value="{{ __('Edad') }}" />
                    <x-jet-input id="edad" class="block mt-1 w-full" type="text" name="edad" :value="old('edad',$estudiante->edad)" readonly /><br>

                    <x-jet-label for="grado" value="{{ __('Grado') }}" />
                    <x-jet-input id="grado" class="block mt-1 w-full" type="text" name="grado" :value="old('grado',$estudiante->grado)" readonly /><br>
                </div>
            </div>
            <a href="{{ route('estudiantes.index',$estudiante) }}"> 
            <x-jet-button>Volver</x-jet-button>
        </div>
    </div>
</x-app-layout>