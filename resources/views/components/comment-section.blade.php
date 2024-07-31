<section class="flex flex-col bg-secondary h-auto w-[700px] rounded-xl border border-white/5 relative">
    @csrf
    <section class="border-b border-white/5 py-2">
        <span id="hideCommentSection" class="cursor-pointer absolute right-4 top-2 text-white font-bold">
            x
        </span>
        <x-heading>Doe's Post</x-heading>
    </section>
    <div>
        <section class="flex p-3 gap-3 h-auto">
            <div>
                <x-rounded-image/>
            </div>
            <div class="flex-1 flex flex-col">
                <span class="font-bold text-medium">Joh n Doe</span>
                <span class="text-2xs text-gray-400">20 minutes ago</span>
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eaque expedita, facere impedit, laboriosam laudantium natus nesciunt non officia provident quaerat quasi quo reprehenderit rerum sapiente sed ut veniam voluptatibus.</p>
                <div class="flex items-center justify-between">
                    <x-votes/>
                    <x-action uid="test">Comments</x-action>
                    <x-action uid="test">Shares</x-action>
                </div>
            </div>
        </section>
        <x-comment/>
    </div>
</section>
