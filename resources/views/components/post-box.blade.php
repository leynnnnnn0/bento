@php use App\Models\Style; @endphp
@props(['post'])
<section class="flex p-3 gap-3 bg-white/5 rounded-lg border-b border-r border-primary h-auto">
    <div>
        <x-rounded-image/>
    </div>
    <div class="flex-1 flex flex-col">
        <span class="font-bold text-medium">{{ $post->user->username }}</span>
        <span class="text-2xs text-gray-400">{{ Style::postedTime($post->created_at )}} minutes ago</span>
        <p class="my-3">{{ $post->body }}</p>
        <div class="flex items-center justify-between">
            <x-votes/>
            <x-action>Comments</x-action>
            <x-action>Shares</x-action>
        </div>
    </div>
</section>
