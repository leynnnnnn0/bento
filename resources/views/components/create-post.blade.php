<form method="post" action="/post" class="flex flex-col bg-secondary h-96 w-[500px] rounded-xl border border-white/5 relative">
    @csrf
    <section class="border-b border-white/5 py-2">
        <span id="hideCreatePost" class="cursor-pointer absolute right-4 top-2 text-white font-bold">
            x
        </span>
        <x-heading>Create Post</x-heading>
    </section>
    <section class="flex gap-3 items-center p-3">
        <x-rounded-image/>
        <h1 class="flex-1 font-bold text-white text-medium">John Doe</h1>
    </section>
    <div class="p-3 flex-1">
        <textarea name="body" class="text-lg w-full h-full focus:outline-none border border-transparent bg-transparent resize-none" placeholder="What's on your mind?"></textarea>
    </div>
    <div class="w-full h-16 p-3">
        <button type="submit" class="bg-primary w-full h-full text-center font-bold rounded-lg">Post</button>
    </div>
</form>
