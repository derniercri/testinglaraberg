<x-app-layout>
    <div class="post-create">
        @slot('header')
            Créer un post
        @endslot
        <form class="post-create__form" method="post" action="{{ route("posts.store") }}">
            @csrf
            <div class="post__gutenberg">
                <input name="body" id="content" hidden>


                <div class="post__details">
                    <div class="post__details__title">
                        <label for="title">{{ __('post.title') }}</label>
                        <input type="text" name="title">
                    </div>
                    <div class="post__details__excerpt">
                        <label for="excerpt">{{ __('post.excerpt') }}</label>
                        <input type="text" name="excerpt">
                    </div>
                    @if($categories != null && count($categories) > 0)
                        <div class="post__details__category">
                            <label for="category-select">category</label>
                            <select name="category" id="category-select">
                                <option value="">--Please choose an option--</option>
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
                                <option value="">--Please choose an option--</option>
                                @foreach($ages as $age)
                                    <option value="{{$age->id}}">{{$age->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="post-create__form__submit__container">
                    <input class="post-create__form__submit" type="submit">
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
