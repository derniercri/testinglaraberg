<x-app-layout>
    <div class="post-create">
        @slot('header')
            Créer un post
        @endslot
        <form class="post-create__form" method="post" action="{{ route("posts.update", ['post' =>$post]) }}">
            @csrf
            <textarea name="body" id="content">{{ $post->body }}</textarea>

            <input class="post-create__form__submit" type="submit">
        </form>
    </div>
</x-app-layout>
