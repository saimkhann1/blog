<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Modern Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Enhanced animated background with geometric patterns */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
<<<<<<< HEAD
            background-image: 
=======
            background-image:
>>>>>>> c17c6a8 (create new post tk)
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.15) 3px, transparent 3px),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 40% 60%, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
            background-size: 80px 80px, 120px 120px, 60px 60px;
            animation: backgroundMove 25s ease-in-out infinite;
        }

        @keyframes backgroundMove {
<<<<<<< HEAD
            0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
            33% { transform: translateX(-20px) translateY(-20px) rotate(120deg); }
            66% { transform: translateX(20px) translateY(-10px) rotate(240deg); }
=======

            0%,
            100% {
                transform: translateX(0px) translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateX(-20px) translateY(-20px) rotate(120deg);
            }

            66% {
                transform: translateX(20px) translateY(-10px) rotate(240deg);
            }
>>>>>>> c17c6a8 (create new post tk)
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 450px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 28px;
<<<<<<< HEAD
            box-shadow: 
=======
            box-shadow:
>>>>>>> c17c6a8 (create new post tk)
                0 30px 60px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.7);
            overflow: hidden;
            transform: translateY(30px) scale(0.95);
            opacity: 0;
            animation: slideUpScale 1s ease-out forwards;
        }

        @keyframes slideUpScale {
            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            color: white;
            padding: 2.5rem;
            text-align: center;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: conic-gradient(from 0deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: rotateGradient 4s linear infinite;
        }

        @keyframes rotateGradient {
<<<<<<< HEAD
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
=======
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
>>>>>>> c17c6a8 (create new post tk)
        }

        .card-header h3 {
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0;
            position: relative;
            z-index: 1;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #ffffff, #f0f0f0);
            background-clip: text;
            -webkit-background-clip: text;
        }

        .card-header i {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
<<<<<<< HEAD
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
=======

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-5px);
            }
>>>>>>> c17c6a8 (create new post tk)
        }

        .card-body {
            padding: 3rem 2.5rem;
        }

        .form-group {
            margin-bottom: 1.8rem;
            position: relative;
        }

        .form-label {
            font-weight: 700;
            color: #333;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            position: relative;
        }

        .form-label::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

<<<<<<< HEAD
        .form-control:focus + .form-label::after,
=======
        .form-control:focus+.form-label::after,
>>>>>>> c17c6a8 (create new post tk)
        .form-group:hover .form-label::after {
            width: 30px;
        }

        .input-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            padding: 2px;
        }

        .form-control {
            border: none;
            border-radius: 13px;
            padding: 1rem 3rem 1rem 1.2rem;
            font-size: 1rem;
            background: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            transform: translateY(-3px);
<<<<<<< HEAD
            box-shadow: 
=======
            box-shadow:
>>>>>>> c17c6a8 (create new post tk)
                0 10px 25px rgba(0, 0, 0, 0.1),
                inset 0 0 0 2px rgba(102, 126, 234, 0.3);
        }

        .form-control:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            z-index: 2;
        }

<<<<<<< HEAD
        .form-control:focus ~ .input-icon {
=======
        .form-control:focus~.input-icon {
>>>>>>> c17c6a8 (create new post tk)
            color: #667eea;
            transform: translateY(-50%) scale(1.1);
        }

<<<<<<< HEAD
        .form-control:valid ~ .input-icon {
=======
        .form-control:valid~.input-icon {
>>>>>>> c17c6a8 (create new post tk)
            color: #28a745;
        }

        .btn {
            border-radius: 15px;
            padding: 1rem 2.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 0.95rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }

        .btn-primary:active {
            transform: translateY(-1px) scale(1.01);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
            margin-left: 0.8rem;
        }

        .btn-secondary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 35px rgba(108, 117, 125, 0.6);
            background: linear-gradient(135deg, #5a6268 0%, #3d4148 100%);
        }

<<<<<<< HEAD
=======
        /* Google Login Button Styles */
        .btn-google {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: #333;
            border: 2px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            text-transform: none;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-google:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: #333;
        }

        .btn-google:active {
            transform: translateY(-1px) scale(1.01);
        }

        .google-icon {
            width: 20px;
            height: 20px;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="%23EA4335" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="%2334A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="%23FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="%23EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            flex-shrink: 0;
        }

>>>>>>> c17c6a8 (create new post tk)
        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transition: all 0.5s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

<<<<<<< HEAD
=======
        .divider {
            position: relative;
            text-align: center;
            margin: 2rem 0;
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(108, 117, 125, 0.3), transparent);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 1.5rem;
            position: relative;
            z-index: 1;
        }

>>>>>>> c17c6a8 (create new post tk)
        .error-container {
            margin-top: 2rem;
            animation: slideInRotate 0.6s ease-out;
        }

        @keyframes slideInRotate {
            from {
                transform: translateX(-100%) rotate(-5deg);
                opacity: 0;
            }
<<<<<<< HEAD
=======

>>>>>>> c17c6a8 (create new post tk)
            to {
                transform: translateX(0) rotate(0deg);
                opacity: 1;
            }
        }

        .alert {
            border-radius: 18px;
            border: none;
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
            position: relative;
            overflow: hidden;
        }

        .alert::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: alertShimmer 2s ease-in-out infinite;
        }

        @keyframes alertShimmer {
<<<<<<< HEAD
            0% { left: -100%; }
            100% { left: 100%; }
=======
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
>>>>>>> c17c6a8 (create new post tk)
        }

        .alert ul {
            margin: 0;
            padding-left: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .alert li {
            margin-bottom: 0.3rem;
            position: relative;
        }

        .alert li::before {
            content: '⚠️';
            margin-right: 0.5rem;
        }

        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .floating-shape {
            position: absolute;
            opacity: 0.1;
        }

        .shape-1 {
            top: 15%;
            left: 8%;
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            animation: float1 18s ease-in-out infinite;
        }

        .shape-2 {
            top: 70%;
            right: 12%;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #764ba2, #f093fb);
            border-radius: 50%;
            animation: float2 15s ease-in-out infinite reverse;
        }

        .shape-3 {
            bottom: 25%;
            left: 15%;
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #f093fb, #667eea);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation: float3 20s ease-in-out infinite;
        }

        .shape-4 {
            top: 25%;
            right: 25%;
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #667eea, #f093fb);
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            animation: float4 22s ease-in-out infinite;
        }

        @keyframes float1 {
<<<<<<< HEAD
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(30px, -30px) rotate(90deg); }
            50% { transform: translate(-20px, 20px) rotate(180deg); }
            75% { transform: translate(-40px, -10px) rotate(270deg); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-25px, 25px) rotate(120deg); }
            66% { transform: translate(20px, -15px) rotate(240deg); }
        }

        @keyframes float3 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(15px, -25px) scale(1.2); }
        }

        @keyframes float4 {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            25% { transform: translate(-20px, 20px) rotate(90deg) scale(0.8); }
            50% { transform: translate(25px, -10px) rotate(180deg) scale(1.1); }
            75% { transform: translate(-15px, -20px) rotate(270deg) scale(0.9); }
=======

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(30px, -30px) rotate(90deg);
            }

            50% {
                transform: translate(-20px, 20px) rotate(180deg);
            }

            75% {
                transform: translate(-40px, -10px) rotate(270deg);
            }
        }

        @keyframes float2 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(-25px, 25px) rotate(120deg);
            }

            66% {
                transform: translate(20px, -15px) rotate(240deg);
            }
        }

        @keyframes float3 {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(15px, -25px) scale(1.2);
            }
        }

        @keyframes float4 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg) scale(1);
            }

            25% {
                transform: translate(-20px, 20px) rotate(90deg) scale(0.8);
            }

            50% {
                transform: translate(25px, -10px) rotate(180deg) scale(1.1);
            }

            75% {
                transform: translate(-15px, -20px) rotate(270deg) scale(0.9);
            }
>>>>>>> c17c6a8 (create new post tk)
        }

        .button-group {
            display: flex;
            gap: 0.8rem;
            margin-top: 2.5rem;
            justify-content: center;
        }

        .button-group .btn {
            flex: 1;
        }

        @media (max-width: 768px) {
            .login-container {
                margin: 1rem;
            }
<<<<<<< HEAD
            
            .card-body {
                padding: 2rem 1.5rem;
            }
            
            .button-group {
                flex-direction: column;
            }
            
=======

            .card-body {
                padding: 2rem 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }

>>>>>>> c17c6a8 (create new post tk)
            .btn-secondary {
                margin-left: 0;
                margin-top: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Enhanced floating background elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>

    <div class="login-container">
        <div class="card login-card">
            <div class="card-header">
                <i class="fas fa-user-circle"></i>
                <h3>Welcome Back</h3>
            </div>
            <div class="card-body">
<<<<<<< HEAD
                <form action="{{ route('login.match') }}" method="POST">
=======
                <form action="{{ route('login.match') }}" method="POST" enctype="multipart/form-data">
>>>>>>> c17c6a8 (create new post tk)
                    @csrf
                    <div class="form-group">
                        <label for="useremail" class="form-label">Email Address</label>
                        <div class="input-wrapper">
                            <input type="email" name="email" class="form-control" id="useremail"
                                placeholder="Enter your email address" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="userpassword" class="form-label">Password</label>
                        <div class="input-wrapper">
                            <input type="password" name="password" class="form-control" id="userpassword"
                                placeholder="Enter your password" required>
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                    </div>

<<<<<<< HEAD
=======

>>>>>>> c17c6a8 (create new post tk)
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
<<<<<<< HEAD
                        <a href="/" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back
=======
                        <a href="{{ route('register') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Register
                        </a>
                    </div>
                    <br>
                    <div class="text-end mb-3">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            <i class="fas fa-key me-1"></i> Forgot Your Password?
>>>>>>> c17c6a8 (create new post tk)
                        </a>
                    </div>
                </form>

<<<<<<< HEAD
=======
                <!-- Divider -->
                <div class="divider">
                    <span>Or Continue With</span>
                </div>

                <!-- Google Login Button -->
                <a href="{{ route('google.login') }}" class="btn btn-google">
                    <div class="google-icon"></div>
                    Sign in with Google
                </a>

>>>>>>> c17c6a8 (create new post tk)
                @if ($errors->any())
                    <div class="error-container">
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Please fix the following errors:</strong>
                            <ul class="mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');

            // Enhanced input focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.closest('.input-wrapper').style.transform = 'scale(1.02) translateY(-2px)';
<<<<<<< HEAD
                    this.closest('.form-group').querySelector('.form-label').style.color = '#667eea';
                });
                
=======
                    this.closest('.form-group').querySelector('.form-label').style.color =
                        '#667eea';
                });

>>>>>>> c17c6a8 (create new post tk)
                input.addEventListener('blur', function() {
                    this.closest('.input-wrapper').style.transform = 'scale(1)';
                    this.closest('.form-group').querySelector('.form-label').style.color = '#333';
                });

                // Real-time validation visual feedback
                input.addEventListener('input', function() {
                    if (this.checkValidity() && this.value.length > 0) {
                        this.style.borderColor = '#28a745';
                    } else if (this.value.length > 0) {
                        this.style.borderColor = '#dc3545';
                    }
                });
            });

            // Enhanced button ripple effect
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    let ripple = document.createElement('span');
                    let rect = this.getBoundingClientRect();
                    let size = Math.max(rect.width, rect.height);
                    let x = e.clientX - rect.left - size / 2;
                    let y = e.clientY - rect.top - size / 2;
<<<<<<< HEAD
                    
=======

>>>>>>> c17c6a8 (create new post tk)
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
<<<<<<< HEAD
                    
                    this.appendChild(ripple);
                    
=======

                    this.appendChild(ripple);

>>>>>>> c17c6a8 (create new post tk)
                    setTimeout(() => {
                        ripple.remove();
                    }, 1000);
                });
            });

            // Enhanced pulse effect for login button
            const loginBtn = document.querySelector('.btn-primary');
            setInterval(() => {
                loginBtn.style.boxShadow = '0 0 35px rgba(102, 126, 234, 0.9)';
                setTimeout(() => {
                    loginBtn.style.boxShadow = '0 6px 20px rgba(102, 126, 234, 0.4)';
                }, 1200);
            }, 4500);

<<<<<<< HEAD
=======
            // Google button hover effect
            const googleBtn = document.querySelector('.btn-google');
            googleBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.02)';
            });
            
            googleBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

>>>>>>> c17c6a8 (create new post tk)
            // Add CSS for enhanced ripple effect
            const style = document.createElement('style');
            style.textContent = `
                .ripple {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    pointer-events: none;
                    animation: ripple-animation 1s ease-out;
                }
                
                @keyframes ripple-animation {
                    0% {
                        transform: scale(0);
                        opacity: 1;
                    }
                    100% {
                        transform: scale(1);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>

</html>