<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MarketPlace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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

        .categories-bar {
            margin-top: 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding-left: 15px;
        }

        .category-btn {
            padding: 7px 20px;
            border-radius: 25px;
            border: 1.8px solid #ced4da;
            background-color: white;
            font-weight: 600;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            user-select: none;
        }

        .category-btn:hover,
        .category-btn.active {
            background-color: #2a5bd7;
            border-color: #2a5bd7;
            color: white;
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
            .categories-bar {
                justify-content: center;
            }
        }

        .card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            transition: 0.3s;
            position: relative;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(0,0,0,0.25);
        }

        .card-img-top {
            height: 200px;
            width: 100%;
            object-fit: contain;
            background: #f8f8f8;
            padding: 8px;
            border-bottom: 2px solid #2a5bd7;
        }

        .heart-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
            transition: 0.3s;
            z-index: 10;
            text-decoration: none;
        }

        .heart-btn.favorited {
            color: red;
        }

        .card-title {
            font-size: 17px;
            font-weight: 600;
            color: #2a5bd7;
        }

        .card-text {
            font-size: 13px;
            color: #555;
            min-height: 35px;
        }

        .btn-primary {
            background-color: #2a5bd7;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 8px 12px;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #184ac9;
            box-shadow: 0 6px 12px rgba(0,0,0,0.25);
        }

        .pagination .page-link {
            color: #2a5bd7;
            font-weight: 600;
            border-radius: 10px;
            padding: 8px 12px;
        }

        .pagination .page-link:hover {
            background: #184ac9;
            color: #fff;
        }

        .pagination .active .page-link {
            background: #2a5bd7;
            border-color: #2a5bd7;
        }

        h3.section-title {
            color: #2a5bd7;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg d-flex">
    <a class="navbar-brand" href="/PRoduct/index">MarketPlace</a>

    <form class="position-relative ms-4 flex-grow-1" role="search">
        <input type="search" class="form-control search-input" placeholder="Search products..." aria-label="Search" />
        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85zm-5.242 1.398a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"/>
        </svg>
    </form>

    <a href="/introduction" class="nav-icons" title="Home" aria-label="Home">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2a5bd7" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0L1 7.793V14.5A1.5 1.5 0 0 0 2.5 16h4a.5.5 0 0 0 .5-.5v-3.5A.5.5 0 0 1 7.5 12h1a.5.5 0 0 1 .5.5v3.5a.5.5 0 0 0 .5.5h4A1.5 1.5 0 0 0 15 14.5V7.793l-6.646-6.647z"/>
        </svg>
    </a>

    <a href="/favorits" class="nav-icons" title="Favorites" aria-label="Favorites">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2a5bd7" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-1.12 2.174.188 4.992 3.108 6.357L8 15l3.492-5.59c2.92-1.366 4.228-4.183 3.108-6.357C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 1c2.21 0 4 1.79 4 4 0 1.157-.634 2.144-1.574 2.722L8 12 5.574 7.722A3.993 3.993 0 0 1 4 5c0-2.21 1.79-4 4-4z"/>
        </svg>
    </a>

    @guest
        <a href="{{ route('login') }}" class="btn btn-primary ms-3" style="border-radius: 20px; padding: 6px 18px; font-weight: 600;">
            Login
        </a>
    @endguest

    @auth
        <span class="user-email ms-3">{{ Auth::user()->email }}</span>
        <form action="{{ route('logout') }}" method="POST" class="ms-3">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    @endauth
</nav>

<div class="categories-bar container">
    <button class="category-btn active">All</button>
    <button class="category-btn">Electronics</button>
    <button class="category-btn">Furniture</button>
    <button class="category-btn">Accessories</button>
    <button class="category-btn">Home & Kitchen</button>
    <button class="category-btn">Sports</button>

    <select class="form-select ms-auto" style="max-width: 140px; border-radius: 25px; border: 1.8px solid #ced4da;">
        <option selected>Featured</option>
        <option>Newest</option>
        <option>Popular</option>
    </select>
</div>

@if(Auth::check() && $favorits->count() > 0)
    <div class="container mt-4">
        <h3 class="section-title">Your Favorites</h3>
        <div class="row g-3 mb-4">
            @foreach($favorits as $fav)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#" class="heart-btn favorited" data-id="{{ $fav->id }}">&#9825;</a>
                        <img src="{{ asset('uploads/' . $fav->image) }}" class="card-img-top" alt="{{ $fav->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $fav->name }}</h5>
                            <p class="card-text">Short description</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

<div class="container">
    <h3 class="section-title">Products</h3>
    <div class="row g-3">
        @foreach ($products as $p)
        @php
        $img  = "";
        
                        if (!empty($p->image)) {
                            
                                $img = 'http://localhost/tp_company/uploads/'. $p->image;
                        } else {
                            $img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAACUCAMAAADyHdbUAAAAMFBMVEXp7vG6vsHs8fTa3+LEyMvIzdC+wsXU2Nvg5Oe2ur3m6+7BxcjN0tXj6OvY3N/Q1dhM7LVEAAACOUlEQVR4nO3a6XLCIBQFYLiQBQL6/m/bkLhgTMxC7b2Znu9Hx9oyc04WFEUpAAAAAAAAAAAAAAAAAAAAAPhXqAB39qQ1x7WKuwK1VVcXsJG3AUVdxtUtawNfmL/Xecb8dHUl2evhZ8N4CsimGM3he7jpK7iKL/9YoPLHZ9FxPGODwgCnL1A8vlgegJSPcWcYUQViqJ3T1hwdzyILYOphSnUu+O3zoqAC5jm9hyPjmTwCeJu9pJnNp0BMATJZfrc9kpgC6uU9RRfn/redeVZOgbBWgC5zSeUUWDsDlG5y+xZVToGVe4DGScpO7245BWKXnYG3N8j99XM7N7QwnssjwCPiXKLsj5Pli5wCSjXa3S6g6TI3L6dtXBjPIwtApkrvhbrr9J3ES/5JA0kFFPnWmPbtUwYy+lU+F4kqkD7hev+YZ3L8k5oWxjNYDTCTv2+wffy3rQaYy5/NRSIL+Ofvs8c/v5MlFvC2uT9czP9oILFAvzC4jI+oWcx/v4oEFkjP6GFd/OH46/R6R7Pj/9g0gLdjunQOPh1/qQVidY93+Xj9SC3gq2fAUJ+wgP2cWXyBbi207AJ+V355BeKe60dggb35xRXY/V2TtAIBBVAABU5dwAe9c5OEllWgX0fu9jKevQDT+GJn/6J7CGBPvNWAhhVMaI4K7Js9VtaNm3But1G0snDcwDLGV7+wZavj3jTnQ8mmP1vt2JfwrQqxPY758N8cn0VFxAcAAAAAAAAAAAAAAAAAAACAP/MDnvMh4ZvR/VEAAAAASUVORK5CYII=';
                        }
        
         @endphp
            <div class="col-md-4 col-sm-6">
                <div class="card h-100">
                    <a href="#" class="heart-btn {{ $favorits->contains('id', $p->id) ? 'favorited' : '' }}" data-id="{{ $p->id }}">&#9825;</a>
                    <img src="{{ $img}}" class="card-img-top" alt="{{ $p->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text">Short description</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary">Add</a>
                            <a href="/details/{{ $p->id }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.heart-btn').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var productId = btn.data('id');

            $.ajax({
                url: '/favorits/toggle/' + productId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if(response.status === 'added') {
                        btn.addClass('favorited');
                        btn.css('color','red');
                    } else if(response.status === 'removed') {
                        btn.removeClass('favorited');
                        btn.css('color','#ccc');
                    }
                }
            });
        });
    });
</script>

</body>
</html>
