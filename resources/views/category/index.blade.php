<x-guest-layout>
    <x-page-header header="Categories"></x-page-header>

    <div class="container">
        @foreach($categories as $category)
            <div class="main-title">   {{$category->title}} </div>
            <div class="grid-cols-3">
                @foreach($category->posts as $post)
                    <div>
                        <div>{{ $post->title }}</div>
                        <div><img src="{{ $post->thumbnail }}" alt="thumbnail"></div>
                        <div>{{$post->excerpt}}</div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    {{ $categories->links('components.custom-pagination') }}

</x-guest-layout>
