<x-head/>
    @auth
        <div id="createPost" class="hidden flex items-center justify-center fixed t-0 h-full w-full bg-primary bg-opacity-10">
            <x-create-post/>
        </div>
    @endauth
{{--    <div id="commentSection" class="hidden flex items-center justify-center fixed t-0 h-full w-full bg-primary bg-opacity-10">--}}
{{--        <x-comment-section/>--}}
{{--    </div>--}}
    <x-nav/>
    <main class="max-w-[800px] mx-auto mt-10">
        {{ $slot }}
    </main>
<x-footer/>
