@props(['post'])
<div class="w-fit bg-white/10 rounded-full flex items-center space-between px-3 py-1">
    <section class="flex-1 border-r border-gray-500  px-2 flex items-center gap-2">
        <form id="upvoteForm" action="/upvote" method="POST">
            @csrf
            <input type="text" hidden value="{{ $post->id }}" name="post_id">
            <button id="upvoteSubmit" type="submit"
                    class="cursor-pointer {{ Auth::user() && $post->votes->where('user_id', Auth::id())->where('vote', 'upVote')->first() ? 'text-primary' : '' }}">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-caret-up" viewBox="0 0 16 16">
                    <path
                        d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659"/>
                </svg>

            </button>
        </form>
        <span class="text-gray-300 text-xs">{{ $post->votes->where('vote', 'upVote')->count() }}</span>
    </section>
    <section class="flex-1 px-2 flex items-center gap-2">
        <form id="downvoteForm" action="/downvote" method="POST">
            @csrf
            <input type="text" hidden value="{{ $post->id }}" name="post_id">
            <button id="downvoteSubmit" type="submit" class="cursor-pointer
            {{ Auth::user() && $post->votes->where('user_id', Auth::id())->where('vote', 'downVote')->first() ? 'text-primary' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path
                        d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659"/>
                </svg>
            </button>
        </form>
        <span class="text-gray-300 text-xs">{{ $post->votes->where('vote', 'downVote')->count() }}</span>
    </section>
</div>

