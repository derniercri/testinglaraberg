<x-guest-layout>
    <x-page-header header="mes posts"></x-page-header>

    <div class="myforms grid-cols-3">
        @foreach($posts as $post)
            <div class="myforms__post" data-expand-target>
                <p class="myforms__post__published myforms__post__published--{{ $post->published ? 'green' : 'red'
                }}">{{
                $post->published ? 'Publié' : 'Non Publié' }}</p>
                <h2 class="myforms__post__title">{{ $post->title }} </h2>
                <img class="myforms__post__img" src="{{$post?->thumbnail }}" alt="">
                <div class="myforms__post__excerpt">
                    {!! $post->excerpt !!}
                </div>
                <a class="myforms__post__link" href="{{route('posts.edit', ['post'=>$post])}}"
                   data-expand-link>editer </a>
            </div>
        @endforeach
    </div>
</x-guest-layout>
