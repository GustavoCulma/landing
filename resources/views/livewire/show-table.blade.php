<div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <x-jet-button>
                <a href="{{ route('participant.export') }}">EXCEL</a>
            </x-jet-button>


            @if ($participants->count())
                <table class="w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID

                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3  text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                NOMBRE
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3  text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                APELLIDO
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                CÉDULA
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                TELEFONO
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                CORREO
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                DEPARTAMENTO
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                CIUDAD
                            </th>
                            <th scope="col"
                                class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                FECHA DE CREACIÓN
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($participants as $participant)
                            <tr>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->lastname }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->ident }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->phone }}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->email }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->department_id }}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->city_id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $participant->created_at }}
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    <p> No se encuentran coicidencias </p>
                </div>
            @endif

        </x-table>
    </div>
</div>
