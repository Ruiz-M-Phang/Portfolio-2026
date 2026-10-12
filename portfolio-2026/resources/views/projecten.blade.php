<x-layouts.layout>
    <x-slot name="title">
        <title>Portfolio | Projecten</title>
    </x-slot>
    <x-slot name="content">
        <section class="flex justify-center bg-pink-100">
            <ul class="m-5 grid grid-cols-3 gap-5">
            @foreach ($projects as $project)
                <li class="border-4 border-black ">
                    <a href="{{ asset($project->image_url) }}" target="_blank" rel="noopener noreferrer">
                        <img class="h-[13vw]" src="{{ asset($project->image_url) }}" alt="{{ $project->image_alt }}">
                    </a>
                    <h2 class="font-bold m-2 text-cyan-500">{{ $project->name }}</h2>
                    <p class="m-2 text-cyan-500">{{ $project->description }}</p> {{-- this is for brief project discription --}}
                    <div class="flex gap-2 m-2">
                        <button class="border-2 rounded-xl border-pink-500 bg-pink-500 text-cyan-100 p-2">
                            <a href="{{ $project->url_link }}" target="_blank" rel="noopener noreferrer">
                                Website link
                            </a>
                        </button>
                        <button class="border-2 rounded-xl border-pink-500 bg-pink-500 text-cyan-100 p-2">
                            <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer">
                                Github link
                            </a>
                        </button>
                    </div>
                    <div class="flex gap-2 m-2">
                        <p class="border-2 rounded-xl border-pink-500 text-cyan-500 p-2">{{ $project->first_tag }}</p>
                        <p class="border-2 rounded-xl border-pink-500 text-cyan-500 p-2">{{ $project->second_tag }}</p>
                    </div>
                </li>
            @endforeach
            </ul>
        </section>
    </x-slot>
</x-layouts.layout>