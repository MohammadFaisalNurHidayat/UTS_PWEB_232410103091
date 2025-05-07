@php
    $username = request()->query('username');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/dashboard?username={{ $username }}">ExploreX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard?username={{ $username }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile?username={{ $username }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pengelolaan?username={{ $username }}">Destinasi</a>
                </li>
                <li class="nav-item">
                    @if(request()->query('username'))
                        <a class="nav-link text-danger" href="/">Logout</a>
                    @else
                        <a class="nav-link text-light" href="/login">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
