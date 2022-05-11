<x-app-layout>
    @slot('header')
        <h1>
            My Posts
        </h1>
    @endslot
    <div class="myforms">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }} - {{ $post->user->name}}</h2>
                <img src="{{$post?->thumbnail ?? 'https://picsum.photos/350/150'}}" alt="">
                <div>
                    {!! $post->excerpt !!}
                </div>
                <a href="{{route('posts.edit', ['post'=>$post])}}">editer </a>
            </div>
        @endforeach
    </div>
</x-app-layout>
