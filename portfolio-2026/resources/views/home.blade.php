<x-layouts.layout> {{-- Still not finished --}}
    <x-slot name="title">
        <title>Portfolio</title>
    </x-slot>
    <x-slot name="content">
        <section class="flex justify-center gap-5 m-10 mt-30 mb-30">
            <img src="" alt="Profiel foto {{ $fullname }}">
            <h1 class="font-bold text-[50px]">{{ $fullname }}</h1>
        </section>
        <section class="flex justify-center mt-1 border-t-4 border-gray-500">
            <ul class="bg-black m-5 p-5 grid grid-cols-3">
                @foreach ($skills_array as $skill)
                    <li class="text-white m-5">{{ $skill }}</li>
                @endforeach
            </ul>
        </section>
        <section class="my-5">
            <h2 class="font-bold text-[25px] mx-10">{{ $title }}</h2>
            <div class="flex justify-center">
                <ul class="mx-5 grid grid-cols-3 gap-5">
                    @for ($i = 0; $i < 2; $i++) {{-- Later this will become a @foreach that will loop data out of an asso. array --}}
                    <li class="border-4 border-black">
                        <img src="" alt="project 1">
                        <div class="m-3">
                            <h2 class="font-bold text-[25px] my-2">project 1</h2>
                            <p>This a HTML CSS project</p>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
        </section>
    </x-slot>
</x-layouts.layout>