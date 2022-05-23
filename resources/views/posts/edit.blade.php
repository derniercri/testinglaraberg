<x-guest-layout>
    <div class="post-edit">
        <x-page-header header="{{ $post->title }}"></x-page-header>
        <form class="post-edit__form" method="post" action="{{ route("posts.update", ['post' => $post]) }}">
            @method('PUT')
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

            <textarea name="body" id="content" hidden>{{$post->lb_raw_content}}</textarea>
            <div class="laraberg-sidebar">
                <input id="article-title" type="text" name="title" placeholder="title" value="{{$post->title}}"/>

                <textarea name="excerpt" id="article-excerpt" placeholder="Excerpt">{{ $post->excerpt }}</textarea>
                <label for="published">Published</label>
                <select name="published" id="article-is-published">

                    <option value="1" {{ $post->published ? '' : 'selected' }}>Publié</option>
                    <option value="0" {{ ($post->published === 0) ? 'selected' : ''}}>Non publié</option>
                </select>


                @if($ages != null && count($ages) > 0)
                    <div class="post__details__age">
                        <label for="age-select">age</label>

                        <select name="age_id" id="age-select">
                            <option value="{{$post->age->id}}">{{$post->age->title}}</option>
                            @foreach($ages as $age)
                                <option value="{{$age->id}}">{{$age->title}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                @if($categories != null && count($categories) > 0)
                    <div class="post__details__category">
                        <label for="category-select">category</label>
                        <select name="category_id" id="category-select">
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
