<x-guest-layout>
    <div class="post-edit">
        <x-page-header header="Créer une nouvelle histoire"></x-page-header>
        <form class="post-edit__form" method="post" action="{{ route("posts.store") }}">
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

            <textarea name="body" id="content" hidden></textarea>
            <div class="laraberg-sidebar">
                <input id="article-title" type="text" name="title" />

                <textarea name="excerpt" id="article-excerpt"></textarea>
                <label for="published">Published</label>
                <select id="published" name="published">
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>

                @if($ages != null && count($ages) > 0)
                    <div class="post__details__age">
                        <label for="age-select">age</label>

                        <select name="age" id="age-select">
                            <option value="!#">{{__("select.option")}}</option>
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
                        <option value="!#">{{__("select.option")}}</option>
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
