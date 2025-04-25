@props(['job'])
<x-card-container class="flex items-center flex-col ">
    <a href="{{ $job->url }}" class="w-full" target="_blank">
        <div class="self-start font-light text-sm">{{ $job->employer->name }}</div>
        <div class="flex flex-col p-5 text-center items-center my-3">
            <h3 class="font-bold my-3 text-lg group-hover:text-blue-500 transition-all duration-300">
                {{ $job->name }}
            </h3>
            <p class="text-sm"> {{ $job->salary }} </p>
        </div>
    </a>
    <div class="flex gap-2 justify-between items-center w-full">
        <div class="flex gap-1 flex-1 flex-wrap">
            @foreach ($job->tags as $tag)
                <x-tag :small="true">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
        <div class="w-[42px]">
            <img src="{{ asset($job->employer->logo) }}" alt="img" alt="img"
                class="rounded-xl min-w-[42px] min-h-[42px]">
        </div>
    </div>
</x-card-container>
