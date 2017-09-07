<div class="blog-masthead">
    <div class="container nav">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="{{ url('/')  }}">Home</a>



            @if(Auth::check())

            <a class="blog-nav-item active " href="{{ url('home') }}">{{ Auth::user()->name }}</a>
                {{--<a class="blog-nav-item active" href="{{ route('logout') }}">Logout</a>--}}


            @else

                <a class="blog-nav-item active" href="{{ route('login') }}">Sing in</a>
                <a class="blog-nav-item active" href="{{ route('register') }}">Sing up</a>



            @endif
        </nav>
    </div>
</div>
