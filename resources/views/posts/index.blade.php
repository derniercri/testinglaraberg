<x-app-layout>
    @slot('header')
        liste des posts
    @endslot
    <div class="posts-index">
    @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }} - {{ $post->user->name }}</h2>
               contenu :  {!! $post->body !!}
                <div>
                   extrait :  {{$post->excerpt}}
                </div>
                <a href="{{route('posts.show', ['post'=>$post])}}">En voir plus </a>
            </div>
    @endforeach
    </div>
</x-app-layout>
