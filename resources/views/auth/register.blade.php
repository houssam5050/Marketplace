<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
     
        body {
            background: linear-gradient(135deg, #fafafa, #ffecec);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-card {
            width: 420px;
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(92, 0, 0, 0.2);
            border-top: 6px solid #5c0000;
            text-align: center;
            animation: slideFade 0.6s ease-in-out;
        }

        @keyframes slideFade {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        
        .register-card h3 {
            color: #4a0000;
            font-weight: 700;
            margin-bottom: 30px;
        }

        
        .form-label {
            font-weight: 600;
            color: #4a0000;
        }

      
        .form-control {
            border-radius: 10px;
            border: 1px solid #cf9b9b;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #5c0000;
            box-shadow: 0 0 8px rgba(92, 0, 0, 0.4);
        }

        .btn-custom {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            background: linear-gradient(45deg, #5c0000, #210000);
            color: white;
            font-weight: 600;
            font-size: 16px;
            border: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0px 6px 15px rgba(92, 0, 0, 0.4);
        }

        .text-center a {
            display: inline-block;
            margin-top: 10px;
            color: #5c0000;
            font-weight: 600;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        @media(max-width: 500px) {
            .register-card {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="register-card">
        <h3>Create Account</h3>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="mb-3 text-start">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
            </div>

            <div class="mb-3 text-start">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-custom">Register</button>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Already have an account?</a> <br>
                <a href="/PRoduct/index">Back to Home</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>