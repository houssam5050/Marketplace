<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Marketplace Intro</title>

  <style>
   
    .carousel-item {
      height: 60vh;
    }

    .carousel-item img {
      height: 100%;
      object-fit: cover;
      filter: brightness(70%);
    }

 
    .carousel-caption {
      bottom: 35%;
    }

   
    .product-card {
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-8px);
    }
  </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/PRoduct/index">Marketplace</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="https://litcommerce.com/blog/wp-content/uploads/2023/08/thumb-best-marketplaces-to-sell-on-.webp" class="d-block w-100">
      <div class="carousel-caption">
        <h1 class="fw-bold">Welcome to Marketplace</h1>
        <p>Your trusted online marketplace</p>
        <a href="#" class="btn btn-warning">Shop Now</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://nintendoeverything.com/wp-content/uploads/sites/1/nggallery/gamestop-black-friday-2020/GS_BlackFriday_2020-page-012.jpg" class="d-block w-100">
      <div class="carousel-caption">
        <h1>Best Deals</h1>
        <p>Save more with daily offers</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://cdn.wedevs.com/uploads/2016/11/Best-ways-to-sell-downloadable-products-on-a-marketplace.png" class="d-block w-100">
      <div class="carousel-caption">
        <h1>Sell Anything</h1>
        <p>Join thousands of sellers worldwide</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold">Why Choose Marketplace?</h2>
    <p class="text-muted">A simple and secure marketplace for everyone</p>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h3 class="fw-bold text-center mb-4">Featured Products</h3>
<!-- ================== card -->
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card product-card shadow-sm">
          <div class="card-body text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ5_vcV_suwoW4BnLV62MWpRpsUzD2GZKk4Q&s"
            class="image">
            <h5 class="card-title">XBOX series X</h5>
            <p class="text-muted"> A short description that makes the product look appealing.</p>
            <button class="btn btn-outline-primary">View</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card product-card shadow-sm">
          <div class="card-body text-center">
            <img src="data:image/jpeg;base64,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"
            class="image">
            <h5 class="card-title">Iphone 13</h5>
            <p class="text-muted"> A short description that makes the product look appealing.</p>
            <button class="btn btn-outline-primary">View</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card product-card shadow-sm">
          <div class="card-body text-center">
            <img src="data:image/jpeg;base64,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"
            class="image">
            <h5 class="card-title">Airpods Gaming</h5>
            <p class="text-muted"> A short description that makes the product look appealing.</p>
            <button class="btn btn-outline-primary">View</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card product-card shadow-sm">
          <div class="card-body text-center">
            <img src="data:image/jpeg;base64,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"
            class="image">
            <h5 class="card-title">PS5</h5>
            <p class="text-muted"> A short description that makes the product look appealing.</p>
            <button class="btn btn-outline-primary">View</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
