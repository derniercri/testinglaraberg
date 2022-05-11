<nav class="front-nav">
    <ul class="front-nav__ul front-nav__ul--left">
        <li class="front-nav__ul__item">
            <a class="front-nav__ul__item__link" href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
            </a>
        </li>
        <li class="front-nav__ul__item">
            <a class="front-nav__ul__item__link" href="{{ route('posts.index') }}">
                {{ __('Posts') }}
            </a>
        </li>
    </ul>
    @auth()
        <div class="front-nav__avatar">
            <img src="" alt="avatar">
            {{ Auth::user()->name }}
        </div>
    @endauth
    <ul class="front-nav__ul front-nav__ul--right">

        @auth()
            <li class="front-nav__ul__item">
                <a class="front-nav__ul__item__link" href="{{ route('posts.myposts') }}">
                    {{ __('mes posts') }}
                </a>
            </li>
            <li class="front-nav__ul__item">
                <a class="front-nav__ul__item__link" href="{{ route('posts.create') }}">
                    {{ __('post.create') }}
                </a>
            </li>
            <li class="front-nav__ul__item">
                <form class="front-nav__logout-form" method="post" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="logout">
                </form>
            </li>
            @if(Auth::user()->role === 'admin')
                <a href="{{route('filament.pages.dashboard')}}">Super admin space</a>
            @endif
        @else
            <li class="front-nav__ul__item">
                <a class="front-nav__ul__item__link" href="{{ route('login') }}">Login </a>
            </li>
        @endauth
    </ul>
</nav>
