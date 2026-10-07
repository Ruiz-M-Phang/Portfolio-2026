<x-layouts.layout>
    <x-slot name="title">
        <title>Portfolio | Contact</title>
    </x-slot>
    <x-slot name="content">
        <section class="p-5 mx-[25vw] border-5 rounded-xl border-pink-500 my-[5vh] hover:shadow-2xl shadow-cyan-500 bg-pink-100"> {{-- -In this class you see the measurement for view point width. This is a begin in working on mobile support --}}
            <div class="mb-5">
                <h2 class="font-bold text-[20px] pb-2 text-cyan-500">{{ $title }}</h2>
                <p class="text-[15px] text-cyan-500">{{ $text }}</p>
            </div>
            <div class="flex justify-start gap-5 my-1">
                @foreach ($hyperlinks as $hyperlink)
                    <button class="border-3 rounded-xl border-pink-500 p-2">
                        <a class="text-cyan-500" href="{{ $hyperlink['link'] }}" target="_blank" rel="noopener noreferrer">{{ $hyperlink['name'] }}</a>
                    </button>
                @endforeach
            </div>
        </section>
        <section class="bg-pink-100"></section> {{-- Here comes contact form. When? IDK --}}
    </x-slot>
</x-layouts.layout>