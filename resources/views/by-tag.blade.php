<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts with tag {{ $tag->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --tag-gradient: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.15);
            --shadow-heavy: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding: 2rem 0;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 1rem;
            position: relative;
        }

        .page-title .tag-icon {
            background: var(--tag-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.8rem;
            margin-right: 1rem;
            animation: pulse 2s infinite;
        }

        .tag-name {
            background: var(--primary-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .tag-name::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .post-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-light);
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .post-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 4px;
            background: var(--tag-gradient);
            transition: left 0.6s ease;
        }

        .post-card:hover::before {
            left: 0;
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            background: linear-gradient(135deg, #fff 0%, #fef7ff 100%);
        }

        .post-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .post-title a {
            color: #2d3748;
            text-decoration: none;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .post-title a .bi {
            margin-right: 0.8rem;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .post-title a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--tag-gradient);
            transition: width 0.3s ease;
        }

        .post-card:hover .post-title a {
            background: var(--primary-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .post-card:hover .post-title a .bi {
            background: var(--tag-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform: scale(1.2) rotate(5deg);
        }

        .post-card:hover .post-title a::after {
            width: 100%;
        }

        .post-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
            color: #64748b;
        }

        .meta-item {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .post-card:hover .meta-item {
            transform: scale(1.05);
        }

        .meta-item .bi {
            margin-right: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .post-card:hover .meta-item .bi {
            transform: rotate(360deg);
        }

        .author-link,
        .country-link {
            color: #6366f1;
            text-decoration: none;
            font-weight: 600;
            margin-left: 0.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .author-link:hover,
        .country-link:hover {
            color: #4f46e5;
            transform: translateX(3px);
        }

        .view-btn {
            background: var(--accent-gradient);
            border: none;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
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
            transition: all 0.6s ease;
        }

        .view-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .view-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(79, 172, 254, 0.4);
            color: white;
        }

        .no-posts-alert {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            border: none;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            color: #856404;
            font-weight: 600;
            box-shadow: var(--shadow-light);
        }

        .no-posts-alert .bi {
            font-size: 2rem;
            margin-right: 1rem;
            animation: bounce 2s infinite;
        }

        .back-btn {
            background: var(--secondary-gradient);
            border: none;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .back-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
        }

        .back-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(241, 147, 251, 0.4);
            color: white;
        }

        /* Custom Pagination Styles */
        .pagination {
            --bs-pagination-padding-x: 1rem;
            --bs-pagination-padding-y: 0.7rem;
            --bs-pagination-font-size: 1rem;
            --bs-pagination-color: #6366f1;
            --bs-pagination-bg: white;
            --bs-pagination-border-width: 2px;
            --bs-pagination-border-color: transparent;
            --bs-pagination-border-radius: 12px;
            --bs-pagination-hover-color: white;
            --bs-pagination-hover-bg: #6366f1;
            --bs-pagination-hover-border-color: #6366f1;
            --bs-pagination-focus-color: white;
            --bs-pagination-focus-bg: #4f46e5;
            --bs-pagination-focus-border-color: #4f46e5;
            --bs-pagination-active-color: white;
            --bs-pagination-active-bg: #4f46e5;
            --bs-pagination-active-border-color: #4f46e5;
            --bs-pagination-disabled-color: #9ca3af;
            --bs-pagination-disabled-bg: #f3f4f6;
            --bs-pagination-disabled-border-color: transparent;
            gap: 0.5rem;
        }

        .pagination .page-item {
            margin: 0 0.2rem;
        }

        .pagination .page-link {
            border-radius: 12px !important;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .pagination .page-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--tag-gradient);
            transition: left 0.4s ease;
            z-index: -1;
        }

        .pagination .page-link:hover::before {
            left: 0;
        }

        .pagination .page-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.3);
            color: white !important;
            border-color: transparent !important;
        }

        .pagination .page-item.active .page-link {
            background: var(--primary-gradient);
            border-color: transparent;
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .pagination .page-item.active .page-link::before {
            left: 0;
        }

        .pagination .page-item.disabled .page-link {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .pagination .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            background: var(--secondary-gradient);
            color: white;
            border: none;
            font-weight: 700;
        }

        .pagination .page-item:first-child .page-link::before,
        .pagination .page-item:last-child .page-link::before {
            background: var(--accent-gradient);
        }

        .pagination .page-item:first-child .page-link:hover,
        .pagination .page-item:last-child .page-link:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(241, 147, 251, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }

            .post-card {
                padding: 1.5rem;
            }

            .post-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        /* Animations */
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

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .post-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .post-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .post-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .post-card:nth-child(4) {
            animation-delay: 0.3s;
        }

        .post-card:nth-child(5) {
            animation-delay: 0.4s;
        }
<<<<<<< HEAD
=======

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

        /* Footer Styling */
        /* .custom-footer {
            background: var(--primary-gradient);
            text-align: center;
            padding: 1rem;
            border-radius: 15px 15px 0 0;
            box-shadow: var(--shadow-medium);
            color: white;
            font-weight: 600;
            margin-top: 3rem;
            animation: fadeInUp 0.6s ease-out;
        }

        .custom-footer span {
            color: #ffdd57;
            font-weight: 700;
        }

        .custom-footer:hover {
            background: var(--secondary-gradient);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            transition: all 0.4s ease;
        } */

        /* Footer Styling */
>>>>>>> c17c6a8 (create new post tk)
    </style>
</head>

<body>
<<<<<<< HEAD
=======
     @auth
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fas fa-arrow-left me-2"></i> Logout
        </button>
    </form>
    @endauth
>>>>>>> c17c6a8 (create new post tk)
    <div class="container mt-5">
        <!-- Page Title -->
        <div class="page-header">
            <h2 class="page-title">
                <i class="bi bi-tags-fill tag-icon"></i> Posts under tag:
                <span class="tag-name">{{ $tag->name }}</span>
            </h2>
        </div>

        <!-- Back Button -->
        <div class="text-center mb-4">
            <a href="{{ route('posts.index') }}" class="btn back-btn">
                ← Back To All Posts
            </a>
        </div>

        @forelse ($posts as $post)
            <div class="post-card">
                <!-- Title -->
                <h4 class="post-title">
                    <a href="{{ route('posts.show', $post->slug) }}">
                        <i class="bi bi-file-text"></i> {{ $post->title }}
                    </a>
                </h4>

                <!-- Meta Information -->
                <div class="post-meta">
                    <div class="meta-item">
                        <i class="bi bi-person-fill"></i>
                        <strong>Author:</strong>
                        <a href="{{ route('posts.author', $post->user) }}" class="author-link">
                            {{ $post->user->name }}
                        </a>
                    </div>

                    <div class="meta-item">
                        <i class="bi bi-calendar-event"></i>
                        <strong>Date:</strong> {{ $post->created_at->format('d M Y') }}
                    </div>

                    <div class="meta-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <strong>Country:</strong>
                        <a href="{{ route('countries.show', $post->country->slug) }}" class="country-link">
                            {{ $post->country->name }}
                        </a>
                    </div>
                </div>

                <!-- View Button -->
                <a href="{{ route('posts.show', $post->slug) }}" class="btn view-btn">
                    View Post →
<<<<<<< HEAD
                </a>
=======
                </a>    
>>>>>>> c17c6a8 (create new post tk)
            </div>
        @empty
            <div class="no-posts-alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <h4>No posts found under this tag</h4>
                <p class="mb-0">Try exploring other tags or create a new post!</p>
            </div>
        @endforelse

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>
<<<<<<< HEAD
=======
    <x-footer />
>>>>>>> c17c6a8 (create new post tk)
</body>

</html>
