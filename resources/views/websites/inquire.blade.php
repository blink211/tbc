<x-guest-layout>
    <div class="fixed bg-no-repeat bg-auto md:bg-cover" style="background-image: url('{{asset('websites.png')}}')">
        @include('layouts.nav')
        <div class="relative flex justify-center w-screen h-screen bg-blue-600 bg-opacity-75">
            @include('layouts.website')
            
        </div>
    </div>
</x-guest-layout>