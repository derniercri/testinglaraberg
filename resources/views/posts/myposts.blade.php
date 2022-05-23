<x-guest-layout>
    <x-page-header header="mes posts"></x-page-header>

    <div class="myforms grid-cols-3">

        @foreach($posts as $post)

            {{ $post->getLbRawContentAttribute() }}
            <div class="myforms__post" data-expand-target>
                <p class="myforms__post__published--{{ $post->published ? 'green' : 'red' }}">{{ $post->published
            ? 'Publié' : 'Non
            publié' }}</p>
                <div> Auteur : {{ $post->user->name }}</div>
                <br>
                <div> contenu : {!! ($post->lb_content) !!}</div>
                <br>
                <div> résumé : {!! ($post->excerpt) !!}</div>

                <a href="{{route('posts.show', ['post'=>$post])}}" data-expand-link> </a>
            </div>
        @endforeach
    </div>
</x-guest-layout>
