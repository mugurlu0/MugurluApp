<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MugurluApp') }}
                </a>
            </div>
            <a href="{{ route('index') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Home</a>
            <a href="{{ route('list') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Products</a>
            @if (Auth::user() && Auth::user()->role == 1)
            <a href="{{ route('dashboard') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Admin</a>

            @endif
            @auth
            <a href="{{ route('cart') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Cart</a>

            @endauth
            <a href="{{ route('orders') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Orders</a>
            <a href="{{ route('about') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">About</a>
            <a href="{{ route('contact') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Contact</a>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

            </div>






            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">{{ __('Register') }}</a>

            @endif

            @endguest

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{-- {{ Auth::user()->name }} --}}
            </a>

            @if (Auth::check())
            <a class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page"
                href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            @endif
            <div class="pt-2 relative mx-auto text-gray-600">


                <form action="/search" method="get" role="search">
                    <div class="input-group">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>


        <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->



            </div>
        </div>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    </div>
    </div>
    </div>
</nav>
