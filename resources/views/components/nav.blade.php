<nav class="w-full flex items-center justify-between h-24 border-b-2 border-primary/10 px-20">
    <section>
        <a href="/">
            <img src="{{Vite::asset('resources/images/logo.png')}}" width="50" alt="logo">
        </a>
    </section>

    <section class="flex items-center font-bold gap-5">
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/">Profile</x-nav-link>
        <x-nav-link href="/">Trending</x-nav-link>
    </section>

    <section class="flex items-center font-bold gap-5">
        <x-nav-link href="/login">Register</x-nav-link>
        <x-nav-link href="/">Login</x-nav-link>
    </section>
</nav>
