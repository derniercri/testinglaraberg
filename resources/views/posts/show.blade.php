<x-app-layout>
    @slot('header')
    Un post
    @endslot

       {!! $post->body !!}

        <a href="{{route('posts.edit', ['post'=>$post])}}">Editer le post</a>
</x-app-layout>
