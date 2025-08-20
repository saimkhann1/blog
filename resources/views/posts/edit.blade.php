<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post - Modern Interface</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%);
            pointer-events: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .form-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            animation: slideUp 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow:
                0 35px 70px -12px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.3);
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            padding-bottom: 20px;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 2px;
            animation: expandLine 1s ease-out 0.5s both;
        }

        @keyframes expandLine {
            from {
                width: 0;
            }

            to {
                width: 60px;
            }
        }

        .form-group {
            margin-bottom: 1.8rem;
            position: relative;
            animation: fadeInUp 0.6s ease-out both;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.1s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(4) {
            animation-delay: 0.3s;
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

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4a5568;
            font-size: 0.95rem;
            transition: color 0.3s ease;
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
            z-index: 1;
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

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
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

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }

        .btn {
            padding: 14px 28px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            min-width: 140px;
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
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            box-shadow: 0 4px 15px rgba(72, 187, 120, 0.4);
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.6);
            background: linear-gradient(135deg, #38a169, #2f855a);
        }

        .btn-success:active {
            transform: translateY(0);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #a0aec0, #718096);
            color: white;
            box-shadow: 0 4px 15px rgba(160, 174, 192, 0.4);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(160, 174, 192, 0.6);
            background: linear-gradient(135deg, #718096, #4a5568);
        }

        .btn-secondary:active {
            transform: translateY(0);
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 70%;
            right: 10%;
            animation-delay: -5s;
        }

        .shape:nth-child(3) {
            width: 40px;
            height: 40px;
            top: 50%;
            left: 5%;
            animation-delay: -10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            25% {
                transform: translateY(-20px) rotate(90deg);
            }

            50% {
                transform: translateY(0) rotate(180deg);
            }

            75% {
                transform: translateY(-10px) rotate(270deg);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .form-card {
                padding: 30px 25px;
                border-radius: 20px;
            }

            h2 {
                font-size: 2rem;
                margin-bottom: 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        .form-control:invalid {
            border-color: #e53e3e;
        }

        .form-control:valid {
            border-color: #38a169;
        }

        .emoji-icon {
            font-size: 1.2em;
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <div class="form-card">
            <h2><span class="emoji-icon">✏️</span>Edit Post</h2>

            <form action="{{ route('posts.update', $post->slug) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title" class="form-label">📝 Post Title</label>
                    <div class="input-wrapper">
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $post->title }}" required placeholder="Enter your post title...">
                    </div>
                </div>

                <div class="form-group">
                    <label for="content" class="form-label">📖 Content</label>
                    <div class="input-wrapper">
                        <textarea name="content" id="content" rows="6" class="form-control" required
                            placeholder="Write your post content here...">{{ $post->content }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tags" class="form-label">🏷️ Tags</label>
                    <div class="input-wrapper">
                        <input type="text" name="tags" id="tags" class="form-control"
                            value="{{ $post->tags->pluck('name')->implode(', ') }}"
                            placeholder="Enter tags separated by commas...">
                    </div>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-success">
                        ✨ Update Post
                    </button>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                        ↩️ Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add smooth interactions
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');
            const labels = document.querySelectorAll('.form-label');

            inputs.forEach((input, index) => {
                input.addEventListener('focus', function() {
                    labels[index].style.color = '#667eea';
                    this.parentElement.style.transform = 'scale(1.02)';
                });

                input.addEventListener('blur', function() {
                    labels[index].style.color = '#4a5568';
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            // Add typing animation for placeholders
            const titleInput = document.getElementById('title');
            const contentTextarea = document.getElementById('content');

            titleInput.addEventListener('focus', function() {
                if (!this.value) {
                    this.style.animation = 'pulse 1s ease-in-out';
                }
            });

            // Form validation with smooth feedback
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('.btn-success');
                submitBtn.innerHTML = '⏳ Updating...';
                submitBtn.style.background = 'linear-gradient(135deg, #4299e1, #3182ce)';
            });
        });
    </script>

    <style>
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }
    </style>
</body>

</html>
