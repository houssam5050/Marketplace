<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace</title>

    <style>
        .navbar {
            background: linear-gradient(45deg, #5c0000, #210000);
            padding: 18px 25px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.35);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 700;
            font-size: 28px;
            text-transform: uppercase;
        }

        .nav-link {
            color: #ffecec !important;
            font-weight: 600;
            margin-left: 20px;
            transition: 0.2s;
        }

        .nav-link:hover {
            color: #fff !important;
            text-shadow: 0 0 6px #ffc6c6;
        }

        .search {
            width: 320px;
            padding: 10px 16px;
            border-radius: 25px;
            border: none;
            outline: none;
            background: #fff;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
            margin-left: auto;
        }

        .search:focus {
            box-shadow: 0 0 12px #ff4d4d;
        }

        .user-email {
            color: #fff;
            font-weight: 600;
            margin-left: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <a class="navbar-brand" href="/PRoduct/index">MarketPlace</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="/introduction">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/favorits">Favorites</a></li>

                {{-- Show Login only if NOT logged in --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
            </ul>

            <input type="text" placeholder="Search..." class="search">

            @auth
                <span class="user-email ms-3">
                    {{ Auth::user()->email }}
                </span>

                <form action="{{ route('logout') }}" method="POST" class="ms-3">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-light">
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</nav>

</body>
</html>
