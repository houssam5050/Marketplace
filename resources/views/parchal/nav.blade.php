<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MarketPlace Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        /* Navbar Styles */
        .navbar {
            background: #ffffff; /* خلفية بيضاء */
            padding: 15px 25px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            color: #0d6efd !important; /* أزرق Bootstrap الأساسي */
            font-weight: 700;
            font-size: 28px;
            letter-spacing: 1px;
            user-select: none;
        }

        .nav-link {
            color: #0d6efd !important;
            font-weight: 600;
            margin-left: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .nav-link:hover, .nav-link.active {
            color: #084298 !important; /* أزرق أغمق للـ hover */
            text-decoration: underline;
        }

        .search {
            width: 280px;
            padding: 8px 16px;
            border-radius: 25px;
            border: 1px solid #0d6efd;
            outline: none;
            background: #fff;
            box-shadow: none;
            transition: 0.3s;
            margin-left: auto;
            color: #084298;
        }

        .search::placeholder {
            color: #6c757d; /* لون placeholder رمادي فاتح */
        }

        .search:focus {
            box-shadow: 0 0 8px #0d6efd;
            border-color: #0d6efd;
            background: #e7f1ff;
            color: #084298;
        }

        .user-email {
            color: #0d6efd;
            font-weight: 600;
            margin-left: 20px;
            user-select: none;
        }

        .btn-logout {
            font-size: 14px;
            padding: 5px 14px;
            border-radius: 12px;
            border: 1px solid #0d6efd;
            background-color: #ffffff;
            color: #0d6efd;
            transition: 0.3s;
            cursor: pointer;
            margin-left: 15px;
        }

        .btn-logout:hover {
            background-color: #0d6efd;
            color: #ffffff;
        }

        /* لضبط زر toggler في الوضع الصغير */
        .navbar-toggler {
            border-color: #0d6efd;
        }

        .navbar-toggler-icon {
            filter: invert(32%) sepia(84%) saturate(4631%) hue-rotate(196deg) brightness(95%) contrast(101%);
            /* لتلوين الأيقونة أزرق */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <a class="navbar-brand" href="/PRoduct/index">MarketPlace</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="/introduction">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/favorits">Favorites</a></li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
            </ul>

            <input type="text" placeholder="Search products..." class="search" />

            @auth
                <span class="user-email ms-3">{{ Auth::user()->email }}</span>

                <form action="{{ route('logout') }}" method="POST" class="d-flex align-items-center ms-3">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            @endauth

        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
