
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Marketplace</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2a5bd7;
            --secondary-color: #184ac9;
            --accent-color: #ffb400;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #6c757d;
            --card-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            --hover-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--dark-text);
            background-color: #ffffff;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        /* Hero Section with Carousel */
        .hero-section {
            position: relative;
            overflow: hidden;
            margin-bottom: 60px;
        }
        
        .carousel-item {
            height: 70vh;
            min-height: 500px;
        }
        
        .carousel-item img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }
        
        .carousel-caption {
            bottom: 35%;
            text-align: left;
            max-width: 600px;
            margin-left: 5%;
            animation: slideUp 1s ease-out;
        }
        
        .carousel-caption h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            color: white;
        }
        
        .carousel-caption p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }
        
        .hero-btn {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 14px 32px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 180, 0, 0.3);
        }
        
        .hero-btn:hover {
            background-color: #e6a200;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(255, 180, 0, 0.4);
        }
        
        /* Features Section */
        .features-section {
            padding: 80px 0;
            background-color: var(--light-bg);
            position: relative;
        }
        
        .features-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            color: var(--dark-text);
            display: inline-block;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }
        
        .section-title p {
            font-size: 1.2rem;
            color: var(--light-text);
            max-width: 700px;
            margin: 15px auto 0;
        }
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 40px 25px;
            text-align: center;
            height: 100%;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--hover-shadow);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 32px;
        }
        
        .feature-card h4 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-text);
        }
        
        .feature-card p {
            color: var(--light-text);
            font-size: 1rem;
        }
        
        /* Products Section */
        .products-section {
            padding: 80px 0;
        }
        
        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .products-header h3 {
            font-size: 2.2rem;
            color: var(--dark-text);
        }
        
        .view-all-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 28px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .view-all-btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .view-all-btn:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(42, 91, 215, 0.3);
        }
        
        .view-all-btn:hover i {
            transform: translateX(5px);
        }
        
        /* Product Cards */
        .product-card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            position: relative;
            height: 100%;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--hover-shadow);
        }
        
        .product-image {
            height: 220px;
            width: 100%;
            object-fit: contain;
            background: #f8f8f8;
            padding: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .product-card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        
        .product-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 55px;
        }
        
        .product-description {
            font-size: 0.95rem;
            color: var(--light-text);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }
        
        .product-actions {
            display: flex;
            gap: 10px;
            margin-top: auto;
        }
        
        .btn-view {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            flex: 1;
        }
        
        .btn-view:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            flex: 1;
        }
        
        .btn-add:hover {
            background-color: #218838;
            color: white;
            transform: translateY(-2px);
        }
        
        /* Stats Section */
        .stats-section {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            margin-top: 40px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent-color);
        }
        
        .stat-label {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background-color: var(--light-bg);
            text-align: center;
        }
        
        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark-text);
        }
        
        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: var(--light-text);
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .btn-cta-primary {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 16px 36px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-cta-primary:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 91, 215, 0.3);
        }
        
        .btn-cta-secondary {
            background-color: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 16px 36px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-cta-secondary:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .carousel-caption h1 {
                font-size: 2.5rem;
            }
            
            .carousel-caption p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .products-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-cta-primary, .btn-cta-secondary {
                width: 100%;
                max-width: 300px;
            }
        }
        
        @media (max-width: 576px) {
            .carousel-caption h1 {
                font-size: 2rem;
            }
            
            .carousel-caption {
                bottom: 25%;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar Component -->
    <x-navbar>
    
    <!-- Hero Section with Carousel -->
    <section class="hero-section">
        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         class="d-block w-100" alt="Marketplace Hero">
                    <div class="carousel-caption">
                        <h1>Welcome to Marketplace</h1>
                        <p>Your trusted online marketplace for quality products. Discover amazing deals from verified sellers worldwide.</p>
                        <a href="#products" class="hero-btn">Explore Products</a>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         class="d-block w-100" alt="Best Deals">
                    <div class="carousel-caption">
                        <h1>Best Deals & Discounts</h1>
                        <p>Save more with our exclusive daily offers and seasonal discounts. Quality products at unbeatable prices.</p>
                        <a href="#products" class="hero-btn">View Deals</a>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         class="d-block w-100" alt="Sell Products">
                    <div class="carousel-caption">
                        <h1>Sell Your Products</h1>
                        <p>Join thousands of successful sellers worldwide. Reach millions of customers with our easy-to-use platform.</p>
                        <a href="{{ route('register') }}" class="hero-btn">Start Selling</a>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    
    <section class="features-section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>Why Choose Marketplace?</h2>
                <p>A secure, reliable, and user-friendly platform designed for both buyers and sellers</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Secure Payments</h4>
                        <p>All transactions are protected with industry-leading encryption and secure payment gateways.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4>Fast Delivery</h4>
                        <p>Reliable shipping partners ensure your orders reach you quickly and in perfect condition.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Our customer support team is available round the clock to assist you with any queries.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Quality Assured</h4>
                        <p>All products go through a verification process to ensure they meet our quality standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container mt-5 mb-5">
        <div class="text-center animate-on-scroll">
            <a href="/PRoduct/index" class="btn view-all-btn" style="padding: 16px 40px; font-size: 1.2rem;">
                <i class="fas fa-box-open me-2"></i> Browse All Products
            </a>
            <p class="mt-3 text-muted">Discover our complete catalog with thousands of amazing products</p>
        </div>
    </div>
    
    <section id="products" class="products-section">
        <div class="container">
            <div class="products-header">
                <h3>Featured Products</h3>
                <a href="/PRoduct/index" class="view-all-btn">
                    View All Products <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="row g-4">
                
                @foreach ($products->take(12) as $p)
                    @php
                        $img = "";
                        if (!empty($p->image)) {
                            $img = 'http://localhost/tp_company/uploads/{{ $p->image }}' . $p->image;
                        } else {
                            // Fallback image if no product image exists
                            $img = 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80';
                        }
                    @endphp
                    
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card animate-on-scroll">
                            <img src="{{ $img }}" class="product-image" alt="{{ $p->name }}">
                            <div class="product-card-body">
                                <h5 class="product-title">{{ $p->name }}</h5>
                                <p class="product-description">
                                    {{ Str::limit('High-quality product with excellent features and reliable performance. Perfect for everyday use.', 100) }}
                                </p>
                                <div class="product-actions">
                                    <a href="/details/{{ $p->id }}" class="btn-view">View</a>
                                    <form action="/cart/add/{{ $p->id }}" method="POST" class="d-inline w-100">
                                        @csrf
                                        <button type="submit" class="btn-add">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            
            @if($products->count() == 0)
                <div class="text-center py-5">
                    <div class="display-1 text-muted mb-4">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3>No Products Available</h3>
                    <p class="text-muted mb-4">Check back soon for amazing products!</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Become a Seller</a>
                </div>
            @endif
        </div>
    </section>
    
    
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-number">5K+</div>
                        <div class="stat-label">Verified Sellers</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Products Listed</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Customer Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll">
                <h2>Ready to Get Started?</h2>
                <p>Join thousands of satisfied customers and sellers on our platform. Whether you're looking to buy quality products or sell to a global audience, we've got you covered.</p>
                
                <div class="cta-buttons">
                    <a href="/PRoduct/index" class="btn-cta-primary">
                        <i class="fas fa-shopping-cart me-2"></i> Start Shopping
                    </a>
                    
                    @auth
                        <a href="#" class="btn-cta-secondary">
                            <i class="fas fa-tachometer-alt me-2"></i>Comming Soon
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn-cta-secondary">
                            <i class="fas fa-user-plus me-2"></i> Create Account
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
    
   
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            animatedElements.forEach(el => {
                observer.observe(el);
            });
            
            const carousel = document.getElementById('mainCarousel');
            if (carousel) {
                const carouselInstance = new bootstrap.Carousel(carousel, {
                    interval: 5000,
                    wrap: true
                });
            }
        });
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
</x-navbar>