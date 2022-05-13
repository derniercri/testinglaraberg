<x-guest-layout>
    <div class="post-edit">
{{--        @dd($post);--}}
        @slot('header')
            Editer le post
        @endslot
        <form class="post-edit__form" method="post" action="{{ route("posts.update", compact('post')) }}">
            @method('POST')

            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="post-edit__form__submit__container">
                <input class="post-edit__form__submit" type="submit">
            </div>

            <textarea name="body" id="content" hidden>{{ $post->body }}</textarea>
            <div class="laraberg-sidebar">
                <input id="article-title" type="text" name="title" value="{{ $post->title }}"/>

                <textarea name="excerpt" id="article-excerpt">{{ $post->title }}</textarea>
                <label for="published">Published</label>
                <select id="published" name="published">
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>

                @if($ages != null && count($ages) > 0)
                    <div class="post__details__age">
                        <label for="age-select">age</label>

                        <select name="age" id="age-select">
                            <option value="{{$post->age->id}}">{{$post->age->title}}</option>
                            @foreach($ages as $age)
                                <option value="{{$age->id}}">{{$age->title}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                @if($categories != null && count($categories) > 0)--}}
                <div class="post__details__category">
                    <label for="category-select">category</label>
                    <select name="category" id="category-select">
                        <option value="{{$post->category->id}}">{{$post->category->title}}</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
            </div>
        </form>
    </div>
    </x-guest-layout>
