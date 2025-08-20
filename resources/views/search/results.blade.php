<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-container {
            padding: 40px 20px;
        }

        .page-title {
            text-align: center;
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
            animation: fadeInDown 1s ease-out;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Enhanced search container */
        .search-container {
            max-width: 1000px;
            margin: 0 auto 40px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .search-container:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
        }

        .search-input {
            border-radius: 50px 0 0 50px;
            padding: 18px 25px;
            border: 3px solid transparent;
            background: linear-gradient(white, white) padding-box,
                       linear-gradient(135deg, #667eea, #764ba2) border-box;
            transition: all 0.3s ease;
            flex: 1;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .search-input:focus {
            outline: none;
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .search-input::placeholder {
            color: #999;
            transition: color 0.3s ease;
        }

        .search-input:focus::placeholder {
            color: #667eea;
        }

        .search-btn {
            border-radius: 0 50px 50px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 18px 30px;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
        }

        .search-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transition: left 0.3s ease;
            z-index: 0;
        }

        .search-btn:hover::before {
            left: 0;
        }

        .search-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        .search-btn span {
            position: relative;
            z-index: 1;
        }

        .input-group {
            display: flex;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 50px;
            overflow: hidden;
        }

        /* Enhanced table styling */
        .results-container {
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .table-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .table {
            margin: 0;
            border-radius: 20px;
            overflow: hidden;
        }

        .table thead th {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 20px 15px;
            border: none;
            position: relative;
        }

        .table thead th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .table tbody tr {
            transition: all 0.3s ease;
            border: none;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .table tbody td {
            padding: 18px 15px;
            border-color: rgba(0,0,0,0.05);
            vertical-align: middle;
            transition: all 0.3s ease;
        }

     .status-badge {
    padding: 10px 20px;      
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    min-width: 100px;        
    text-align: center;      
    display: inline-block;   
}

.status-active {
    background: linear-gradient(135deg, #4CAF50, #45a049);
    color: white;
    box-shadow: 0 4px 12px rgba(76, 175, 80, 0.3);
}

.status-deleted {
    background: linear-gradient(135deg, #f44336, #d32f2f);
    color: white;
    box-shadow: 0 4px 12px rgba(244, 67, 54, 0.3);
}

.status-badge:hover {
    transform: scale(1.1);
}


        /* Alert styling */
        .alert-warning {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            border: 2px solid #ffd700;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(255, 193, 7, 0.2);
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
            
            .search-container {
                margin: 0 15px 30px;
                padding: 20px;
            }
            
            .input-group {
                flex-direction: column;
            }
            
            .search-input, .search-btn {
                border-radius: 25px;
                margin-bottom: 10px;
            }
            
            .table-responsive {
                border-radius: 15px;
                overflow: hidden;
            }
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1 class="page-title">
            <i class="fas fa-search me-3"></i>Search Posts
        </h1>

        <!-- Enhanced Search Form -->
        <div class="search-container">
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="search-input"
                            placeholder="🔍 Search for posts, authors, countries..." 
                            value="{{ request('query') }}"
                            autocomplete="off">
                    <button type="submit" class="search-btn">
                        <span><i class="fas fa-search me-2"></i>Search</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Results Container -->
        <div class="results-container">
            <!-- Posts Results Table -->
            @if(isset($posts) && count($posts) > 0)
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-file-alt me-2"></i>Title</th>
                                    <th><i class="fas fa-user me-2"></i>Author</th>
                                    <th><i class="fas fa-globe me-2"></i>Country</th>
                                    <th><i class="fas fa-info-circle me-2"></i>Status</th>
                                    <th><i class="fas fa-trash me-2"></i>Deleted At</th>
                                    <th><i class="fas fa-calendar me-2"></i>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><strong>{{ $post->title }}</strong></td>
                                        <td>
                                            <i class="fas fa-user-circle me-2 text-primary"></i>
                                            {{ $post->user->name ?? 'Unknown' }}
                                        </td>
                                        <td>
                                            <i class="fas fa-flag me-2 text-success"></i>
                                            {{ $post->user->country->name ?? 'N/A' }}
                                        </td>
                                        <td>
                                            @if($post->deleted_at)
                                                <span class="status-badge status-deleted">
                                                    <i class="fas fa-times-circle me-1"></i>Deleted
                                                </span>
                                            @else
                                                <span class="status-badge status-active">
                                                    <i class="fas fa-check-circle me-1"></i>Active
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($post->deleted_at)
                                                <span class="text-danger">
                                                    <i class="fas fa-calendar-times me-1"></i>
                                                    {{ $post->deleted_at }}
                                                </span>
                                            @else
                                                <span class="text-muted">
                                                    <i class="fas fa-minus me-1"></i>-
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="text-info">
                                                <i class="fas fa-clock me-1"></i>
                                                {{ $post->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            @elseif(request('query'))
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>No results found</strong> for "<strong>{{ request('query') }}</strong>"
                    <br><small class="mt-2 d-block">Try different keywords or check your spelling.</small>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Add loading state to search button
        document.querySelector('form').addEventListener('submit', function() {
            const btn = document.querySelector('.search-btn span');
            btn.innerHTML = '<div class="loading me-2"></div>Searching...';
        });

        // Add smooth scrolling to results
        if (document.querySelector('.results-container')) {
            document.querySelector('.results-container').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start' 
            });
        }
    </script>
</body>
</html>