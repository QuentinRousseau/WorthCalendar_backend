<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background: linear-gradient(to right, #ffcccc, #ffe6e6);
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 5px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .navbar a:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar a.active {
            background-color: #ffcccc;
        }

        .container {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/admin/users">Users</a>
        <a href="/admin/appointments">Appointments</a>
        <a href="/admin/organizations">Organizations</a>
        <a href="/admin/teams">Teams</a>
        <a href="/admin/settings">Settings</a>
    </div>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>