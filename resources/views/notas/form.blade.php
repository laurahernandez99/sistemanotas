@csrf
<div class="block">
<x-jet-label for="materia" value="{{ __('Nombre Materia')}}"/>
<select 
class="form-select appearance-none
block 
w-full 
px-3
py-1.5
text-base
font-normal
text-gray-700
bg-white bg-clip-padding bg-no-repeat 
border border-solid border-gray-300 
rounded 
transition
ease-in-out 
m-0 
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
name="materia">
<option selected>Seleccione una materia</option>
@foreach ($materias as $materia)
<option value="{{$materia->id}}"> {{$materia->nombre}}</option>
@endforeach
</select>
</div>


<div class="block">
<x-jet-label for="estudiante" value="{{ __('Nombre Estudiante')}}"/>
<select 
class="form-select appearance-none
block 
w-full 
px-3
py-1.5
text-base
font-normal
text-gray-700
bg-white bg-clip-padding bg-no-repeat 
border border-solid border-gray-300 
rounded 
transition
ease-in-out 
m-0 
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
name="estudiante">
<option selected>Seleccione un estudiante</option>
@foreach ($estudiantes as $estudiante)
<option value="{{$estudiante->id}}"> {{$estudiante->nombre}} - ({{$estudiante->grado}})</option>
@endforeach
</select>
</div>

<div class="block">
<x-jet-label for="nota" value="{{ __('Nota Estudiante')}}"/>
<x-jet-input name="nota" class="block mt-1 w-full" type="number"/>
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
        <a href="{{route('materias.create')}}">
            <x-jet-button type="submit">
                Guardar
            </x-jet-button>
        </a>
        </div>
    </div>
</div>