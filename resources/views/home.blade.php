<x-layout>
    <div class="space-y-4">
        <section class="flex items-center p-3 w-full bg-white/5 rounded-lg gap-3 border-r border-b border-primary">
            <div>
                <x-rounded-image/>
            </div>
            <input type="text"
                   class="bg-white/10 rounded-md w-full h-10 px-5"
                   placeholder="What's new?">
        </section>

        @foreach($posts as $post)
            <x-post-box :$post/>
        @endforeach

    </div>

</x-layout>
