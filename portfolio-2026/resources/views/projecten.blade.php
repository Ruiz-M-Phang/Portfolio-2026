<x-layouts.layout>
    <x-slot name="title">
        <title>Portfolio | Projecten</title>
    </x-slot>
    <x-slot name="content">
        <section class="flex justify-center bg-pink-100">
            <ul class="m-5 grid grid-cols-3 gap-5">
            @foreach ($projects as $project)
                <li class="border-4 border-black ">
                    <img class="" src="{{ asset($project->image_url) }}" alt="{{ $project->image_alt }}">
                    <h2 class="font-bold m-2">{{ $project->name }}</h2>
                    <p class="m-2">{{ $project->description }}</p> {{-- this is for brief project discription --}}
                    <div class="flex gap-1 m-2">
                        <p>{{ $project->first_tag }}</p>
                        <p>{{ $project->second_tag }}</p>
                    </div>
                </li>
            @endforeach
            </ul>
        </section>
    </x-slot>
</x-layouts.layout>