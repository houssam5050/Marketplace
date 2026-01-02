<x-navbar >
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>MarketPlace</title>

    <style>
        .card {
            border: none;
            border-radius: 18px;
            background: #ffffff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
            overflow: hidden;
            position: relative;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.25);
        }

        .card-img-top {
            height: 250px;
            width: 100%;
            object-fit: contain;
            background: #f8f8f8;
            padding: 10px;
            border-bottom: 3px solid #8b0000;
        }

        .heart-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            font-size: 28px;
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
            font-size: 19px;
            font-weight: 700;
            color: #4a0000;
        }

        .card-text {
            font-size: 14px;
            color: #555;
            min-height: 40px;
        }

        .btn-primary {
            background-color: #5c0000;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 10px 16px;
            transition: 0.3s;
            width: 100px;
        }

        .btn-primary:hover {
            background-color: #000;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        .pagination .page-link {
            color: #ff8a8a;
            font-weight: 600;
            border-radius: 10px;
            padding: 10px 16px;
        }

        .pagination .page-link:hover {
            background: #5c0000;
            color: #fff;
        }

        .pagination .active .page-link {
            background: #5c0000;
            border-color: #5c0000;
        }
    </style>
</head>

<body>

@if(Auth::check() && $favorits->count() > 0)
    <div class="container mt-4">
        <h3>Your Favorits</h3>
        <div class="row g-4 mb-4">
            @foreach($favorits as $fav)
                <div class="col-md-4">
                    <div class="card h-100">
                        <a href="#" class="heart-btn favorited" data-id="{{ $fav->id }}">&#9825;</a>
                        <img src="{{ asset('uploads/' . $fav->image) }}" class="card-img-top">
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


<div class="container mt-3">
    <h3>Producs</h3>
    <div class="row g-4">
        @foreach ($products as $p)
            <div class="col-md-4">
                <div class="card h-100">
                    <a href="#" class="heart-btn {{ $favorits->contains('id', $p->id) ? 'favorited' : '' }}" data-id="{{ $p->id }}">&#9825;</a>
                    <img src="{{ asset('uploads/' . $p->image) }}" class="card-img-top">
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
                    } else if(response.status === 'removed') {
                        btn.removeClass('favorited');
                    }
                }
            });
        });
    });
</script>

</body>
</html>
</x-navbar>
