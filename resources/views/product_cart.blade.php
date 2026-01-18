<x-navbar>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Payment Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background: #f8f9fa;
            }

            h3 {
                color: #2a5bd7;
                font-weight: 700;
            }

            .cart-card {
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                background: #fff;
                padding: 15px;
                transition: 0.3s;
            }

            .cart-card:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            .cart-img {
                width: 70px;
                height: 70px;
                object-fit: contain;
                border-radius: 8px;
                background: #f1f1f1;
                padding: 5px;
            }

            .product-name {
                font-weight: 600;
                color: #2a5bd7;
            }

            .price {
                font-weight: 500;
                color: #555;
            }

            .btn-pay {
                background-color: #2a5bd7;
                color: #fff;
                font-weight: 600;
                padding: 10px 25px;
                border-radius: 10px;
                transition: 0.3s;
            }

            .btn-pay:hover {
                background-color: #184ac9;
            }

            .btn-order {
                background-color: #198754;
                color: #fff;
                font-size: 14px;
                padding: 6px 14px;
                border-radius: 8px;
                transition: 0.3s;
            }

            .btn-order:hover {
                background-color: #146c43;
                color: #fff;
            }

            .btn-delete {
                font-size: 14px;
                padding: 6px 14px;
                border-radius: 8px;
            }

            @media (max-width: 576px) {
                .cart-img {
                    width: 60px;
                    height: 60px;
                }

                .btn-pay {
                    width: 100%;
                }

                .action-buttons {
                    width: 100%;
                    justify-content: flex-start;
                }
            }
        </style>
    </head>

    <body>
        <div class="container mt-5 mb-5">
            <h3 class="mb-4">Your Payment Cart</h3>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($pay->count() > 0)
                <div class="row g-3">
                    @php $total = 0; @endphp

                    @foreach($pay as $item)
                        @php $total += $item->price; @endphp

                        <div class="col-12">
                            <div class="cart-card d-flex justify-content-between align-items-center flex-wrap gap-3">

                                <!-- Product Info -->
                                <div class="d-flex align-items-center gap-3">
                                    <img src="http://localhost/tp_company/uploads/{{ $item->image }}" class="cart-img"
                                        alt="{{ $item->name }}">
                                    <div>
                                        <div class="product-name">{{ $item->name }}</div>
                                        <div class="price">{{ $item->price }} MAD</div>
                                    </div>
                                </div>


                                <div class="d-flex gap-2 action-buttons">
                                    <a href="/order/{{ $item->id }}" class="btn btn-order">
                                        Order
                                    </a>

                                    <form action="/cart/remove/{{ $item->id }}" method="POST"
                                        onsubmit="return confirm('Remove this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-delete">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="d-flex justify-content-between align-items-center mt-4 flex-column flex-sm-row gap-3">
                    <h4 class="mb-0">
                        Total: <span class="text-success">{{ $total }} MAD</span>
                    </h4>
                </div>

            @else
                <div class="alert alert-info text-center">
                    Your cart is empty.
                </div>
            @endif
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
</x-navbar>