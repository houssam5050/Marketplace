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
                @foreach ($item as $i)
        @php
        $img  = "";

                        if (!empty($i->image)) {
                            
                                $img = 'http://localhost/tp_company/uploads/'. $i->image;
                        } else {
                            $img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAACUCAMAAADyHdbUAAAAMFBMVEXp7vG6vsHs8fTa3+LEyMvIzdC+wsXU2Nvg5Oe2ur3m6+7BxcjN0tXj6OvY3N/Q1dhM7LVEAAACOUlEQVR4nO3a6XLCIBQFYLiQBQL6/m/bkLhgTMxC7b2Znu9Hx9oyc04WFEUpAAAAAAAAAAAAAAAAAAAAAPhXqAB39qQ1x7WKuwK1VVcXsJG3AUVdxtUtawNfmL/Xecb8dHUl2evhZ8N4CsimGM3he7jpK7iKL/9YoPLHZ9FxPGODwgCnL1A8vlgegJSPcWcYUQViqJ3T1hwdzyILYOphSnUu+O3zoqAC5jm9hyPjmTwCeJu9pJnNp0BMATJZfrc9kpgC6uU9RRfn/redeVZOgbBWgC5zSeUUWDsDlG5y+xZVToGVe4DGScpO7245BWKXnYG3N8j99XM7N7QwnssjwCPiXKLsj5Pli5wCSjXa3S6g6TI3L6dtXBjPIwtApkrvhbrr9J3ES/5JA0kFFPnWmPbtUwYy+lU+F4kqkD7hev+YZ3L8k5oWxjNYDTCTv2+wffy3rQaYy5/NRSIL+Ofvs8c/v5MlFvC2uT9czP9oILFAvzC4jI+oWcx/v4oEFkjP6GFd/OH46/R6R7Pj/9g0gLdjunQOPh1/qQVidY93+Xj9SC3gq2fAUJ+wgP2cWXyBbi207AJ+V355BeKe60dggb35xRXY/V2TtAIBBVAABU5dwAe9c5OEllWgX0fu9jKevQDT+GJn/6J7CGBPvNWAhhVMaI4K7Js9VtaNm3But1G0snDcwDLGV7+wZavj3jTnQ8mmP1vt2JfwrQqxPY758N8cn0VFxAcAAAAAAAAAAAAAAAAAAACAP/MDnvMh4ZvR/VEAAAAASUVORK5CYII=';
                            
                        }
                        
                        
        @endphp
        @endforeach

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
