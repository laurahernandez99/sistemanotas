<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Materia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="nombrem" value="{{ __('Nombre') }}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombrem" :value="old('nombrem',$materia->nombre)" readonly /><br>

                    <x-jet-label for="version" value="{{ __('Version') }}" />
                    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version',$materia->version)" readonly /><br>

                </div>
            </div>
            <a href="{{ route('materias.index',$materia) }}"> 
            <x-jet-button>Volver</x-jet-button>
        </div>
    </div>
</x-app-layout>