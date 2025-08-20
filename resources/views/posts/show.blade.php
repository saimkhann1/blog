<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --success-gradient: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
            --content-gradient: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.15);
            --shadow-heavy: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        .post-card,
        .comments-card,
        .comment-form-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
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
            height: 5px;
            background: var(--primary-gradient);
            transition: left 0.6s ease;
        }

        .comments-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 5px;
            background: var(--secondary-gradient);
            transition: left 0.6s ease;
        }

        .comment-form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 5px;
            background: var(--success-gradient);
            transition: left 0.6s ease;
        }

        .post-card:hover::before,
        .comments-card:hover::before,
        .comment-form-card:hover::before {
            left: 0;
        }

        .post-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-heavy);
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
        }

        .comments-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            background: linear-gradient(135deg, #fff 0%, #fff5f8 100%);
        }

        .comment-form-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            background: linear-gradient(135deg, #fff 0%, #f0fff4 100%);
        }

        .post-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .post-card:hover .post-title {
            background: var(--primary-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform: scale(1.02);
        }

        .post-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: #64748b;
            transition: all 0.3s ease;
        }

        .post-card:hover .meta-item {
            transform: scale(1.05);
            color: #475569;
        }

        .meta-icon {
            font-size: 1.2rem;
            margin-right: 0.8rem;
            transition: transform 0.3s ease;
        }

        .post-card:hover .meta-icon {
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

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-left: 0.5rem;
        }

        .tag-badge {
            background: linear-gradient(135deg, #e2e8f0, #cbd5e0);
            color: #475569;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
        }

        .tag-badge:hover {
            background: var(--secondary-gradient);
            color: white;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .post-content {
            background: linear-gradient(135deg, #fafafa, #f0f0f0);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #374151;
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }

        .post-card:hover .post-content {
            background: var(--content-gradient);
            border-left-color: #f093fb;
            transform: scale(1.01);
            box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .back-btn {
            background: var(--primary-gradient);
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
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .section-title .emoji {
            font-size: 2rem;
            margin-right: 1rem;
            transition: transform 0.3s ease;
        }

        .comments-card:hover .section-title {
            color: #f093fb;
        }

        .comments-card:hover .section-title .emoji {
            transform: scale(1.2) rotate(10deg);
        }

        .comment-form-card:hover .section-title {
            color: #84fab0;
        }

        .comment-form-card:hover .section-title .emoji {
            transform: scale(1.2) rotate(-10deg);
        }

        .comment-item {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .comment-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 0;
            background: var(--accent-gradient);
            transition: height 0.3s ease;
        }

        .comment-item:hover::before {
            height: 100%;
        }

        .comment-item:hover {
            transform: translateX(10px);
            background: linear-gradient(135deg, #ffffff, #f8f9ff);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .no-comments {
            text-align: center;
            color: #9ca3af;
            font-style: italic;
            padding: 2rem;
            background: linear-gradient(135deg, #f9fafb, #f3f4f6);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .comments-card:hover .no-comments {
            background: linear-gradient(135deg, #fff, #fef7ff);
            color: #6b7280;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid #e5e7eb;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-control:focus {
            border-color: #84fab0;
            box-shadow: 0 0 0 0.2rem rgba(132, 250, 176, 0.25);
            background: white;
            transform: scale(1.02);
        }

        .comment-btn {
            background: var(--success-gradient);
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

        .comment-btn::before {
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

        .comment-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .comment-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(132, 250, 176, 0.4);
            color: white;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            padding: 0.5rem;
            background: rgba(239, 68, 68, 0.1);
            border-radius: 8px;
            border-left: 3px solid #ef4444;
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
            background: var(--accent-gradient);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .post-title {
                font-size: 2rem;
            }

            .post-card,
            .comments-card,
            .comment-form-card {
                padding: 1.5rem;
            }

            .post-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .tags-container {
                gap: 0.5rem;
            }
        }

        /* Loading Animation */
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

        .post-card,
        .comments-card,
        .comment-form-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .comments-card {
            animation-delay: 0.2s;
        }

        .comment-form-card {
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
        <!-- Post Card -->
        <div class="post-card">
            <h2 class="post-title">{{ $post->title }}</h2>

            <div class="post-meta">
                <div class="meta-item">
                    <span class="meta-icon">👤</span>
                    <strong>Author:</strong>
                    @if ($post->user)
                        <a href="{{ route('posts.author', $post->user->slug) }}" class="author-link">
                            {{ $post->user->name }}
                        </a>
                    @else
                        <span class="text-muted">Unknown Author</span>
                    @endif
                </div>

                <div class="meta-item">
                    <span class="meta-icon">🗓</span>
                    {{ $post->created_at->diffForHumans() }}
                </div>

                <div class="meta-item">
                    <span class="meta-icon">🌍</span>
                    <strong>Country:</strong>
                    @if ($post->country)
                        <a href="{{ route('countries.show', $post->country->slug) }}" class="country-link">
                            {{ $post->country->name }}
                        </a>
                    @else
                        <span class="text-muted">No country</span>
                    @endif
                </div>
            </div>

            <div class="meta-item mb-4">
                <span class="meta-icon">🏷</span>
                <strong>Tags:</strong>
                <div class="tags-container">
                    @forelse ($post->tags as $tag)
                        <a href="{{ route('posts.tags', $tag->slug) }}" class="tag-badge">
                            {{ $tag->name }}
                        </a>
                    @empty
                        <span class="text-muted">No tags</span>
                    @endforelse
                </div>
            </div>

            <div class="post-content">
                {!! nl2br(e($post->content ?? 'No content available.')) !!}
            </div>

            <a href="{{ route('posts.index') }}" class="btn back-btn">← Back to All Posts</a>
        </div>

        <!-- Comments Section -->
        <div class="comments-card">
            <h4 class="section-title">
                <span class="emoji">💬</span>Comments
            </h4>

            @forelse ($post->comments as $comment)
                <div class="comment-item">
                    <div class="meta-item">
                        <span class="meta-icon">🗓</span>
                        {{ $post->created_at->diffForHumans() }}
                    </div>
                    {{ $comment->comment }}
                </div>
            @empty
                <div class="no-comments">
                    No comments yet. Be the first to share your thoughts!
                </div>
            @endforelse
        </div>

        <!-- Comment Form -->
        <div class="comment-form-card">
            <h5 class="section-title">
                <span class="emoji">✍️</span>Add a Comment
            </h5>
            <form action="{{ route('comments.store', $post) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea name="comment" rows="4" class="form-control" placeholder="Share your thoughts about this post..."></textarea>
                    @error('comment')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn comment-btn">Post Comment</button>
<<<<<<< HEAD
            </form>
        </div>
    </div>
=======

            </form>
        </div>
    </div>
    <x-footer />
>>>>>>> c17c6a8 (create new post tk)
</body>

</html>
