<x-guest-layout>
    <x-page-header header="{{ $post->title }}"></x-page-header>
    <div class="container">
        <div>
            <p>{!!  $post->lb_content !!}</p>
        </div>
    </div>
    @auth()
        @if(Auth::user()->id == $post->user_id)
            @livewire('delete-post', ['post' => $post])
        @endif
    @endauth
</x-guest-layout>
