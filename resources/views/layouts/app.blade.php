<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->

      <!-- Custom CSS for dark theme -->
      <style>
        body {
            background-color: #003366; /* Dark blue background color */
            color: white; /* Adjust text color for better visibility */
        }
        .navbar {
            background-color: #87CEFA; /* Light blue background color for the navbar */
            color: white;
        }
        .navbar-brand, .nav-link {
            color: white; /* Ensuring text in the navbar is visible on the light background */
        }
        .header-section {
            padding: 20px;
            text-align: center;
        }
        .search-form {
            margin: 20px 0;
        }
        .footer {
            background-color: #343a40; /* Keeping the footer's color as it is */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .nav-link:hover .fa-user {
    color: #007bff; /* Change color on hover */
   }
    </style>
     <!-- Bootstrap CSS (or other CSS framework) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="K-Sports Social Logo" width="150" height="100">
 
    </a>
    <ul class="navbar-nav ml-auto">
    <!-- Existing user icon dropdown -->
    
    <!-- Language switcher dropdown -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navBarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-globe"></i> <!-- World icon -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navBarDropdown">
            <a class="dropdown-item" href="{{ url('language/en') }}">English</a>
            <a class="dropdown-item" href="{{ url('language/fr') }}">French</a>
            <a class="dropdown-item" href="{{ url('language/es') }}">Spanish</a>
            <a class="dropdown-item" href="{{ url('language/it') }}">Italian</a>
            <a class="dropdown-item" href="{{ url('language/de') }}">German</a>
            <a class="dropdown-item" href="{{ url('language/ig') }}">Igbo</a>
        </div>
    </li>
   
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> <!-- Font Awesome user icon -->
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
            </div>
        </li>
    </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <!-- Footer content -->
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery (if using Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
