<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LandingPage</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

        html {
            font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>

<body class="bg-gray-700">
    <div>
        <!--Nav-->
        <div class=" sticky top-0 z-30  bg-gray-700">
            <div class="ml-2 w-full flex items-center justify-between">
                <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="{{ route('home.index') }}">
                    Landing<span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Page</span>
                </a>

                <div class=" mr-4 flex w-10 justify-end content-center">
                    <a href="{{ route('login') }}">
                        <img class="w-12 py-3  " src="{{ asset('/images/login.png') }} " />
                    </a>
                </div>
            </div>
        </div>

        <!--Main-->
        <div class="relative">
            <div class=" relative container pt-24 md:pt-5 mx-auto flex flex-wrap flex-col md:flex-row items-center">


                <!--Left Col-->
                <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                    <h1
                        class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                        Registra tus datos, Participa
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                            y gana.
                        </span>

                    </h1>
                    @livewire('add-participant')
                </div>


                <!--Right Col-->

                @if ($winner)
                    <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                        <h1 class="text-indigo-400 text-5xl">Ganador !!!</h1>
                        <p class="text-indigo-400 text-5xl">El ganador del mas reciente concurso es
                        <h2 class="text-white text-1xl">{{ $winner->name }} {{ $winner->lastname }}</h2> con número de
                        documento
                        {{ $winner->ident }} <br>
                        Felicidades
                        </p>

                    </div>
                @else
                    <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                        <h2 class="text-indigo-400 text-5xl">Registra tus datos, Participa y gana</h2>

                        <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6"
                            src="{{ asset('/images/car.svg') }} " />

                        <div class="description">
                            <p class="text-white text-1xl">Nuetra empresa desea premiar tu fidelidad y conocerte un
                                poco
                                mas, solo registra los
                                datos personales a continuación y estaras participando por un automovil 0 KM.</p>
                        </div>
                    </div>
                @endif


                <div class="mx-auto md:pt-16">
                    <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
                        Download our app:
                    </p>
                    <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                        <img src="{{ asset('/images/App Store.svg') }} "
                            class="h-12 pr-12 transform hover:scale-125 duration-300 ease-in-out" />
                        <img src="{{ asset('/images/Play Store.svg') }}"
                            class="h-12 transform hover:scale-125 duration-300 ease-in-out" />
                    </div>
                </div>

                <!--Footer-->
                <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
                    <a class="text-gray-500 no-underline hover:no-underline" href="#">@php
                        $DateAndTime = date('m-d-Y h:i:s a', time());
                        echo $DateAndTime;
                        
                    @endphp</a>
                    - Hecho por -
                    <a class="text-gray-500 no-underline hover:no-underline" href="#">Gustavo Culma</a>
                </div>
            </div>
        </div>

    </div>
    @livewireScripts

</body>

</html>
