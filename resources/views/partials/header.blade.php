{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img class="img-fluid" id="header-main-logo" src="{{asset('images/logo.png')}}" alt="main logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="#">Home</a>
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('guest.index') }}">Guest List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('animal')) active @endif" href="#">Detail</a>
                    <a class="nav-link @if (request()->routeIs('guest.create')) active @endif" href="{{ route('guest.create') }}">New Guest</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}