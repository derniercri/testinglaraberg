<x-guest-layout>
    <x-page-header header="{{ $post->title }}"></x-page-header>

       {!! $post->lb_content !!}

        <a href="{{route('posts.edit', ['post'=>$post])}}">Editer le post</a>
</x-guest-layout>
