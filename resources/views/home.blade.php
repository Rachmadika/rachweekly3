<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            margin-bottom: 1rem;
            font-size: 1.875rem;
            color: #0f172a;
        }
        p {
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #475569;
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
        <h1>Welcome to the Home Page</h1>
        <p>This is the home page of our Laravel application. Feel free to explore the features and navigate to your user profile.</p>
        <a href="{{ url('/profil') }}">Go to Profile Page</a>
    </main>
</body>
</html>
