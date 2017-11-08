<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        @include('partials.navigation')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                @yield('content')
            </div>
        </div>

            @yield('footer-scripts')
            @include('partials.end')
    </body>
</html>
