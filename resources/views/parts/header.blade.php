<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #263238 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @foreach (App\Category::all() as $category)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category', ['category' => $category]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">@lang('nav.admin')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            @lang('nav.logout')
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>