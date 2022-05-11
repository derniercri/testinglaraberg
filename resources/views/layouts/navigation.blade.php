<nav>
    <!-- Primary Navigation Menu -->
    <ul>
        <li>
            <a href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
            </a>
        </li>
        <li>
            <a href="{{ route('posts.index') }}">
                {{ __('Posts') }}
            </a>
        </li>
        <li>
            <a href="{{ route('posts.create') }}">
                {{ __('create a post') }}
            </a>
        </li>
        <li>
            <a href="{{ route('posts.myposts') }}">
                {{ __('my posts') }}
            </a>
        </li>
    </ul>

    <p>
        Welcome {{ Auth::user()->first_name }}
    </p>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
    </form>
</nav>
