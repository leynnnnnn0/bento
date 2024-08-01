<x-layout>
    <div class="space-y-4">
        <section class="flex items-center w-full h-32 bg-primary rounded-lg p-5 gap-2">
            <img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/100"
                 alt="Profile"
                 class="rounded-full"
            >
            <div>
                <h1 class="text-2xl font-bold">{{ $user->username }}</h1>
                <strong class="text-xs">{{ $user->email }}</strong>
            </div>
        </section>

        @foreach($user->posts as $post)
            <x-post-box :$post/>
        @endforeach
    </div>
</x-layout>
