<x-guest-layout>
    <div class="fixed bg-no-repeat bg-auto md:bg-cover" style="background-image: url('{{asset('events.jpg')}}')">
        @include('layouts.nav')
        <div class="relative flex justify-center w-screen h-screen bg-blue-600 bg-opacity-75">
            @include('layouts.events')
            <div class="fixed flex flex-col items-center justify-center w-full h-full px-6 pb-64 text-center">
               <h1 class="text-2xl font-bold text-white lg:text-4xl">Bring your events online.</h1>
                <div class="flex flex-col py-6">
                    <h2 class="font-semibold text-left text-white lg:text-center text-md lg:text-2xl">Webinars, Concerts, Awards Night, and Corporate Events.</h2>
                    <h2 class="font-semibold text-left text-white lg:text-center text-md lg:text-2xl">From conceptualization to implementation.</h2>
                </div>
                <a href="#" class="flex justify-center p-2 px-10 text-lg text-blue-600 transform bg-white border border-gray-400 rounded-full bg-opacity-80 hover:scale-105">INQUIRE NOW</a>         
            </div>
        </div>
    </div>
</x-guest-layout>