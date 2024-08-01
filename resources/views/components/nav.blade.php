<nav class="w-full flex items-center justify-between h-24 border-b-2 border-primary/10 px-20">
    <section>
        <a href="/">
            <img src="{{Vite::asset('resources/images/logo.png')}}" width="50" alt="logo">
        </a>
    </section>

    <section class="flex items-center font-bold gap-5">
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/profile">Profile</x-nav-link>
        <x-nav-link href="/">Trending</x-nav-link>
    </section>

    @guest
        <section class="flex items-center font-bold gap-5">
            <x-nav-link href="/register">Register</x-nav-link>
            <x-nav-link href="/login">Login</x-nav-link>
        </section>
    @endguest

    @auth
        <form method="POST" action="/logout" class="flex items-center font-bold gap-5">
            @csrf
            @method('DELETE')
            <button type="submit" class="hover:text-orange-200 transition-colors duration-300">Log out</button>
        </form>
    @endauth
</nav>
