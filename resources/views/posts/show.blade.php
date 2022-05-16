<x-guest-layout>
    <x-page-header header="{{ $post->title }}"></x-page-header>
    <div class="container">
        <div>
            <p>{!!  $post->lb_content !!}</p>
        </div>
    </div>
    @if(Auth::user()->id == $post->user_id)
        @livewire('delete-post', ['post' => $post])
    @endauth
</x-guest-layout>
