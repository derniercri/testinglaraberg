<x-app-layout>
    @slot('header')
        liste des posts
    @endslot
    <div class="posts-index">
    @foreach($posts as $post)
            <div class="post">
                {!! $post->body !!}
                <a href="{{route('posts.show', ['post'=>$post])}}">En voir plus </a>
            </div>
    @endforeach
    </div>
</x-app-layout>
