<x-navbar>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Your Payment Cart</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($pay->count() > 0)
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp

                @foreach($pay as $item)
                    @php $total += $item->price; @endphp
                    <tr>
                        <td>
                            <img src="http://localhost/tp_company/uploads/{{ $item->image }}" width="70">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }} MAD</td>
                        <td>
                            <!-- DELETE -->
                            <form action="/cart/remove/{{ $item->id }}" method="POST" onsubmit="return confirm('Remove this product?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h4 class="text-end">Total: {{ $total }} MAD</h4>

        <div class="text-end mt-3">
            <button class="btn btn-success btn-lg">Pay Now</button>
        </div>
    @else
        <div class="alert alert-info">
            Your cart is empty.
        </div>
    @endif
</div>
<br><br><br><br>
</body>
</html>
</x-navbar>