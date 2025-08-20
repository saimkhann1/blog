<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts by {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
<<<<<<< HEAD
            --card-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            --card-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .page-title {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            display: inline-block;
        }

        .page-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--primary-gradient);
            transition: width 0.3s ease;
        }

        .page-title:hover::after {
            width: 100%;
        }

        .post-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
=======
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --glass-bg: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.18);
            --card-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            --card-shadow-hover: 0 20px 60px rgba(31, 38, 135, 0.6);
            --transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            --text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-attachment: fixed;
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animated::before {
            content: '';
            position: relative;
            display: inline-block;
            text-shadow: var(--text-shadow);
        }

        .page-title::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
            border-radius: 15px;
            z-index: -1;
            opacity: 0;
            transition: var(--transition);
            transform: scale(1.1);
        }

        .page-title:hover::before {
            opacity: 0.1;
            transform: scale(1);
        }

        /* Author Icon Animation */
        .author-icon {
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Post Cards */
        .post-card {
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
>>>>>>> c17c6a8 (create new post tk)
        }

        .post-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
<<<<<<< HEAD
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
=======
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .post-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--primary-gradient), var(--secondary-gradient));
            border-radius: 24px;
            opacity: 0;
            z-index: -1;
            transition: var(--transition);
        }

        .post-card:hover {
            transform: translateY(-12px) rotateX(5deg);
            box-shadow: var(--card-shadow-hover);
            border-color: rgba(255, 255, 255, 0.3);
>>>>>>> c17c6a8 (create new post tk)
        }

        .post-card:hover::before {
            left: 100%;
        }

<<<<<<< HEAD
        .post-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: var(--card-shadow-hover);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .post-title {
            transition: var(--transition);
            position: relative;
            display: inline-block;
        }

        .post-title:hover {
            color: #667eea !important;
            text-shadow: 0 2px 4px rgba(102, 126, 234, 0.2);
        }

        .meta-info {
            background: rgba(102, 126, 234, 0.1);
            border-radius: 20px;
            padding: 8px 16px;
            margin: 10px 0;
            transition: var(--transition);
        }

        .post-card:hover .meta-info {
            background: rgba(102, 126, 234, 0.15);
            transform: scale(1.02);
        }

        .country-link {
            transition: var(--transition);
            position: relative;
        }

        .country-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #667eea;
            transition: width 0.3s ease;
        }

        .country-link:hover::after {
            width: 100%;
        }

        .tag-badge {
            transition: var(--transition);
            margin: 2px;
            position: relative;
            overflow: hidden;
        }

        .tag-badge:hover {
            transform: scale(1.1);
            background: linear-gradient(45deg, #667eea, #764ba2) !important;
            box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
        }

        .view-btn {
            background: var(--primary-gradient);
            border: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .view-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.3s ease;
        }

        .view-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .view-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .back-btn {
            transition: var(--transition);
            border: 2px solid #6c757d;
            position: relative;
            overflow: hidden;
        }

        .back-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: #6c757d;
            transition: left 0.3s ease;
            z-index: -1;
        }

        .back-btn:hover::before {
            left: 0;
        }

        .back-btn:hover {
            color: white;
            transform: translateX(-3px);
        }

        .alert-custom {
            background: linear-gradient(135deg, #fff3cd, #fef5e0);
            border: none;
            border-left: 4px solid #ffc107;
            animation: slideInUp 0.5s ease;
        }

        .fade-in {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }

        .fade-in:nth-child(1) {
            animation-delay: 0.1s;
        }

        .fade-in:nth-child(2) {
            animation-delay: 0.2s;
        }

        .fade-in:nth-child(3) {
            animation-delay: 0.3s;
        }

        .fade-in:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

=======
        .post-card:hover::after {
            opacity: 0.05;
        }

        /* Post Title */
        .post-title {
            background: linear-gradient(135deg, #2d3748, #4a5568);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: var(--transition);
            position: relative;
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        .post-title:hover {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transform: translateX(5px);
        }

        /* Meta Info */
        .meta-info {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 16px 20px;
            margin: 16px 0;
            transition: var(--transition);
            position: relative;
        }

        .meta-info::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--accent-gradient);
            border-radius: 16px;
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .post-card:hover .meta-info {
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(79, 172, 254, 0.2);
        }

        .post-card:hover .meta-info::before {
            opacity: 0.1;
        }

        /* Country Link */
        .country-link {
            color: #ffffff;
            position: relative;
            font-weight: 600;
            text-decoration: none !important;
            transition: var(--transition);
        }

        .country-link::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-gradient);
            transition: width 0.4s ease;
            border-radius: 1px;
        }

        .country-link:hover {
            color: #4facfe !important;
            transform: translateY(-1px);
        }

        .country-link:hover::before {
            width: 100%;
        }

        /* Tags */
        .tag-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 8px 16px;
            margin: 4px;
            color: #ffffff;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .tag-badge::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--secondary-gradient);
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .tag-badge:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(240, 147, 251, 0.4);
            color: #ffffff;
        }

        .tag-badge:hover::before {
            opacity: 1;
        }

        /* Buttons */
        .btn-modern {
            background: var(--primary-gradient);
            border: none;
            border-radius: 25px;
            padding: 12px 24px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--secondary-gradient);
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-modern:hover::before {
            opacity: 1;
        }

        .btn-outline-modern {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 10px 22px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .btn-outline-modern::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
            z-index: -1;
        }

        .btn-outline-modern:hover {
            transform: translateY(-3px);
            border-color: rgba(255, 255, 255, 0.6);
            color: white;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
        }

        .btn-outline-modern:hover::before {
            transform: translateX(0);
        }

        /* Icons */
        .icon-float {
            transition: var(--transition);
            display: inline-block;
        }

        .post-card:hover .icon-float {
            transform: translateY(-2px) rotate(5deg);
        }

        /* Alert */
        .alert-modern {
            background: rgba(255, 243, 205, 0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 193, 7, 0.3);
            border-radius: 20px;
            border-left: 4px solid #ffc107;
            color: #ffffff;
            padding: 24px;
        }

        /* Animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .fade-in-up:nth-child(1) {
            animation-delay: 0.1s;
        }

        .fade-in-up:nth-child(2) {
            animation-delay: 0.2s;
        }

        .fade-in-up:nth-child(3) {
            animation-delay: 0.3s;
        }

        .fade-in-up:nth-child(4) {
            animation-delay: 0.4s;
        }

        .fade-in-up:nth-child(5) {
            animation-delay: 0.5s;
        }

        @keyframes fadeInUp {
>>>>>>> c17c6a8 (create new post tk)
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

<<<<<<< HEAD
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon-bounce {
            transition: transform 0.3s ease;
        }

        .post-card:hover .icon-bounce {
            transform: scale(1.2) rotate(10deg);
        }

        .pagination .page-link {
            transition: var(--transition);
            border: none;
            margin: 0 2px;
            border-radius: 10px;
        }

        .pagination .page-link:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
        }

        .container {
            animation: fadeInUp 0.8s ease;
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

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(102, 126, 234, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .floating-circle:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-circle:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-circle:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
=======
        /* Floating Elements */
        .floating-orb {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent);
            animation: float 6s ease-in-out infinite;
            pointer-events: none;
        }

        .floating-orb:nth-child(1) {
            width: 120px;
            height: 120px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .floating-orb:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 8%;
            animation-delay: 2s;
        }

        .floating-orb:nth-child(3) {
            width: 100px;
            height: 100px;
            bottom: 15%;
            left: 15%;
>>>>>>> c17c6a8 (create new post tk)
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
<<<<<<< HEAD
                transform: translateY(-20px) rotate(120deg);
            }

            66% {
                transform: translateY(10px) rotate(240deg);
            }
        }
    </style>
</head>

<body class="bg-light">
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
    </div>

    <div class="container mt-5">
        <!-- Page Title -->
        <h2 class="fw-bold page-title mb-5 text-center">
            <i class="fas fa-user icon-bounce me-2"></i>
            All Posts by <span class="text-dark">{{ $user->name }}</span>
        </h2>

        @forelse ($posts as $post)
            <div class="card post-card shadow-sm border-0 rounded-4 mb-4 fade-in">
                <div class="card-body p-4">
                    <!-- Post Title -->
                    <h4 class="fw-bold mb-3">
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="text-decoration-none text-dark post-title">
                            <i class="fas fa-file-alt me-2 icon-bounce"></i>{{ $post->title }}
                        </a>
                    </h4>

                    <!-- Meta Info -->
                    <div class="meta-info">
                        <p class="mb-0 text-muted small d-flex flex-wrap align-items-center">
                            <span class="me-3">
                                <i class="fas fa-calendar-alt me-1"></i>
                                <strong>{{ $post->created_at->diffForHumans() }}</strong>
                            </span>
                            <span class="me-3">|</span>
                            <span>
                                <i class="fas fa-globe-americas me-1"></i>
                                <strong>
                                    <a href="{{ route('countries.show', $post->country->slug) }}"
                                        class="text-decoration-none country-link text-primary">
                                        {{ $post->country->name }}
                                    </a>
                                </strong>
                            </span>
                        </p>
                    </div>

                    <!-- Tags -->
                    <div class="mb-3">
                        <p class="mb-2">
                            <i class="fas fa-tags me-1"></i><strong>Tags:</strong>
                        </p>
=======
                transform: translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateY(15px) rotate(240deg);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }

            .post-card {
                margin-bottom: 20px;
            }

            .meta-info {
                padding: 12px 16px;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
        }
        .logout-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background: var(--secondary-gradient);
            color: white;
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            border: none;
        }

        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(240, 83, 108, 0.5);
        }
    </style>
</head>
 @auth
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fas fa-arrow-left me-2"></i> Logout
        </button>
    </form>
    @endauth
<body class="bg-animated">
    <!-- Floating Orbs -->
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>

    <div class="container mt-5">
        <!-- Page Title -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-3">
                <i class="fas fa-user author-icon me-3"></i>
                Posts by <span class="fw-bold">{{ $user->name }}</span>
            </h1>
            <div class="glass-container d-inline-block px-4 py-2">
                <p class="mb-0 text-white-50">
                    <i class="fas fa-feather me-2"></i>
                    Exploring thoughts and ideas
                </p>
            </div>
        </div>

        @forelse ($posts as $post)
            <div class="post-card glass-container mb-4 fade-in-up">
                <div class="p-4">
                    <!-- Post Title -->
                    <h3 class="mb-3">
                        <a href="{{ route('posts.show', $post->slug) }}" class="post-title text-decoration-none">
                            <i class="fas fa-bookmark icon-float me-2"></i>
                            {{ $post->title }}
                        </a>
                    </h3>

                    <!-- Meta Info -->
                    <div class="meta-info">
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="d-flex align-items-center text-white-50">
                                <i class="far fa-calendar-alt icon-float me-2"></i>
                                <span class="fw-medium">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="text-white-50">•</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt icon-float me-2 text-white-50"></i>
                                <a href="{{ route('countries.show', $post->country->slug) }}" class="country-link">
                                    {{ $post->country->name }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-tags icon-float me-2 text-white-50"></i>
                            <span class="text-white-50 fw-medium">Tags</span>
                        </div>

>>>>>>> c17c6a8 (create new post tk)
                        @if ($post->tags->count())
                            <div class="d-flex flex-wrap">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('posts.tags', $tag->slug) }}" class="text-decoration-none">
<<<<<<< HEAD
                                        <span class="badge bg-secondary tag-badge">
=======
                                        <span class="tag-badge">
>>>>>>> c17c6a8 (create new post tk)
                                            <i class="fas fa-hashtag me-1"></i>{{ $tag->name }}
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        @else
<<<<<<< HEAD
                            <span class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>No tags assigned
                            </span>
                        @endif
                    </div>

                    <!-- View Post Button -->
                    <a href="{{ route('posts.show', $post->slug) }}"
                        class="btn btn-sm btn-primary rounded-pill view-btn px-4 py-2">
                        <i class="fas fa-eye me-1"></i>View Post
                        <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        @empty
            <div class="alert alert-custom shadow-sm border-0 rounded-3 text-center">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>No posts found for this author.</strong>
                <p class="mb-0 mt-2">This user hasn't published any posts yet. Check back later!</p>
            </div>
        @endforelse

        <!-- Back & Pagination -->
        <div class="mt-5 d-flex justify-content-between align-items-center flex-wrap">
            <a href="{{ route('posts.index') }}"
                class="btn btn-outline-secondary rounded-pill back-btn px-4 py-2 mb-2">
                <i class="fas fa-arrow-left me-2"></i>Back To All Posts
            </a>
            <div class="mb-2">
=======
                            <div class="tag-badge">
                                <i class="fas fa-info-circle me-1"></i>No tags assigned
                            </div>
                        @endif
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="{{ route('posts.show', $post->slug) }}" class="btn-modern">
                            <i class="fas fa-eye"></i>
                            View Post
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert-modern text-center fade-in-up">
                <div class="mb-3">
                    <i class="fas fa-search" style="font-size: 3rem; opacity: 0.7;"></i>
                </div>
                <h4 class="fw-bold mb-2">No Posts Found</h4>
                <p class="mb-0 opacity-75">
                    This talented author hasn't published any posts yet.
                    <br>Check back soon for amazing content!
                </p>
            </div>
        @endforelse

        <!-- Navigation -->
        <div class="mt-5 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <a href="{{ route('posts.index') }}" class="btn-outline-modern">
                <i class="fas fa-arrow-left"></i>
                Back to All Posts
            </a>

            <div class="glass-container p-2">
>>>>>>> c17c6a8 (create new post tk)
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
<<<<<<< HEAD
        // Add smooth scrolling and additional interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add loading animation to cards
            const cards = document.querySelectorAll('.post-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
=======
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in-up').forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });

            // Enhanced ripple effect
            function createRipple(event, element) {
                const ripple = document.createElement('span');
                const rect = element.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = event.clientX - rect.left - size / 2;
                const y = event.clientY - rect.top - size / 2;

                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                    z-index: 1000;
                `;

                element.style.position = 'relative';
                element.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            }

            // Add ripple to buttons
            document.querySelectorAll('.btn-modern, .btn-outline-modern').forEach(button => {
                button.addEventListener('click', function(e) {
                    createRipple(e, this);
                });
            });

            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
>>>>>>> c17c6a8 (create new post tk)
                    }
                });
            });

<<<<<<< HEAD
            cards.forEach(card => {
                observer.observe(card);
            });

            // Add ripple effect to buttons
            document.querySelectorAll('.view-btn, .back-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple-effect');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>

    <style>
        .ripple-effect {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</body>

</html>
=======
            // Parallax effect for floating orbs
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const orbs = document.querySelectorAll('.floating-orb');

                orbs.forEach((orb, index) => {
                    const speed = 0.5 + (index * 0.1);
                    orb.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Add CSS for ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>

    <x-footer />
</body>

</html><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
    <circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)">
        <animate attributeName="opacity" values="0;1;0" dur="3s" repeatCount="indefinite" />
    </circle>
    <circle cx="80" cy="30" r="3" fill="rgba(255,255,255,0.05)">
        <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite" />
    </circle>
    <circle cx="40" cy="70" r="1.5" fill="rgba(255,255,255,0.1)">
        <animate attributeName="opacity" values="0;1;0" dur="2s" repeatCount="indefinite" />
    </circle>
</svg>')
}

/* Glass Container */
.glass-container {
background: var(--glass-bg);
backdrop-filter: blur(25px);
border: 1px solid var(--glass-border);
border-radius: 20px;
box-shadow: var(--card-shadow);
position: relative;
}

/* Page Title */
.page-title {
background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
font-weight: 800;
font-size: 3rem;
letter-spacing: -0.02em;
position
>>>>>>> c17c6a8 (create new post tk)
