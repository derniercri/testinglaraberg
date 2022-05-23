<x-guest-layout>
    <x-page-header header="Liste des posts" ></x-page-header>
    <div class="posts-index">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }} - {{ $post->user->name}}</h2>
                <img width="150" src="{{$post?->thumbnail }}" alt="">
                <div>
                    {!! $post->excerpt !!}
                </div>
                <div class="post__cta">
                    <a href="{{route('posts.show', ['post'=>$post])}}">En voir plus </a>
                    @auth
                        @if(Auth::user()->id == $post->user_id)
                            <a href="{{route('posts.edit', ['post'=>$post])}}">editer </a>
                        @endif
                    @endauth
                </div>


            </div>
        @endforeach

    </div>
{{--    {{ $posts->links('components.custom-pagination') }}--}}
</x-guest-layout>
