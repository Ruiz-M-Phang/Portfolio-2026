<x-layouts.layout>
    <x-slot name="title">
        <section>Portfolio | Over mij</section>
    </x-slot>
    <x-slot name="content"> {{-- I have planned to not use a loop because not every section has the same css. oh, wait ... never mind --}}
        <section class="bg-pink-100">
            @foreach ($sections as $section)
                <div class="flex justify-center py-5 gap-15 mx-100">
                    @if ($loop->last) {{-- Remember: This belongst to the last iteration of the array in the foreach --}}
                        <div>
                            <h2 class="font-bold text-cyan-500">{{ $section["h2"] }}</h2>
                            <p class="py-2 text-cyan-500">
                                {{ $section["text"] }}
                            </p>
                        </div>
                    @elseif ($loop->odd) {{-- Remember: This belongst to an odd iterations of the array in the foreach --}}
                        <div>
                            <h2 class="font-bold text-cyan-500">{{ $section["h2"] }}</h2>
                            <p class="py-2 text-cyan-500">
                                {{ $section["text"] }}
                            </p>
                        </div>
                        <div class="w-[200vw]">
                            <a href="{{ asset($section["image"]) }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset($section["image"]) }}" alt="Almere bovenaf">
                            </a>
                            <figcaption class="italic text-cyan-500">
                                Afbeelding van Almere bovenaf
                                <a class="underline" href="{{ asset($section["image"]) }}" target="_blank" rel="noopener noreferrer">afbeelding</a>
                            </figcaption>
                        </div>
                    @else {{-- Remember: This belongst to an even iterations of the array in the foreach --}}
                        <div class="w-[200vw]">
                            <a href="{{ asset($section["image"]) }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset($section["image"]) }}" alt="VS Code met in beeld OverMijController">
                            </a>
                            <figcaption class="italic text-cyan-500">
                                Afbeelding VS Code met in beeld OverMijController
                                <a class="underline" href="{{ asset($section["image"]) }}" target="_blank" rel="noopener noreferrer">afbeelding</a>
                            </figcaption>
                        </div>
                        <div>
                            <h2 class="font-bold text-cyan-500">{{ $section["h2"] }}</h2>
                            <p class="py-2 text-cyan-500">
                                {{ $section["text"] }}
                            </p>
                        </div>
                    @endif
                </div>
            @endforeach
        </section>
    </x-slot>
</x-layouts.layout>