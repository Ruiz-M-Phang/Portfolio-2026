<x-layouts.layout> {{-- Still not finished --}}
    <x-slot name="title">
        <title>Portfolio</title>
    </x-slot>
    <x-slot name="content">
        <section class="flex justify-center mt-[-13px] gap-15 p-10 py-20 bg-linear-to-r from-cyan-900 via-slate-900 to-pink-900">
            <img class="w-3xs rounded-full" src="{{ asset('image/profiel-foto-Ruiz-M-Phang.jpg') }}" alt="Profiel foto {{ $fullname }}">
            <div>
                <h1 class="font-bold text-[50px] text-cyan-100">{{ $fullname }}</h1>
                <p class="font-bold text-cyan-100">Een Laravel developer die streeft naar groei in kennis</p>
                <p class="text-cyan-100">Web, PHP en Laravel developer</p>
                <div class="flex gap-10 mt-5 text-slate-950 font-bold">
                    <button class="border-5 rounded-4xl p-3 border-pink-400 bg-pink-400 hover:shadow-lg hover:shadow-cyan-400">
                        <a href="{{ asset('document/Phang_Ruiz_CV_2026.pdf') }}" target="_blank" rel="noopener noreferrer">Mijn CV</a>
                    </button>
                    <button class="border-5 rounded-4xl p-3 border-pink-400 bg-white hover:shadow-lg hover:shadow-cyan-400">
                        <a href="{{ route('projecten') }}">Mijn projecten</a>
                    </button>
                </div>
            </div>
        </section>
        <section class="flex justify-center pt-1 border-t-4 border-gray-500 bg-pink-100">
            <ul class="bg-pink-100 border-5 border-pink-200 m-5 p-5 grid grid-cols-3 rounded-2xl hover:shadow-lg hover:shadow-cyan-400">
                @foreach ($skills_array as $skill) {{-- Later this will become a @foreach that will loop data out of an asso. array --}}
                    <li class="text-cyan-500 m-5">{{ $skill }}</li>
                @endforeach
            </ul>
        </section>
        <section class="flex justify-center pt-1 border-t-4 border-gray-500 bg-pink-100">
            <div class="flex border-5 border-pink-200 m-[1vw] p-5 rounded-2xl hover:shadow-lg hover:shadow-cyan-400">
                <div class="">
                    <h2 class="font-bold text-[20px] text-cyan-500 m-5">Past wel bij mij</h2>
                    @foreach ($PlusPreferences as $PlusPreference)
                        <ul>
                            <li class="text-cyan-500 m-5">{{ $PlusPreference }}</li>
                        </ul>
                    @endforeach
                </div>
                <div class="">
                    <h2 class="font-bold text-[20px] text-cyan-500 m-5">Past niet bij mij</h2>
                    @foreach ($MinusPreferences as $MinusPreference)
                        <ul>
                            <li class="text-cyan-500 m-5">{{ $MinusPreference }}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-5 pt-1 border-t-4 border-gray-500 bg-pink-100">
            <h2 class="font-bold text-[25px] mx-10 text-cyan-500">{{ $title }}</h2>
            <div class="flex justify-center">
                <ul class="mx-5 grid grid-cols-3 gap-5">
                    @for ($i = 0; $i < 2; $i++) {{-- Later this will become a @foreach that will loop data out of an asso. array --}}
                    <li class="border-5 border-pink-200 rounded-2xl bg-pink-100">
                        <img src="" alt="project 1">
                        <div class="m-3">
                            <h2 class="font-bold text-[25px] my-2 text-cyan-500">project 1</h2>
                            <p class="text-cyan-500">This a HTML CSS project</p>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
        </section>
    </x-slot>
</x-layouts.layout>