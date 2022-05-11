<x-app-layout>
    <div class="post-edit">
        @slot('header')
            Editer le post
        @endslot
        <form class="post-edit__form" method="post" action="{{ route("posts.update", ['post'=>$post]) }}">
            @csrf
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <div class="post__gutenberg">
                <input name="body" id="content" value="{{$post->body}}" hidden>
                <div class="post__details">
                    <div class="post__details__title">
                        <label for="title">{{ __('post.title') }}</label>
                        <input type="text" name="title" value="{{$post->title}}">
                    </div>
                    <div class="post__details__excerpt">
                        <label for="excerpt">{{ __('post.excerpt') }}</label>
                        <input type="text" name="excerpt" value="{{$post->excerpt}}">
                    </div>
                    @if($categories != null && count($categories) > 0)
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
                </div>
                <div class="post-edit__form__submit__container">
                    <input class="post-edit__form__submit" type="submit">
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
