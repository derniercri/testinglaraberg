<nav
    class="flex  justify-between fixed top-0 lex-col lg:flex-row flex-wrap lg:items-self-start w-full z-10 top-0 ">
    <div class="w-full flex-grow lg:flex lg:items-self-start lg:flex-1 lg:w-auto hidden lg:block lg:pt-0 order-2"
         id="nav-content-left">
        <ul class="list-reset lg:flex justify-start flex-1 lg:items-self-start">
            <li class="lg:rounded-br-lg bg-red-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48">
                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('dashboard') }}">
                    {{ __('dashboard') }}
                </a>
            </li>
            <li class="lg:rounded-b-lg bg-blue-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48">
                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('posts.index') }}">
                    {{ __('posts.index') }}
                </a>
            </li>
            <li class="lg:rounded-b-lg bg-pink-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48">
                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('categories.index') }}">
                    {{ __('categories.index') }}
                </a>
            </li>
            <li class="relative top-0 lg:rounded-b-lg bg-green-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48">
                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('ages.index') }}">
                    {{ __('ages.index') }}
                </a>
            </li>
        </ul>
    </div>
    <div
        class="bg-black lg:rounded-b-lg  md:flex flex-shrink-0 text-white lg:flex-1 hidden order-1 lg:order-2  lg:p-4 justify-center z10" >
        <a class=" text-green-500 no-underline hover:text-green-300 white hover:no-underline absolute bottom-16 " href="{{route('welcome')}}">
            <span class="text-1xl"><i class="em em-grinning"></i> {{config('app.name')}}</span>
        </a>
    <x-header-logo height="150" width="250" className="rounded"></x-header-logo>
    </div>
    @auth()
        @if(Auth::user()->role === 'admin')
            <div
                class="w-full flex-grow lg:flex lg:items-self-start lg:w-auto hidden lg:block lg:flex-1 lg:pt-0 order-3">
                <ul class="list-reset lg:flex justify-end flex-1 lg:items-self-start">
                    <li class=" bg-red-500 lg:rounded-b-lg flex-1  ease-in-out duration-500 lg:h-11">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap">

                        </a>
                    </li>
                    <li class=" bg-blue-500 lg:rounded-b-lg flex-1  ease-in-out duration-500 lg:h-11">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap">

                        </a>
                    </li>
                    <li class=" bg-pink-500 lg:rounded-b-lg flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48 ">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap"
                           href="{{route('filament.pages.dashboard')}}">
                            {{ __('Super admin space') }}
                        </a>
                    </li>
                    <li class=" bg-green-500 lg:rounded-bl-lg flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48 ">
                        <form class="px-4 py-2 text-white no-underline cursor-pointer" method="post"
                              action="{{ route('logout') }}">
                            @csrf
                            <input class="cursor-pointer" type="submit" value="logout">
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block lg:flex-1 lg:pt-0 order-3"
                 id="nav-content-right">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class=" bg-red-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class=" bg-blue-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                           href="#">link</a>
                    </li>
                    <li class="bg-pink-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                           href="#">link</a>
                    </li>
                    <li class="bg-green-500 flex-1 lg:hover:opacity-80 ease-in-out duration-500">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                           href="#">link</a>
                    </li>
                </ul>
            </div>
        @endif
    @else
        <div class="w-full flex-grow lg:flex lg:items-self-start lg:w-auto hidden lg:block lg:flex-1 lg:pt-0 order-3"
             id="nav-content-right">
            <div
                class="w-full flex-grow lg:flex lg:items-self-start lg:w-auto hidden lg:block lg:flex-1 lg:pt-0 order-3">
                <ul class="list-reset lg:flex justify-end flex-1 lg:items-self-start">
                    <li class=" bg-red-500 lg:rounded-b-lg flex-1  ease-in-out duration-500 lg:h-11">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap">

                        </a>
                    </li>
                    <li class=" bg-blue-500 lg:rounded-b-lg flex-1  ease-in-out duration-500 lg:h-11">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap">

                        </a>
                    </li>
                    <li class=" bg-pink-500 lg:rounded-b-lg flex-1  ease-in-out duration-500 lg:h-11">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap">

                        </a>
                    </li>
                    <li class=" bg-green-500 lg:rounded-bl-lg flex-1 lg:hover:opacity-80 ease-in-out duration-500 lg:h-11 lg:hover:h-48 ">
                        <a class="inline-block py-2 px-4 text-white no-underline whitespace-nowrap"
                           href="{{route('login')}}">
                            {{ __('Login') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endauth
    <div class="flex justify-end lg:hidden order-1 ">
        <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                    Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
</nav>
