<form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-6 pt-4 pb-6 ">
    {{-- Nombre --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="name">
            Nombre:
        </label>
        <input
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="text" placeholder="Ingrese el nombre" wire:model.defer="name" />
        <x-jet-input-error for="name" />
    </div>

    {{-- Apellido --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="lastname">
            Apellido:
        </label>
        <input
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="text" placeholder="Ingrese el Apellido " wire:model.defer="lastname" />
        <x-jet-input-error for="lastname" />
    </div>

    {{-- Cedula --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="ident">
            Cedula:
        </label>
        <input
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="text" placeholder="Ingrese el numero de Cedula " wire:model.defer="ident" />
        <x-jet-input-error for="ident" />
    </div>

    {{-- Departamentos --}}
    <div class="mb-1">

        <label class="block text-blue-300  font-bold mb-2" for="department">
            Departamento:
        </label>

        <select
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"wire:model="department_id">
            <option value="" disabled selected>Seleccione un Departamento</option>
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        <x-jet-input-error for="department_id" />
    </div>
    {{-- Ciudades --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="city">
            Ciudad:
        </label>
        <select
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"wire:model="city_id">
            <option value="" disabled selected>Seleccione una ciudad</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        <x-jet-input-error for="city_id" />
    </div>

    {{-- Telefono --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="phone">
            Telefono:
        </label>
        <input
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="text" placeholder="Ingrese el Telefono " wire:model.defer="phone" />
        <x-jet-input-error for="phone" />
    </div>


    {{-- Email --}}
    <div class="mb-1">
        <label class="block text-blue-300  font-bold mb-2" for="email">
            Email:
        </label>
        <input
            class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="text" placeholder="Ingrese el Email" wire:model.defer="email" />
        <x-jet-input-error for="email" />
    </div>

    {{-- checkbox --}}
    <div class="form-check text-blue-300  ">
        <x-jet-checkbox wire:model.defer="protecteddata">
        </x-jet-checkbox>
        Autorizo el tratamiento de mis datos de acuerdo con la finalidad
        establecida en la política de protección de datos personales.
        <a href="">Haga clic aquí</a></label>
    </div>

    {{-- Boton --}}
    <div class="flex items-center justify-between pt-4">
        <button
            class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
            type="button" wire:click="create">
            Registrarse
        </button>
    </div>

</form>
