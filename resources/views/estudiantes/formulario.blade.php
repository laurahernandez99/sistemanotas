@csrf 
<div class ="block">
    <x-jet-label for="documento" value="{{ __('Documento')}}" />
    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento',$estudiante->documento)" required autofocus />

    <x-jet-label for="namee" value="{{ __('Nombre')}}" />
    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="namee" :value="old('namee',$estudiante->nombre)" required autofocus />

    <x-jet-label for="edad" value="{{ __('Edad')}}" />
    <x-jet-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad',$estudiante->edad)" required autofocus />

    <x-jet-label for="grado" value="{{ __('Grado')}}" />
    <x-jet-input id="grado" class="block mt-1 w-full" type="text" name="grado" :value="old('grado',$estudiante->grado)" required autofocus />

    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('estudiantes.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>

</div>