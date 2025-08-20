<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password - Recovery Made Simple</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 18s infinite linear;
        }

        .floating-element:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 10%;
            animation-delay: -6s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            left: 15%;
            animation-delay: -12s;
        }

        .floating-element:nth-child(4) {
            width: 40px;
            height: 40px;
            top: 80%;
            right: 30%;
            animation-delay: -4s;
        }

        .floating-element:nth-child(5) {
            width: 70px;
            height: 70px;
            top: 20%;
            right: 40%;
            animation-delay: -9s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0.6;
            }

            25% {
                transform: translateY(-50px) rotate(90deg) scale(1.1);
                opacity: 0.9;
            }

            50% {
                transform: translateY(0) rotate(180deg) scale(0.9);
                opacity: 0.7;
            }

            75% {
                transform: translateY(-25px) rotate(270deg) scale(1.05);
                opacity: 0.8;
            }
        }

        .container {
            max-width: 450px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .forgot-password-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 28px;
            padding: 50px 45px;
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            animation: slideIn 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
            text-align: center;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(80px) scale(0.9);
                filter: blur(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0px);
            }
        }

        .forgot-password-card:hover {
            transform: translateY(-15px);
            box-shadow:
                0 40px 80px -12px rgba(0, 0, 0, 0.35),
                0 0 0 1px rgba(255, 255, 255, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
        }

        .recovery-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 35px;
            position: relative;
            animation: recoveryPulse 4s infinite;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .recovery-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), transparent);
            animation: shimmer 3s infinite;
        }

        .recovery-icon::after {
            content: '🔑';
            font-size: 36px;
            z-index: 2;
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes recoveryPulse {

            0%,
            100% {
                box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3), 0 0 0 0 rgba(102, 126, 234, 0.4);
                transform: scale(1);
            }

            50% {
                box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4), 0 0 0 25px rgba(102, 126, 234, 0);
                transform: scale(1.05);
            }
        }

        @keyframes shimmer {

            0%,
            100% {
                transform: translateX(-50%) rotate(0deg);
                opacity: 0;
            }

            50% {
                transform: translateX(50%) rotate(180deg);
                opacity: 1;
            }
        }

        @keyframes iconFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        h2 {
            font-size: 2.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
            position: relative;
        }

        .subtitle {
            color: #64748b;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 40px;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
            text-align: left;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #4a5568;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .input-container {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 18px 24px;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow:
                0 0 0 4px rgba(102, 126, 234, 0.1),
                0 10px 25px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 1);
            transform: translateY(-3px);
        }

        .form-control:hover:not(:focus) {
            border-color: #cbd5e0;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.4s ease;
            border-radius: 1.5px;
        }

        .input-wrapper:focus-within::after {
            width: 100%;
        }

        .email-validation {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.3rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .email-validation.show {
            opacity: 1;
        }

        .email-validation.valid {
            color: #10b981;
        }

        .email-validation.invalid {
            color: #ef4444;
        }

        .btn {
            width: 100%;
            padding: 18px 36px;
            border: none;
            border-radius: 16px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            margin-top: 25px;
            animation: fadeInUp 0.8s ease-out 0.5s both;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }

        .btn-primary:active {
            transform: translateY(-2px);
        }

        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none !important;
        }

        .loading-spinner {
            display: none;
            width: 22px;
            height: 22px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .btn.loading .loading-spinner {
            display: inline-block;
        }

        .btn.loading .btn-text {
            opacity: 0.8;
        }

        .recovery-info {
            margin-top: 35px;
            padding: 25px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(240, 147, 251, 0.05));
            border-radius: 16px;
            border: 1px solid rgba(102, 126, 234, 0.1);
            text-align: left;
            animation: fadeInUp 0.8s ease-out 0.6s both;
            backdrop-filter: blur(10px);
        }

        .recovery-info h4 {
            color: #4a5568;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .recovery-info p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 8px;
        }

        .recovery-steps {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .recovery-steps li {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 8px;
            padding: 5px 0;
        }

        .step-number {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .success-message {
            display: none;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
            text-align: center;
            animation: slideInSuccess 0.5s ease-out;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        @keyframes slideInSuccess {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .back-to-login {
            margin-top: 25px;
            animation: fadeInUp 0.8s ease-out 0.7s both;
        }

        .back-to-login a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .back-to-login a:hover {
            color: #5a67d8;
            transform: translateX(-3px);
        }

        @media (max-width: 768px) {
            .forgot-password-card {
                padding: 40px 35px;
                margin: 20px;
                border-radius: 24px;
            }

            h2 {
                font-size: 2.1rem;
            }

            .subtitle {
                font-size: 1rem;
            }

            .recovery-icon {
                width: 80px;
                height: 80px;
            }

            .recovery-icon::after {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <div class="container">
        <div class="forgot-password-card">
            <div class="recovery-icon"></div>

            <h2>Forgot Password</h2>
            <p class="subtitle">
                @php
                echo isset($email) ? $email : 'NOOOOO';
                echo isset($status) ? $status : 'NOOOOO';
                $hello = isset($errors)? $errors : 'NOOOOO';
                print_r($hello);
                @endphp
                No worries! Enter your email address and we'll send you a link to reset your password.
            </p>

            <form action="{{ route('password.email') }}" method="POST" id="forgotForm">
                <!-- @csrf -->

                <div class="form-group">
                    <label for="email">📧 Email Address</label>
                    <div class="input-wrapper">
                        <div class="input-container">
                            <input type="email" name="email" id="email" class="form-control" required
                                placeholder="Enter your email address">
                            <div class="email-validation" id="emailValidation"></div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <div class="loading-spinner"></div>
                    <span class="btn-text">✉️ Send Reset Link</span>
                </button>
            </form>

            <div class="success-message" id="successMessage">
                <h4>✅ Reset Link Sent!</h4>
                <p>We've sent a password reset link to your email. Please check your inbox and follow the instructions.
                </p>
            </div>

            <div class="recovery-info">
                <h4>📋 What happens next?</h4>
                <ul class="recovery-steps">
                    <li>
                        <div class="step-number">1</div>
                        <span>Check your email inbox (and spam folder)</span>
                    </li>
                    <li>
                        <div class="step-number">2</div>
                        <span>Click the password reset link</span>
                    </li>
                    <li>
                        <div class="step-number">3</div>
                        <span>Create your new secure password</span>
                    </li>
                    <li>
                        <div class="step-number">4</div>
                        <span>Sign in with your new password</span>
                    </li>
                </ul>
                <p style="margin-top: 15px; font-size: 0.8rem; color: #64748b;">
                    <strong>Note:</strong> The reset link will expire in 60 minutes for security reasons.
                </p>
            </div>

            <div class="back-to-login">
                <a href="#" onclick="alert('In Laravel: route(\'login\')')">← Back to Sign In</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const emailValidation = document.getElementById('emailValidation');
            const submitBtn = document.getElementById('submitBtn');
            const form = document.getElementById('forgotForm');
            const successMessage = document.getElementById('successMessage');
            const label = document.querySelector('label[for="email"]');

            // Email validation
            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Real-time email validation
            emailInput.addEventListener('input', function() {
                const email = this.value;

                if (email.length > 0) {
                    emailValidation.classList.add('show');

                    if (validateEmail(email)) {
                        emailValidation.textContent = '✓';
                        emailValidation.className = 'email-validation show valid';
                    } else {
                        emailValidation.textContent = '✗';
                        emailValidation.className = 'email-validation show invalid';
                    }
                } else {
                    emailValidation.classList.remove('show');
                }
            });

            // Form submission handling
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = emailInput.value;

                if (!validateEmail(email)) {
                    // Add shake animation for invalid email
                    emailInput.style.animation = 'shake 0.5s ease-in-out';
                    setTimeout(() => {
                        emailInput.style.animation = '';
                    }, 500);
                    return;
                }

                // Add loading state
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;

                    // Hide form and show success message
                    form.style.animation = 'fadeOut 0.3s ease-out forwards';

                    setTimeout(() => {
                        form.style.display = 'none';
                        successMessage.style.display = 'block';
                    }, 300);

                    // Change button appearance
                    setTimeout(() => {
                        submitBtn.innerHTML =
                            '<span class="btn-text">✅ Link Sent Successfully!</span>';
                        submitBtn.style.background =
                            'linear-gradient(135deg, #10b981, #059669)';
                    }, 500);

                }, 2500);
            });

            // Input focus effects
            emailInput.addEventListener('focus', function() {
                label.style.color = '#667eea';
                this.parentElement.style.transform = 'scale(1.02)';
            });

            emailInput.addEventListener('blur', function() {
                label.style.color = '#4a5568';
                this.parentElement.style.transform = 'scale(1)';
            });

            // Add shake animation styles
            const shakeStyle = document.createElement('style');
            shakeStyle.textContent = `
                @keyframes shake {
                    0%, 100% { transform: translateX(0); }
                    25% { transform: translateX(-5px); }
                    75% { transform: translateX(5px); }
                }
                
                @keyframes fadeOut {
                    from { opacity: 1; transform: translateY(0); }
                    to { opacity: 0; transform: translateY(-20px); }
                }
            `;
            document.head.appendChild(shakeStyle);

            // Auto-focus email input after page load
            setTimeout(() => {
                emailInput.focus();
            }, 800);
        });
    </script>
</body>

</html>
