<x-layout>
    <section class="text-center mt-5 mb-11">
        <x-title>Let's find your next job</x-title>
        <div>
            <form action="{{ route('search') }}">
                <input type="text" name="search" id="search" placeholder="I'm looking for..."
                    class="bg-white/10 border-white/25 outline-none rounded-xl px-5 py-4 w-full max-w-xl placeholder:text-white/25">
            </form>
        </div>
    </section>
    <section>
        <x-heading>featured jobs</x-heading>
        <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-6">
            @foreach ($featuredJobs as $job)
                <x-job-card :$job />
            @endforeach
        </section>
        <section>
            <x-heading>tags</x-heading>
            <section class="flex gap-5 flex-wrap my-6">
                @foreach ($tags as $tag)
                    <x-tag>{{ $tag->name }}</x-tag>
                @endforeach
            </section>
        </section>
        <section>
            <x-heading>recent jobs</x-heading>
            <section class="my-6">
                @foreach ($recentJobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </section>
        </section>
    </section>
</x-layout>
