<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
</head>
<style>
    
    trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
  }
</style>
<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <button class="menu-btn close-btn" id="close-btn">✖</button>
            <h2>Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/dashboard/book">My Post</a></li>
                    <li><a href="/">Back To Home</a></li>
                    <div class="button">
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit"><i class="ph ph-sign-out"></i>Logout</button>
                            </form>
                        </li>
                    </div>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <button class="menu-btn open-btn" id="open-btn">☰</button>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
</body>
</html>
