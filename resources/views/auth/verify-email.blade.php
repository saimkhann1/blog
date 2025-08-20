<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
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
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
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
            animation: float 15s infinite linear;
        }

        .floating-element:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 15%;
            animation-delay: -5s;
        }

        .floating-element:nth-child(3) {
            width: 40px;
            height: 40px;
            top: 80%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
            }

            25% {
                transform: translateY(-30px) rotate(90deg);
                opacity: 1;
            }

            50% {
                transform: translateY(0) rotate(180deg);
                opacity: 0.7;
            }

            75% {
                transform: translateY(-15px) rotate(270deg);
                opacity: 0.9;
            }
        }

        .container {
            max-width: 500px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .verification-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 50px 40px;
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
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

        .verification-card:hover {
            transform: translateY(-10px);
            box-shadow:
                0 35px 70px -12px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.4);
        }

        .email-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            position: relative;
            animation: pulse 2s infinite;
        }

        .email-icon::after {
            content: '📧';
            font-size: 32px;
            animation: bounce 1s ease-in-out infinite alternate;
        }

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4);
            }

            50% {
                box-shadow: 0 0 0 20px rgba(102, 126, 234, 0);
            }
        }

        @keyframes bounce {
            from {
                transform: translateY(-2px);
            }

            to {
                transform: translateY(2px);
            }
        }

        h3 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .description {
            color: #64748b;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
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

        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            border: none;
            font-weight: 500;
            animation: slideInAlert 0.5s ease-out;
        }

        @keyframes slideInAlert {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-warning {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            color: white;
            box-shadow: 0 4px 15px rgba(251, 191, 36, 0.3);
        }

        .alert-success {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .btn {
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            transform: translateY(0);
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

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #64748b, #475569);
            color: white;
            box-shadow: 0 4px 15px rgba(100, 116, 139, 0.4);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(100, 116, 139, 0.6);
            background: linear-gradient(135deg, #475569, #334155);
        }

        .btn-secondary:active {
            transform: translateY(-1px);
        }

        .form {
            width: 100%;
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
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
            opacity: 0.7;
        }

        @media (max-width: 768px) {
            .verification-card {
                padding: 40px 30px;
                margin: 20px;
            }

            h3 {
                font-size: 1.8rem;
            }

            .description {
                font-size: 1rem;
            }

            .email-icon {
                width: 70px;
                height: 70px;
            }

            .email-icon::after {
                font-size: 28px;
            }
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
            margin: 25px 0;
            animation: fadeInUp 0.8s ease-out 0.5s both;
        }

        .verification-steps {
            text-align: left;
            margin: 25px 0;
            animation: fadeInUp 0.8s ease-out 0.7s both;
        }

        .step {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #64748b;
            font-size: 0.95rem;
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
            margin-right: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <div class="container">
        <div class="verification-card">
            <div class="email-icon"></div>

            <!-- Simulated Laravel session messages -->
            <!-- @if (session('message'))
-->
            <div class="alert alert-warning" style="display: none;" id="sessionMessage">
                Please verify your email address to continue.
            </div>
            <!--
@endif -->

            <h3>Verify Your Email Address</h3>

            <p class="description">
                We've sent a verification link to your email address. Please check your inbox and click the link to
                verify your account.
            </p>

            <div class="verification-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <span>Check your email inbox</span>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <span>Click the verification link</span>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <span>Return here to continue</span>
                </div>
            </div>

            <!-- @if (session('status') == 'verification-link-sent')
-->
            <div class="alert alert-success" style="display: none;" id="successMessage">
                ✅ A new verification link has been sent to your email address.
            </div>
            <!--
@endif -->

            <div class="divider"></div>

            <div class="btn-container">
                <form method="POST" action="{{ route('verification.send') }}" class="form">
                    <!-- @csrf -->
                    <button type="submit" class="btn btn-primary" id="resendBtn">
                        <span class="btn-text">📧 Resend Verification Email</span>
                        <div class="loading-spinner"></div>
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="form">
                    <!-- @csrf -->
                    <button type="submit" class="btn btn-secondary" id="logoutBtn">
                        <span class="btn-text">🚪 Logout</span>
                        <div class="loading-spinner"></div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resendBtn = document.getElementById('resendBtn');
            const logoutBtn = document.getElementById('logoutBtn');
            const successMessage = document.getElementById('successMessage');

            // Handle resend button click
            resendBtn.addEventListener('click', function(e) {
                e.preventDefault();

                // Add loading state
                this.classList.add('loading');
                this.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    this.classList.remove('loading');
                    this.disabled = false;

                    // Show success message
                    successMessage.style.display = 'block';
                    successMessage.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    // Change button text temporarily
                    const btnText = this.querySelector('.btn-text');
                    const originalText = btnText.textContent;
                    btnText.textContent = '✅ Email Sent!';

                    setTimeout(() => {
                        btnText.textContent = originalText;
                    }, 3000);

                }, 2000);
            });

            // Handle logout button click
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();

                this.classList.add('loading');
                this.disabled = true;

                // Simulate logout
                setTimeout(() => {
                    // In real Laravel app, this would redirect
                    alert('Logout successful! (In real app, you would be redirected)');
                    this.classList.remove('loading');
                    this.disabled = false;
                }, 1500);
            });

            // Auto-hide success message after 5 seconds
            function hideSuccessMessage() {
                setTimeout(() => {
                    if (successMessage.style.display === 'block') {
                        successMessage.style.animation = 'slideOutAlert 0.5s ease-out forwards';
                        setTimeout(() => {
                            successMessage.style.display = 'none';
                            successMessage.style.animation = '';
                        }, 500);
                    }
                }, 5000);
            }

            // Add slide out animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideOutAlert {
                    from {
                        opacity: 1;
                        transform: translateX(0);
                    }
                    to {
                        opacity: 0;
                        transform: translateX(20px);
                    }
                }
            `;
            document.head.appendChild(style);

            // Simulate checking for messages on page load
            setTimeout(() => {
                // Uncomment to show session message
                // document.getElementById('sessionMessage').style.display = 'block';
            }, 1000);
        });
    </script>
</body>

</html>
