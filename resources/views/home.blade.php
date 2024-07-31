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

        <section class="flex p-3 gap-3 bg-white/5 rounded-lg border-b border-r border-primary h-auto">
            <div class="w-40">
                <x-rounded-image/>
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-medium">Elon Musk</span>
                <span class="text-2xs text-gray-400">Four minutes ago</span>
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, autem cum cumque dolore ipsa magni optio sit unde voluptates! Ab adipisci consequuntur debitis doloremque eligendi facilis fugiat ipsam laboriosam libero molestiae nesciunt nostrum, odio perferendis qui ratione, saepe ut.</p>
                <div class="flex items-center justify-between">
                    <x-votes/>
                    <x-action>Comments</x-action>
                    <x-action>Shares</x-action>
                </div>
            </div>
        </section>
    </div>

</x-layout>
