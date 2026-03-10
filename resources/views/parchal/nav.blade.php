<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MarketPlace Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
       .navbar {
    background-color: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    align-items: center;
}

.navbar-brand {
    color: #2a5bd7;
    font-weight: 700;
    font-size: 24px;
    user-select: none;
    text-decoration: none;
}

.form-control.search-input {
    max-width: 350px;
    border-radius: 30px;
    padding-left: 40px;
    border: 1.8px solid #ced4da;
    transition: border-color 0.3s ease;
}

.form-control.search-input::placeholder {
    color: #999;
}

.form-control.search-input:focus {
    border-color: #2a5bd7;
    box-shadow: 0 0 8px #2a5bd7;
    outline: none;
}

.search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    pointer-events: none;
}

.nav-icons {
    font-size: 22px;
    color: #333;
    cursor: pointer;
    user-select: none;
    margin-left: 15px;
    transition: color 0.3s ease;
    text-decoration: none;
}

.nav-icons:hover {
    color: #2a5bd7;
}

.user-email {
    color: #333;
    font-weight: 600;
    margin-left: 20px;
    user-select: none;
}

.btn-logout {
    font-size: 14px;
    padding: 5px 12px;
    border-radius: 12px;
    border: none;
    background-color: #2a5bd7;
    color: #fff;
    transition: 0.3s;
    cursor: pointer;
}

.btn-logout:hover {
    background-color: #184ac9;
}

@media(max-width: 576px) {
    .form-control.search-input {
        max-width: 100%;
        margin-top: 10px;
    }
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg d-flex">
    <a class="navbar-brand" href="/">MarketPlace</a>

    <form action="/PRoduct/index" method="GET" class="position-relative ms-4 flex-grow-1" role="search">
        <input type="search" name="search" class="form-control search-input"
            placeholder="Search products..." value="{{ request('search') }}" />
        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
            fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85zm-5.242 1.398a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" />
        </svg>
    </form>

    <a href="/" class="nav-icons">
    </a>

    <a href="/cart" class="nav-icons">
    </a>

    @guest
        <a href="{{ route('login') }}" class="btn btn-primary ms-3">Login</a>
    @endguest

    @auth
        <span class="user-email ms-3">{{ Auth::user()->username }}</span>
        <form action="{{ route('logout') }}" method="POST" class="ms-3">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    @endauth
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
