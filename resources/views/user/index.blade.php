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

    <div>
        <a href="{{route('user.myaccount-edit')}}">editer mon compte</a>
    </div>

@if($posts)
        liste de mes histoires ({{$posts->count()}} histoires) :
        <ol>@foreach($posts as $post)
                <li style="list-style-type: num; margin-left: 2rem;"><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></li>

            @endforeach
        </ol>
    @endif
</x-guest-layout>
