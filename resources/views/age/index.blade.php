<x-guest-layout>
    <x-page-header header="Ages"></x-page-header>

    <div class="container">
        @foreach($ages as $age)
            <div class="main-title">   {{$age->title}} </div>
            <div class="grid-cols-3">
                @foreach($age->posts as $post)
                    <div>
                        <div>{{ $post->title }}</div>
                        <div><img src="{{ $post->thumbnail }}" alt="thumbnail"></div>
                        <div>{{$post->excerpt}}</div>
                        <div>{{$post->user->name}}</div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    {{ $ages->links('components.custom-pagination') }}

</x-guest-layout>
