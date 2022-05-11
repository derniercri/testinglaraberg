<x-guest-layout>
    <x-page-header header="mon compte"></x-page-header>

    <div>
        Name: {{ $user->name }}
    </div>
    <div>
        Email : {{$user->email}}
    </div>
    <div>
        @if($user->avatar)
            <img src="" alt="avatar">
        @else
            no avatar
        @endif
    </div>
@if($posts)
        liste des histoires : {{$posts->count()}} histoires
        <ol>@foreach($posts as $post)
                <li style="list-style-type: num; margin-left: 2rem;">{{$post->title}}</li>
            @endforeach
        </ol>
    @endif
</x-guest-layout>
