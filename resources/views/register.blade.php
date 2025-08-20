<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Modern Register</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 50%, #45b7d1 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background with geometric patterns */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.15) 3px, transparent 3px),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 40% 60%, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
            background-size: 80px 80px, 120px 120px, 60px 60px;
            animation: backgroundMove 25s ease-in-out infinite;
        }

        @keyframes backgroundMove {

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
        }

        .register-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 500px;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 28px;
            box-shadow:
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
            background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 50%, #45b7d1 100%);
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
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
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

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-5px);
            }
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
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
            transition: width 0.3s ease;
        }

        .form-control:focus+.form-label::after,
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
            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.1),
                inset 0 0 0 2px rgba(255, 107, 107, 0.3);
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

        .form-control:focus~.input-icon {
            color: #ff6b6b;
            transform: translateY(-50%) scale(1.1);
        }

        .form-control:valid~.input-icon {
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
            background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
            color: white;
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 35px rgba(255, 107, 107, 0.6);
            background: linear-gradient(135deg, #ff5252 0%, #26a69a 100%);
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

        .error-container {
            margin-top: 2rem;
            animation: slideInRotate 0.6s ease-out;
        }

        @keyframes slideInRotate {
            from {
                transform: translateX(-100%) rotate(-5deg);
                opacity: 0;
            }

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
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
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
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 50%;
            animation: float1 18s ease-in-out infinite;
        }

        .shape-2 {
            top: 70%;
            right: 12%;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #4ecdc4, #45b7d1);
            border-radius: 50%;
            animation: float2 15s ease-in-out infinite reverse;
        }

        .shape-3 {
            bottom: 25%;
            left: 15%;
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #45b7d1, #ff6b6b);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation: float3 20s ease-in-out infinite;
        }

        .shape-4 {
            top: 25%;
            right: 25%;
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #4ecdc4, #ff6b6b);
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            animation: float4 22s ease-in-out infinite;
        }

        @keyframes float1 {

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

        .password-strength {
            margin-top: 0.5rem;
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .register-container {
                margin: 1rem;
            }

            .card-body {
                padding: 2rem 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn-secondary {
                margin-left: 0;
                margin-top: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Floating background elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>

    <div class="register-container">
        <div class="card register-card">
            <div class="card-header">
                <i class="fas fa-user-plus"></i>
                <h3>Create Account</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register.save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username" class="form-label">Full Name</label>
                        <div class="input-wrapper">
                            <input type="text" name="name" class="form-control" id="username"
                                placeholder="Enter your full name" required>
                            <i class="fas fa-user input-icon"></i>
                        </div>
                    </div>

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
                                placeholder="Create a strong password" required>
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bar" id="strengthBar"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="userpassword_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-wrapper">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="userpassword_confirmation" placeholder="Re-enter your password" required>
                            <i class="fas fa-check-circle input-icon"></i>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i>Create Account
<<<<<<< HEAD
                        </button>
                        <a href="/" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back
=======

                        </button>
                        <a href="login" class="btn btn-secondary">
                            <i class="fas fa-sign-in-alt me-2"></i>Login <br> Here
>>>>>>> c17c6a8 (create new post tk)
                        </a>
                    </div>
                </form>

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
            const passwordInput = document.getElementById('userpassword');
            const confirmPasswordInput = document.getElementById('userpassword_confirmation');
            const strengthBar = document.getElementById('strengthBar');

            // Input focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.closest('.input-wrapper').style.transform = 'scale(1.02) translateY(-2px)';
                    this.closest('.form-group').querySelector('.form-label').style.color =
<<<<<<< HEAD
                    '#ff6b6b';
=======
                        '#ff6b6b';
>>>>>>> c17c6a8 (create new post tk)
                });

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

            // Password strength meter
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let color = '#dc3545';

                if (password.length >= 8) strength += 25;
                if (/[a-z]/.test(password)) strength += 25;
                if (/[A-Z]/.test(password)) strength += 25;
                if (/[\d\W]/.test(password)) strength += 25;

                if (strength >= 75) color = '#28a745';
                else if (strength >= 50) color = '#ffc107';
                else if (strength >= 25) color = '#fd7e14';

                strengthBar.style.width = strength + '%';
                strengthBar.style.background = `linear-gradient(90deg, ${color}, ${color}dd)`;
            });

            // Password confirmation validation
            confirmPasswordInput.addEventListener('input', function() {
                const icon = this.nextElementSibling;
                if (this.value === passwordInput.value && this.value.length > 0) {
                    icon.className = 'fas fa-check-circle input-icon';
                    icon.style.color = '#28a745';
                } else if (this.value.length > 0) {
                    icon.className = 'fas fa-times-circle input-icon';
                    icon.style.color = '#dc3545';
                } else {
                    icon.className = 'fas fa-check-circle input-icon';
                    icon.style.color = '#adb5bd';
                }
            });

            // Button ripple effect
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    let ripple = document.createElement('span');
                    let rect = this.getBoundingClientRect();
                    let size = Math.max(rect.width, rect.height);
                    let x = e.clientX - rect.left - size / 2;
                    let y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 1000);
                });
            });

            // Add CSS for ripple effect
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
