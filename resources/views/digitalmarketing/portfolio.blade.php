<x-guest-layout>
    <div class="fixed bg-no-repeat bg-auto md:bg-cover" style="background-image: url('{{asset('digitalmarketing.jpg')}}')">
        @include('layouts.nav')
        <div class="relative flex justify-center w-screen h-screen bg-blue-600 bg-opacity-75">
            @include('layouts.digitalmarketing')
            <div class="flex justify-center items-center  mx-32 py-16">
                <ul class="lazy w-full ">
                    <li>
                        <div class=" h-full w-full px-6 rounded-xl">
                            <div class="w-full h-60 rounded-xl bg-white py-6 px-2">
                                <div class="flex justify-center w-48 p-2 px-13 text-lg text-center text-white transform bg-blue-600 bg-opacity-80  hover:scale-105">PLAN DESCRIPTION </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=" h-full w-full px-6 rounded-xl">
                            <div class="w-full h-60 rounded-xl bg-white py-6 px-2">
                                <div class="flex justify-center w-48 p-2 px-13 text-lg text-center text-white transform bg-blue-600 bg-opacity-80  hover:scale-105">PLAN DESCRIPTION </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=" h-full w-full px-6 rounded-xl">
                            <div class="w-full h-60 rounded-xl bg-white py-6 px-2">
                                <div class="flex justify-center w-48 p-2 px-13 text-lg text-center text-white transform bg-blue-600 bg-opacity-80  hover:scale-105">PLAN DESCRIPTION </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</x-guest-layout>