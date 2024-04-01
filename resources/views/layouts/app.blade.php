<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('K-Sports Social', 'Laravel') }}</title>
    <!-- Bootstrap CSS and Custom Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Include SweetAlert2 library from CDN in your main layout -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Custom CSS for dark theme -->
    <style>
        body {
            background-color: #003366; /* Dark blue background */
            color: white;
        }
        .navbar {
            background-color: #87CEFA; /* Light blue navbar */
            color: white;
        }
        .navbar-brand, .nav-link {
            color: white; /* Ensuring text in the navbar is visible on the light background */
        }

        body.dark-mode .navbar {
    background-color: #000000; /* Black background color */
    color: white;
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
   
</head>
<body>
@if(session('welcome'))
    <div id="welcomeMessage" class="alert alert-success" role="alert" style="position: fixed; top: 10px; right: 10px; z-index: 1050;">
        {{ session('welcome') }}
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('welcomeMessage').style.display = 'none';
        }, 5000); // Hide after 5 seconds
    </script>
@endif
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="K-Sports Social Logo" width="150" height="100">
    </a>

    @guest
<div id="registerBanner" class="register-banner">
    <div class="banner-content">
        <p>{{ __('messages.join') }}</p>
    </div>
</div>
@endguest

<!-- Hello message -->
@if(session('helloMessage'))
<script>
    window.onload = function() {
        alert("{{ session('helloMessage') }}");
    };
</script>
@endif


     <!-- Toggler/collapsible Button for Mobile View -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

      <!-- Navbar links and forms -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form action="{{ route('players.search') }}" method="GET" class="form-inline my-2 my-lg-0 mx-auto">
    <input type="text" name="name" class="form-control mr-sm-2" placeholder="{{ __('messages.name') }}"> 
            <select name="position" class="form-control mr-sm-2">
            <option value="">{{ __('messages.position') }}</option> <!-- Placeholder option -->
    <option value="gk">GK - Goal Keeper</option>
    <option value="rb">RB - Right Back</option>
    <option value="lb">LB - Left Back</option>
    <option value="lwb">LWB - Left Wing Back</option>
    <option value="cb">CB - Center Back</option>
    <option value="rwb">RWB - Right Wing Back</option>
    <option value="cdm">CDM - Central Defensive Midfield</option>
    <option value="cm">CM - Center Midfield</option>
    <option value="cam">CAM - Central Attacking Midfield</option>
    <option value="lm">LM - Left Midfield</option>
    <option value="rm">RM - Right Midfield</option>
    <option value="lw">LW - Left Wing</option>
    <option value="rw">RW - Right Wing</option>
    <option value="cf">CF - Center Forward</option>
    <option value="st">ST - Striker</option>
</select>

 <!-- Shooting (SHO) filter -->
 <input type="number" name="sho" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.shooting') }}">

<!-- Country filter (now a text input) -->
<input type="text" name="country" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.country') }}">

<!-- Club filter (now a text input) -->
<input type="text" name="club" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.Club') }}">

<!-- Dribbling (DRI) filter -->
<input type="number" name="dri" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.dribbling') }}">

<!-- Physicality (PHY) filter -->
<input type="number" name="phy" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.physicality') }}">

<!-- League filter -->
<input type="text" name="league" class="form-control mr-sm-2 mb-2" placeholder="{{ __('messages.league') }}">
        
<input type="number" name="ratings" class="form-control mr-sm-2" placeholder="{{ __('messages.minrat') }}">
            <input type="number" name="pac" class="form-control mr-sm-2" placeholder="{{ __('messages.pace') }}"> 
            <!-- Add other filters as needed -->
            <button type="submit" class="btn btn-primary my-2 my-sm-0">{{ __('messages.search') }}</button>
        </form>


        <ul class="navbar-nav ml-auto">
            <!-- Home icon button -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                </a>
            </li>

    <!-- Right-aligned items: Language, User dropdown, Free Agents button -->
    <ul class="navbar-nav ml-auto">
            <!-- Language switcher dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navBarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i> <!-- World icon -->
                </a>
                <div class="dropdown-menu" aria-labelledby="navBarDropdown">
    <a class="dropdown-item" href="{{ url('language/gb') }}"><span class="flag-icon flag-icon-gb mr-2"></span> English </a>
    <a class="dropdown-item" href="{{ url('language/fr') }}"><span class="flag-icon flag-icon-fr mr-2"></span> French</a>
    <a class="dropdown-item" href="{{ url('language/es') }}"><span class="flag-icon flag-icon-es mr-2"></span> Spanish</a>
    <a class="dropdown-item" href="{{ url('language/it') }}"><span class="flag-icon flag-icon-it mr-2"></span> Italian</a>
    <a class="dropdown-item" href="{{ url('language/de') }}"><span class="flag-icon flag-icon-de mr-2"></span> German</a>
    <a class="dropdown-item" href="{{ url('language/ig') }}"><span class="flag-icon flag-icon-ng mr-2"></span> Igbo</a>
</div>

            </li>
   

             <!-- User icon dropdown -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <!-- Font Awesome user icon -->
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @guest
                <a class="dropdown-item" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                <a class="dropdown-item" href="{{ route('register') }}">{{ __('messages.register') }}</a>
        @else
            <!-- Logout Button -->
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('messages.logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
                </div>
            </li>

            @auth
    <li class="nav-item">
    <a class="nav-link" href="{{ route('stats.explanation') }}">{{ __('messages.stats') }}</a>
    </li>
@endauth
    

<li class="nav-item">
    <a class="nav-link" id="themeToggle">
      <i class="fas fa-sun" id="lightIcon"></i>
      <i class="fas fa-moon" id="darkIcon" style="display: none;"></i>
    </a>
</li>

    @auth
    <a href="{{ route('admin.free.agents.show') }}" class="btn btn-primary">{{ __('messages.free') }}</a>
    @endauth

   
<a href="{{ route('favorites.index') }}" class="btn btn-info">{{ __('messages.favorite') }}</a>
</nav>


    </ul>

    
        </div>


        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

  <!-- Chat Tab Button -->
<div id="chatTab" style="position: fixed; bottom: 20px; right: 20px; z-index: 100;">
    <button type="button" onclick="toggleChatForm()">{{ __('messages.chat') }}</button>
    <!-- Chat Form (Initially Hidden) -->
    <div id="chatForm" style="display: none;">
    <form onsubmit="return sendMessage(event)">

            @csrf
            <textarea id="chatMessage" name="message" placeholder="{{ __('messages.message') }}" required></textarea>
            <button type="submit">{{ __('messages.send') }}</button>
        </form>
        <div id="sentMessage" style="display: none; color:  #006400;">{{ __('messages.message_sent') }}</div>
    </div>
</div>

<script>
    function toggleChatForm() {
        var chatForm = document.getElementById("chatForm");
        chatForm.style.display = chatForm.style.display === "none" ? "block" : "none";
    }

    function sendMessage(event) {
        event.preventDefault(); // Prevent the form from submitting
        document.getElementById("sentMessage").style.display = "block"; // Show the "Message Sent" div
        document.getElementById("chatMessage").value = ""; // Clear the message textarea
        setTimeout(() => {
            document.getElementById("sentMessage").style.display = "none"; // Optionally hide the message after a few seconds
        }, 3000); // 3000 milliseconds = 3 seconds
        return false; // Return false to prevent form submission
    }


</script>

<!--footer-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="footer-about col-lg-3 col-md-6">
                <h3>{{ __('messages.about') }}</h3>
                <p>{{ __('messages.mission') }}</p>
            </div>
            <div class="footer-contact col-lg-3 col-md-6">
                <h3>{{ __('messages.contact') }}</h3>
                <ul>
                    <li>{{ __('messages.email') }}</li>
                    <li>{{ __('messages.phone') }}</li>
                    <li>{{ __('messages.address') }}</li>
                </ul>
            </div>
            <div class="footer-social col-lg-3 col-md-6">
                <h3>{{ __('messages.follow') }}</h3>
                <p>{{ __('messages.connected') }}</p>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="footer-legal col-lg-3 col-md-6">
                <h3>{{ __('messages.legal') }}</h3>
                <ul>
                    <li><a href="#">{{ __('messages.privacy') }}</a></li>
                    <li><a href="#">{{ __('messages.terms') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="copy-right">&copy; {{ __('messages.copyright') }}</p>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS, Popper.js, and jQuery (if using Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <!-- Include SweetAlert2 library from CDN in your main layout -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('scripts')
    <script>
   document.addEventListener('DOMContentLoaded', function() {
// Check if dark mode is enabled and apply settings accordingly
    // Your code to run after the DOM is fully loaded
    let darkMode = localStorage.getItem('darkMode'); 
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const navbar = document.querySelector('.navbar'); // Get the navbar element
    const lightIcon = document.getElementById('lightIcon');
    const darkIcon = document.getElementById('darkIcon');

    // Enable Dark Mode
    const enableDarkMode = () => {
        body.classList.add('dark-mode');
        navbar.classList.add('dark-mode'); // Add dark-mode class to navbar
        lightIcon.style.display = 'none';
        darkIcon.style.display = 'inline-block'; // Ensure this matches your display preferences
        localStorage.setItem('darkMode', 'enabled');
    };

    // Disable Dark Mode
    const disableDarkMode = () => {
        body.classList.remove('dark-mode');
        navbar.classList.remove('dark-mode'); // Remove dark-mode class from navbar
        lightIcon.style.display = 'inline-block'; // Ensure this matches your display preferences
        darkIcon.style.display = 'none';
        localStorage.setItem('darkMode', 'disabled');
    };

    // If the user previously enabled darkMode
    if (darkMode === 'enabled') {
        enableDarkMode();
    }

    // Listen for a click on the toggle
    themeToggle.addEventListener('click', () => {
        darkMode = localStorage.getItem('darkMode'); 
        if (darkMode !== 'enabled') {
            enableDarkMode();
        } else {  
            disableDarkMode();
        }
    });
});



</script>
</body>
</html>
