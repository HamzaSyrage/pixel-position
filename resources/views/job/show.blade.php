<x-layout>
    <section class="text-center mt-5 mb-11">
        <x-title>Results</x-title>
        <div>
            <form action="{{ route('search') }}">
                <input type="text" name="" id="" placeholder="I'm looking for..."
                    class="bg-white/10 border-white/25 outline-none rounded-xl px-5 py-4 w-full max-w-xl placeholder:text-white/25">
            </form>
        </div>
    </section>

    <section>
        {{-- <x-heading>recent jobs</x-heading> --}}
        <section class="my-6">
            @foreach ($jobs as $job)
                {{-- {{ dd($job) }} --}}
                <x-job-card-wide :$job />
            @endforeach
        </section>
    </section>
    </section>
</x-layout>
