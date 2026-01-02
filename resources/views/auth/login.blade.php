<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #f1f8e9);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 400px;
            padding: 35px;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0px 8px 25px rgba(0,0,0,0.12);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.96); }
            to { opacity: 1; transform: scale(1); }
        }

        .login-card h3 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
            color: #2c3e50;
        }

        .input-group-text {
            background: #e3f2fd;
            border-right: none;
        }

        .form-control {
            border-left: none;
            border-radius: 0 8px 8px 0;
        }

        .input-group {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #b0bec5;
        }

        .btn-custom {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            background: linear-gradient(45deg, #230000ff, #bc0000ff);
            border: none;
            font-size: 17px;
            font-weight: 600;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(30,136,229,0.4);
        }

        a {
            text-decoration: none;
            color: #1e88e5;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        .links {
            text-align: center;
            margin-top: 18px;
        }
    </style>
</head>
<body>
    

    <div class="login-card">
        <h3>Welcome Back</h3>

        <form action="{{ route('login') }}" method="post">
            @csrf

         
            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <div class="input-group">
                    <span class="input-group-text">📧</span>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text">🔒</span>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>

            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif

            <button type="submit" class="btn-custom">Login</button>
            

            <div class="links">
                <a href="register">Create Account</a> <br>
                <a href="PRoduct/index">Back to Home</a>
            </div>
        </form>
    </div>

</body>
</html>
