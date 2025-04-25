<header>
    <nav class="flex justify-between items-center py-5 border-b border-white/10 flex-wrap">
        <div class="order-[-2] sm:order-1">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
            </a>
        </div>
        <div class="flex-1 mt-2.5 sm:mt-0 sm:order-1">
            <ul class="flex gap-2.5 sm:gap-5 m-2.5 sm:m-5 flex-1 justify-center">
                <li>
                    <x-nav-link class="" href="/">jobs</x-nav-link>
                </li>
                <li>
                    <x-nav-link class=" " href="/">carriers</x-nav-link>
                </li>
                <li>
                    <x-nav-link class=" " href="/">salaries</x-nav-link>
                </li>
                <li>
                    <x-nav-link class=" " href="/">companies</x-nav-link>
                </li>
            </ul>
        </div>
        @auth
            <div class="order-[-1] sm:order-1">
                <x-nav-link href="{{ route('job.create') }}">post a job</x-nav-link>
                <p class="inline-block mx-1 font-bold">or</p>
                <form method="POST" action="{{ route('logout') }}" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="text-white hover:text-blue-500">logout</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="order-[-1] sm:order-1">
                <x-nav-link href="{{ route('login') }}">login</x-nav-link>
                <p class="inline-block mx-1 font-bold">or</p>
                <x-nav-link href="{{ route('register') }}">register</x-nav-link>
            </div>
        @endguest
    </nav>
</header>
