<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre',$nota->student->nombre)" readonly /><br>

                    <x-jet-label for="nombre" value="{{ __('Materia') }}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre',$nota->course->nombre)" readonly /><br>

                    <x-jet-label for="nota" value="{{ __('Nota') }}" />
                    <x-jet-input id="nota" class="block mt-1 w-full" type="text" name="nota" :value="old('nota',$nota->nota)" readonly /><br>

                </div>
            </div>
            <a href="{{ route('notas.index',$nota) }}"> 
            <x-jet-button>Volver</x-jet-button>
        </div>
    </div>
</x-app-layout>