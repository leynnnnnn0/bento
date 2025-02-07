@php use App\Models\Style; @endphp
@props(['post'])
<div>
    <section class="flex p-3 gap-3 bg-white/5 rounded-r-lg border-b border-r border-primary h-auto">
        <div>
            <x-rounded-image/>
        </div>
        <div class="flex-1 flex flex-col">
            <a href="{{"/profile/" . $post->user->username}}" class="font-bold text-medium">{{ $post->user->username }}</a>
            <span class="text-2xs text-gray-400">{{ Style::postedTime($post->created_at )}} minutes ago</span>
            <p class="my-3">{{ $post->body }}</p>
            <div class="flex items-center justify-between">
                <x-votes :$post />
                <x-action :commentsCount=" count($post->comments) ">Comments</x-action>
                <x-action :commentsCount=" count($post->comments) ">Shares</x-action>
            </div>
        </div>
    </section>
    <x-comment :comments="$post->comments" :postId="$post->id"/>
</div>
