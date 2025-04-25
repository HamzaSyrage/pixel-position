@props(['job'])
<x-card-container :id="$job->id" class="flex flex-col sm:flex-row items-center gap-5 mb-10">
    <div class="sm:w-[128px]">
        <img src="{{ asset($job->employer->logo) }}" alt="img" class="rounded-xl min-w-[128px] min-h-[128px]">
    </div>
    <a href="{{ $job->url }}" class="w-full" target="_blank">
        <div class="flex items-center sm:items-start flex-col my-3 flex-1">
            <div class="text-white/50 text-sm">{{ $job->employer->name }} </div>
            <h3 class="font-bold mb-3 mt-1 text-lg  group-hover:text-blue-500 transition-all duration-300">
                {{ $job->name }}
            </h3>
            <p class="text-sm text-white/50">{{ $job->salary }} </p>
        </div>
    </a>
    <div class="flex sm:flex-col justify-between items-center self-stretch">
        <div class="flex gap-1 font-bold">
            <p>{{ $job->location }} </p>
            <p> </p>
        </div>
        <div class="flex gap-1">
            @foreach ($job->tags as $tag)
                <x-tag :small="true">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>
</x-card-container>
