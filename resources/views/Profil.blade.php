<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }
        main {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
            max-width: 540px;
            width: 100%;
        }
        h1 {
            margin-top: 0;
            margin-bottom: 1.25rem;
            font-size: 1.875rem;
            color: #0f172a;
        }
        .profile-details {
            margin-bottom: 2rem;
            border-top: 1px solid #e2e8f0;
            padding-top: 1.25rem;
        }
        .detail-item {
            margin-bottom: 1rem;
        }
        .detail-item strong {
            display: block;
            font-size: 0.875rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.25rem;
        }
        .detail-item span, .detail-item p {
            font-size: 1rem;
            color: #334155;
            margin: 0;
        }
        a {
            display: inline-block;
            padding: 0.625rem 1.25rem;
            background-color: #4f46e5;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }
        a:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>
    <main>
        <h1>User Profile</h1>

        <section class="profile-details">
            <div class="detail-item">
                <strong>Name</strong>
                <span>John Doe</span>
            </div>
            <div class="detail-item">
                <strong>Email</strong>
                <span>john.doe@example.com</span>
            </div>
            <div class="detail-item">
                <strong>Bio</strong>
                <p>Passionate software engineer building web applications with Laravel and modern PHP.</p>
            </div>
        </section>

        <a href="{{ url('/') }}">Back to Home</a>
    </main>
</body>
</html>
