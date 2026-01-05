<x-navbar>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: #f5f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .product-box {
            max-width: 450px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0, 71, 230, 0.15);
            text-align: center;
            transition: box-shadow 0.3s ease;
        }
        .product-box:hover {
            box-shadow: 0 14px 40px rgba(0, 71, 230, 0.3);
        }

        .product-image {
            width: 100%;
            height: 400px;
            border-radius: 15px;
            object-fit: contain;
            margin-bottom: 20px;
            background: #e9f0ff;
            padding: 15px;
            border: 1px solid #d0d9ff;
        }

        .thumbs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .thumb {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background: #d0d9ff;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .thumb:hover {
            border-color: #0047e6;
            transform: scale(1.1);
        }

        .product-name {
            font-size: 26px;
            font-weight: 700;
            color: #0047e6;
            margin-bottom: 8px;
        }

        .product-price {
            font-size: 22px;
            color: #0b47a1;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .product-category {
            display: inline-block;
            background: #cde1ff;
            color: #0047e6;
            padding: 6px 14px;
            border-radius: 12px;
            font-weight: 600;
            margin-bottom: 20px;
            user-select: none;
        }

        .card-text {
            font-size: 14px;
            color: #444;
            margin-bottom: 25px;
        }

        .buy-btn {
            width: 100%;
            padding: 12px;
            background-color: #0047e6;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-btn:hover {
            background-color: #002e9c;
        }
    </style>
</head>
<body>
    <div class="product-box">
        <img id="mainImage" src="{{ asset('uploads/' . $item->image) }}" alt="{{ $item->name }}" class="product-image" />

        <div class="thumbs">
            <a href="#"><div class="thumb"></div></a>
            <a href="#"><div class="thumb"></div></a>
            <a href="#"><div class="thumb"></div></a>
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
