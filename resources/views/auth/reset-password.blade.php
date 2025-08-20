<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password - Secure & Modern</title>
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
                radial-gradient(circle at 30% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
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
            animation: float 20s infinite linear;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 70%;
            right: 15%;
            animation-delay: -7s;
        }

        .floating-element:nth-child(3) {
            width: 40px;
            height: 40px;
            top: 50%;
            left: 5%;
            animation-delay: -14s;
        }

        .floating-element:nth-child(4) {
            width: 50px;
            height: 50px;
            top: 30%;
            right: 25%;
            animation-delay: -3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
            }

            25% {
                transform: translateY(-40px) rotate(90deg);
                opacity: 1;
            }

            50% {
                transform: translateY(0) rotate(180deg);
                opacity: 0.8;
            }

            75% {
                transform: translateY(-20px) rotate(270deg);
                opacity: 0.9;
            }
        }

        .container {
            max-width: 480px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .password-reset-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 50px 40px;
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            animation: slideIn 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(60px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .password-reset-card:hover {
            transform: translateY(-10px);
            box-shadow:
                0 35px 70px -12px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.4);
        }

        .security-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            position: relative;
            animation: securityPulse 3s infinite;
        }

        .security-icon::after {
            content: '🔐';
            font-size: 32px;
            animation: wiggle 2s ease-in-out infinite;
        }

        @keyframes securityPulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4);
                transform: scale(1);
            }

            50% {
                box-shadow: 0 0 0 20px rgba(102, 126, 234, 0);
                transform: scale(1.05);
            }
        }

        @keyframes wiggle {

            0%,
            100% {
                transform: rotate(-3deg);
            }

            50% {
                transform: rotate(3deg);
            }
        }

        h2 {
            font-size: 2.2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            text-align: center;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 35px;
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
            margin-bottom: 25px;
            position: relative;
            animation: fadeInUp 0.6s ease-out both;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.1s;
        }

        .form-group:nth-child(4) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(5) {
            animation-delay: 0.3s;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4a5568;
            font-size: 0.95rem;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            position: relative;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
        }

        .form-control:hover:not(:focus) {
            border-color: #cbd5e0;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
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
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .input-wrapper:focus-within::after {
            width: 100%;
        }

        .password-strength {
            margin-top: 8px;
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .password-strength-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #ef4444, #f59e0b, #10b981);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .password-requirements {
            margin-top: 12px;
            font-size: 0.85rem;
            color: #64748b;
        }

        .requirement {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .requirement.met {
            color: #059669;
        }

        .requirement.met::before {
            content: '✓';
            color: #059669;
            font-weight: bold;
        }

        .requirement:not(.met)::before {
            content: '○';
            color: #64748b;
        }

        .btn {
            width: 100%;
            padding: 16px 32px;
            border: none;
            border-radius: 16px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            margin-top: 20px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-success {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }

        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.6);
            background: linear-gradient(135deg, #059669, #047857);
        }

        .btn-success:active {
            transform: translateY(-1px);
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
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
            opacity: 0.7;
        }

        .security-tips {
            margin-top: 30px;
            padding: 20px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 12px;
            border-left: 4px solid #667eea;
            animation: fadeInUp 0.8s ease-out 0.5s both;
        }

        .security-tips h4 {
            color: #4a5568;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .security-tips ul {
            list-style: none;
            padding: 0;
        }

        .security-tips li {
            color: #64748b;
            font-size: 0.8rem;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .security-tips li::before {
            content: '•';
            color: #667eea;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .password-reset-card {
                padding: 40px 30px;
                margin: 20px;
            }

            h2 {
                font-size: 1.9rem;
            }

            .security-icon {
                width: 70px;
                height: 70px;
            }

            .security-icon::after {
                font-size: 28px;
            }
        }

        .match-indicator {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .match-indicator.show {
            opacity: 1;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
            margin: 25px 0;
        }
    </style>
</head>

<body>
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <div class="container">
        <div class="password-reset-card">
            <div class="security-icon"></div>

            <h2>Reset Password</h2>
            <p class="subtitle">Create a strong, secure password for your account</p>

            <form action="{{ route('password.update') }}" method="POST" id="resetForm">
                <!-- @csrf -->
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">📧 Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ request('email') }}" required placeholder="Enter your email address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">🔑 New Password</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" id="password" class="form-control" required
                            placeholder="Enter your new password">
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-fill" id="strengthFill"></div>
                    </div>
                    <div class="password-requirements" id="requirements">
                        <div class="requirement" data-requirement="length">At least 8 characters</div>
                        <div class="requirement" data-requirement="uppercase">One uppercase letter</div>
                        <div class="requirement" data-requirement="lowercase">One lowercase letter</div>
                        <div class="requirement" data-requirement="number">One number</div>
                        <div class="requirement" data-requirement="special">One special character</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">🔒 Confirm New Password</label>
                    <div class="input-wrapper">
                        <input type="password" name="password_confirmation" id="passwordConfirmation"
                            class="form-control" required placeholder="Confirm your new password">
                        <div class="match-indicator" id="matchIndicator"></div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success" id="submitBtn">
                    <div class="loading-spinner"></div>
                    <span class="btn-text">🛡️ Update Password</span>
                </button>
            </form>

            <div class="divider"></div>

            <div class="security-tips">
                <h4>🛡️ Password Security Tips</h4>
                <ul>
                    <li>Use a unique password you haven't used elsewhere</li>
                    <li>Include a mix of letters, numbers, and symbols</li>
                    <li>Avoid personal information like names or birthdays</li>
                    <li>Consider using a password manager</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const confirmInput = document.getElementById('passwordConfirmation');
            const strengthFill = document.getElementById('strengthFill');
            const matchIndicator = document.getElementById('matchIndicator');
            const submitBtn = document.getElementById('submitBtn');
            const form = document.getElementById('resetForm');

            // Password strength checker
            function checkPasswordStrength(password) {
                let score = 0;
                const requirements = {
                    length: password.length >= 8,
                    uppercase: /[A-Z]/.test(password),
                    lowercase: /[a-z]/.test(password),
                    number: /\d/.test(password),
                    special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
                };

                // Update requirement indicators
                Object.keys(requirements).forEach(req => {
                    const element = document.querySelector(`[data-requirement="${req}"]`);
                    if (requirements[req]) {
                        element.classList.add('met');
                        score++;
                    } else {
                        element.classList.remove('met');
                    }
                });

                // Update strength bar
                const percentage = (score / 5) * 100;
                strengthFill.style.width = percentage + '%';

                return score;
            }

            // Check password match
            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirm = confirmInput.value;

                if (confirm.length > 0) {
                    matchIndicator.classList.add('show');
                    if (password === confirm) {
                        matchIndicator.textContent = '✅';
                        matchIndicator.style.color = '#059669';
                        return true;
                    } else {
                        matchIndicator.textContent = '❌';
                        matchIndicator.style.color = '#ef4444';
                        return false;
                    }
                } else {
                    matchIndicator.classList.remove('show');
                    return false;
                }
            }

            // Event listeners
            passwordInput.addEventListener('input', function() {
                checkPasswordStrength(this.value);
                checkPasswordMatch();
            });

            confirmInput.addEventListener('input', checkPasswordMatch);

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const passwordStrength = checkPasswordStrength(passwordInput.value);
                const passwordsMatch = checkPasswordMatch();

                if (passwordStrength < 4) {
                    alert('Please create a stronger password meeting all requirements.');
                    return;
                }

                if (!passwordsMatch) {
                    alert('Passwords do not match. Please check and try again.');
                    return;
                }

                // Add loading state
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;

                // Simulate form submission
                setTimeout(() => {
                    // In real Laravel app, form would submit normally
                    alert('Password reset successful! (In real app, you would be redirected)');
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;

                    // Change button text to show success
                    const btnText = submitBtn.querySelector('.btn-text');
                    btnText.textContent = '✅ Password Updated!';
                    submitBtn.style.background = 'linear-gradient(135deg, #059669, #047857)';

                }, 2000);
            });

            // Input focus animations
            const inputs = document.querySelectorAll('.form-control');
            const labels = document.querySelectorAll('label');

            inputs.forEach((input, index) => {
                input.addEventListener('focus', function() {
                    if (labels[index]) {
                        labels[index].style.color = '#667eea';
                    }
                    this.parentElement.style.transform = 'scale(1.02)';
                });

                input.addEventListener('blur', function() {
                    if (labels[index]) {
                        labels[index].style.color = '#4a5568';
                    }
                    this.parentElement.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>

</html>
