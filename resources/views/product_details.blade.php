<x-navbar>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <title>Product</title>

    <style>
        .product-box {
            max-width: 500px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .product-image {
            width: 100%;
            height: 500px;
            border-radius: 15px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .thumbs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .thumb {
            width: 70px;
            height: 70px;
            border-radius: 10px;
            background: #ddd;
            cursor: pointer;
            border: 2px solid transparent;
            transition: .3s;
        }

        .thumb:hover {
            border-color: #590000;
            transform: scale(1.05);
        }

        .product-name {
            font-size: 28px;
            font-weight: 700;
            color: #590000;
        }

        .product-price {
            font-size: 24px;
            color: #0c7c0c;
            font-weight: 600;
        }

        .product-category {
            display: inline-block;
            background: #ff9c9c;
            color: #590000;
            padding: 6px 14px;
            border-radius: 10px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .buy-btn {
            width: 100%;
            padding: 12px;
            background: #590000;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
        }

        .buy-btn:hover {
            background: #7d0000;
        }
    </style>
</head>

<body>

    <div class="product-box">

        <img id="mainImage" src="{{ asset('uploads/' . $item->image) }}" class="product-image">

        <div class="thumbs">
            <a href="#">
                <div class="thumb"></div>
            </a>
            <a href="#">
                <div class="thumb"></div>
            </a>
            <a href="#">
                <div class="thumb"></div>
            </a>
        </div>

        <div class="product-name">{{ $item->name }}</div>
        <div class="product-price">{{ $item->price }} MAD</div>
        <div class="product-category">{{ $item->category }} category</div>

        <p class="card-text">Some quick example text to build on the card title.</p>

        <button class="buy-btn">Buy</button>

    </div>

</body>
</html>
</x-navbar>
