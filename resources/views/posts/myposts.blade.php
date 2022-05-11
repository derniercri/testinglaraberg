<x-guest-layout>
    <x-page-header header="mes posts"></x-page-header>

    <div class="myforms">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }} - {{ $post->user->name}}</h2>
                <img src="{{$post?->thumbnail }}" alt="">
                <div>
                    {!! $post->excerpt !!}
                </div>
                <a href="{{route('posts.edit', ['post'=>$post])}}">editer </a>
            </div>
        @endforeach
    </div>
</x-guest-layout>
