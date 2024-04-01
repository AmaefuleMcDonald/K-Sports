<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Sports Social</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Load Font Awesome -->
    <!-- Flag Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />



    

    <style>

        .navbar {
            background-color: #87CEFA; /* Light blue background color for the navbar */
            color: white;
        }

        body.dark-mode .navbar {
    background-color: #000000; /* Black background color */
    color: white;
}

body.dark-mode .navbar .navbar-brand,
body.dark-mode .navbar .nav-link {
    color: #ffffff; /* White text color */
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
  
   @keyframes shake {
  0% { transform: translate(0px, 0px) rotate(0deg); }
  10% { transform: translate(-1px, -1px) rotate(-1deg); }
  20% { transform: translate(-2px, 0px) rotate(1deg); }
  30% { transform: translate(1px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-2px, 1px) rotate(0deg); }
  70% { transform: translate(2px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.shake {
  display: inline-block;
  animation: shake 0.5s; /* Adjust duration as needed */
  animation-iteration-count: infinite;
}
.did-you-know {
    margin: 50px 0;
    padding: 20px;
    background-color: #003366; /* Example background */
    border-left: 5px solid #009688; /* Example styling */
}

.video-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Full width of its container */
    height: 50vh; /* 50% of the viewport height */
    overflow: hidden;
}

#hoverVideo {
    width: 100%; /* Full width of the wrapper */
    height: auto; /* Maintain aspect ratio */
    max-height: 100%; /* Ensure it does not exceed the wrapper's height */
}

.video-container {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%; /* Aspect Ratio (16:9) */
  width: 100%; /* Full width */
  height: auto; /* Auto height */
}

#hoverVideo {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  object-fit: cover; /* Cover the container without losing aspect ratio */
}

.carousel-item img {
    height: 500px; /* Set a fixed height */
    object-fit: cover; /* Cover the area without losing aspect ratios */
    width: 50px;
}

/* news headline */
.carousel-caption {
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
  left: 0;
  right: 0;
  bottom: 0;
  text-align: left;
}

.carousel-caption h5 {
  color: #fff; /* White text color */
}

/* Custom class for removing gutters */
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden; /* Prevents horizontal scrollbar */
}

.container-fluid, .row, .no-gutters {
  padding-right: 0 !important;
  padding-left: 0 !important;
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.carousel-inner > .carousel-item > img {
  width: 100%;
  object-fit: cover; /* This ensures the image covers the area without stretching */
}

@keyframes popText {
  0%, 100% {
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.2); /* Adjust scale value for more/less popping */
  }
}

.gradient-text {
    background: linear-gradient(to right, #4f46e5, #047857); /* From indigo-600 to green-900 for a thicker green appearance */
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent; /* Make the text transparent to show the gradient */
    padding: 0.25rem; /* px-2 equivalent */
    display: inline; /* or 'inline-block' depending on your layout needs */
}

#darkIcon:hover {
    color: #007bff; /* Bootstrap primary blue color, or choose your own hex color */
}

#navBarDropdown:hover{
    color: #007bff; /* Bootstrap primary blue color, or choose your own hex color */
}

.nav-link:hover .fa-user {
    color: #007bff; /* Change color on hover */
   }

    </style>
</head>
<!-- Add more as needed -->
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        $('.did-you-know').each(function(i) {
            var bottom_of_element = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if(bottom_of_window > bottom_of_element) {
                $(this).fadeIn();
            }
        });
    });
});
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="K-Sports Social Logo" width="150" height="100">
    </a>

    <!-- Toggler/collapsible Button -->
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
            <li class="nav-item" id="home">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                </a>
            </li>
    

    <!-- Right-aligned items: Language, User dropdown, Free Agents button -->
    <ul class="navbar-nav ml-auto">
            <!-- Language switcher dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navBarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <!-- Chat Tab Button -->
<div id="chatTab" style="position: fixed; bottom: 20px; right: 20px; z-index: 100;">
    <button onclick="toggleChatForm()">{{ __('messages.chat') }}</button>
    <!-- Chat Form (Initially Hidden) -->
    <div id="chatForm" style="display: none;">
        <form action="{{ route('send.chat') }}" method="POST">
            @csrf
            <textarea name="message" placeholder="{{ __('messages.message') }}" required></textarea>
            <button type="submit">{{ __('messages.send') }}</button>
        </form>
    </div>
</div>

<script>
    function toggleChatForm() {
        var chatForm = document.getElementById("chatForm");
        chatForm.style.display = chatForm.style.display === "none" ? "block" : "none";
    }
</script>


@section('content')
    <header class="text-center my-4">
        <h1><span class="gradient-text">{{ __('messages.welcome') }}</span></h1>
        <p>{{ __('messages.followup') }}</p>
    </header>
</form>
        </div>
    </section>

    <!--Video-->
    <div class="video-container">
  <video id="hoverVideo" loop muted>
    <source src="{{ asset('videos/Andrew.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>


<script>
document.addEventListener('DOMContentLoaded', (event) => {
  const video = document.getElementById('hoverVideo');

  video.addEventListener('mouseover', function() {
    video.play();
  });

  video.addEventListener('mouseout', function() {
    video.pause();
  });

  video.addEventListener('ended', function() {
    setTimeout(() => {
      video.play();
    }, 35000 - video.duration * 1000); // Adjust based on video length to restart after 35 seconds
  });
});
</script>




</br>
</br>
</br>
</br>




<div class="container-fluid">
<div class="row no-gutters">
 <!-- Image Gallery Carousel -->
 <div class="col-md-6">
 <div id="imageGalleryCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#imageGalleryCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="1" ></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="2"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="3"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="4"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="5"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="6"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="7"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="7"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="8"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="9"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="10"></li>
    <li data-target="#imageGalleryCarousel" data-slide-to="11"></li>
    <!-- Add more indicators as per the number of images -->
  </ol>

    <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Andrew.jpeg" alt="Image 1" class="d-block w-100">
      </div>

    <div class="carousel-item">
    
      <img src="https://images.pexels.com/photos/3306490/pexels-photo-3306490.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image 2" class="d-block w-100">
    </div>

    <div class="carousel-item">
    
    <img src="https://images.pexels.com/photos/1884574/pexels-photo-1884574.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="Image 2">
    </div>

    <div class="carousel-item">
   
    <img src="https://cdn.pixabay.com/photo/2023/11/07/20/24/cristiano-ronaldo-8373364_1280.jpg" class="d-block w-100" alt="Image 3">
    </div>
    <div class="carousel-item">
    
    <img src="https://media.gettyimages.com/id/1723098022/photo/england-players-and-mascots-line-up-ahead-of-the-international-friendly-football-match.jpg?s=612x612&w=0&k=20&c=xJL3SgSVCr0ttHOMaGD4wReQP3E5D9R33XL0ui9so0I="class="d-block w-100" alt="Image 4">
    </div>
 <div class="carousel-item">
 
    <img src="https://media.gettyimages.com/id/1793639023/photo/london-england-thiago-silva-of-chelsea-kisses-reece-james-of-chelsea-as-they-celebrate-their.jpg?s=612x612&w=0&k=20&c=BEwHsJb_zhTXPvxTZYgsnR_pD5k2MjwWxG2XGdPrli0=" class="d-block w-100" alt="Image 5">
    </div>
    <div class="carousel-item">
 
    <img src="https://media.gettyimages.com/id/1247511945/photo/london-england-manchester-united-players-celebrate-victory-after-the-carabao-cup-final-match.jpg?s=612x612&w=0&k=20&c=xoU5VjTVLd40Or-ihr4NQJWuTTyT1tCEOAGaDome8WY=" class="d-block w-100" alt="Image 6">
    </div>
    <div class="carousel-item">
    
    <img src="https://media.gettyimages.com/id/1245516370/photo/topshot-frances-midfielder-aurelien-tchouameni-celebrates-scoring-his-teams-first-goal-during.jpg?s=612x612&w=0&k=20&c=AL-6Ltmt3iBfaVSlxXxON574uV-buB-bBDLtgnng8nY=" class="d-block w-100" alt="Image 7">
    </div>
    <div class="carousel-item">
   
    <img src="https://media.gettyimages.com/id/1807913410/photo/topshot-ac-milans-nigerian-midfielder-samuel-chukwueze-celebrates-after-scoring-the-teams.jpg?s=612x612&w=0&k=20&c=CcX1Mo_QIFo6CCNhFJOcefFBMkNIOG-O2SIHl38QQVw=" class="d-block w-100" alt="Image 8">
    </div>
    <div class="carousel-item">
   
    <img src="https://media.gettyimages.com/id/1502300400/photo/dublin-ireland-claire-oriordan-of-the-republic-of-ireland-defended-by-barbra-banda-of-zambia.jpg?s=612x612&w=0&k=20&c=n5wsK1EMOGMWKyCxYn3owRkPCj0zjk9EGepKuk5r0_o=" class="d-block w-100" alt="Image 9">
    </div>
    <div class="carousel-item">
   
    <img src="https://media.gettyimages.com/id/1245841906/photo/topshot-a-visitor-looks-at-a-picture-of-brazils-football-legend-edson-arantes-do-nascimento.jpg?s=612x612&w=0&k=20&c=T917n6cclrXxhA6n4LS3oAw8m-S2f0rLqTD5nCebjzg=" class="d-block w-100" alt="Image 10">
    </div>
    <div class="carousel-item">
   
    <img src="https://media.gettyimages.com/id/1253960184/photo/allianz-stadium-torino-italy-youssef-en-nesyri-of-sevilla-fc-looks-dejected-during-the-uefa.jpg?s=612x612&w=0&k=20&c=GgKuIegyM6Ilu00L4E4OtxtmUC1-e45vibPNrI6n_Jk=" class="d-block w-100" alt="Image 11">
    </div>
        <!-- Left and right controls -->
<a class="carousel-control-prev" href="#imageGalleryCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageGalleryCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>
</div>

 <!--news -->
 <div class="col-md-6">
 <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="{{ url('/news/news1') }}" >
        <img src="https://media.gettyimages.com/id/1442727498/photo/doha-qatar-fifa-president-gianni-infantino-speaks-during-a-press-conference-at-the-main-media.jpg?s=612x612&w=0&k=20&c=JEDXqa7jz9hpVUIVdtDFa9da5dGKTpA3KPUx9aRSF1g=" alt="News 1" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5> {{ __('messages.Headline1') }}</h5>
        </div>
      </a>
    </div>
    <div class="carousel-item">
    <a href="{{ url('/news/news2') }}" >
        <img src="https://media.gettyimages.com/id/1446644017/photo/doha-qatar-headset-of-referee-during-the-fifa-world-cup-qatar-2022-round-of-16-match-between.jpg?s=612x612&w=0&k=20&c=h6C6Y0INmK1OXtzKyCIrG9jKKf3urvV-TbPkflNxHbc=" alt="News 2" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ __('messages.Headline2') }}</h5>
        </div>
      </a>
    </div>
    <div class="carousel-item">
      <a href="{{ url('/news/news3') }}" >
        <img src="https://media.gettyimages.com/id/1996043769/photo/alcala-de-henares-spain-linda-caicedo-of-real-madrid-controls-the-ball-during-the-spanish.jpg?s=612x612&w=0&k=20&c=mEptdrneFGu-EE0AQdz8rcqIvDAB5bmGzrtP5-Ury1c=" alt="News 2" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ __('messages.Headline3') }}</h5>
        </div>
      </a>
    </div>
    <!-- More carousel items for other news -->
  </div>
</div>
</div>
</div>
</div>

<!-- Did you know -->
<div class="animation-wrapper">
    <div id="Coach"></div>
</div>
<div class="did-you-know hidden">
    <p class="bigger-text">{{ __('messages.did') }}</p>
    <div class="comments">
        <div class ="big-text">
        <p class="comment-item hidden" >{{ __('messages.Zlatan') }}</p>
        <p class="comment-item hidden">{{ __('messages.Gary') }}</p>
        <p class="comment-item hidden">{{ __('messages.Madrid') }}</p>
    </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const comments = document.querySelectorAll('.comment-item');
    let index = 0;

    function cycleComments() {
        comments.forEach((comment, i) => {
            setTimeout(() => {
                comment.classList.remove('hidden', 'fade-out');
                comment.classList.add('fade-in');
            }, i * 2000); // Show next comment every 2 seconds
        });

        // Hide all comments after showing the last one and restart
        setTimeout(() => {
            comments.forEach(comment => {
                comment.classList.remove('fade-in');
                comment.classList.add('fade-out');
            });
            // After all have faded out, reset to first comment after a brief delay
            setTimeout(() => {
                comments.forEach(comment => comment.classList.add('hidden'));
                index = 0; // Reset index for next cycle
                cycleComments(); // Restart the cycle
            }, 2000); // Wait for the last fade-out to complete
        }, comments.length * 2000); // Time it to start after the last comment has been shown
    }

    cycleComments(); // Start the cycle
});
</script>

<!-- Goal animation -->
<div class="goal-animation">
    <i class="fas fa-futbol ball"></i> <!-- Football icon -->
    <img src="data:image/png;base64,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" alt="Goal Post" class="goal-post"> <!-- Image for goal post -->
    <div class="comment hidden">{{ __('messages.right') }}</div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const comments = [
        window.i18n.messages['explore_talent'], // "Explore our wealth of talent"
        window.i18n.messages['join_us'],        // "Join us today and get scouted"
        window.i18n.messages['rated_star']      // "We are rated 5 star"
    ];
    let commentIndex = 0;
    const commentDiv = document.querySelector('.comment');
    const ball = document.querySelector('.ball');

    setInterval(() => {
        commentDiv.textContent = comments[commentIndex % comments.length];
        commentIndex++;
    }, 4000);

    ball.addEventListener('animationiteration', (e) => {
        if (e.animationName === 'rollBall') {
            ball.style.animation = 'none';
            setTimeout(() => {
                ball.style.animation = 'rollBall 3s forwards, bounce 4s infinite alternate ease-in-out';
                ball.style.animationDelay = '0s, 1s';
            }, 0);
        }
    });
});

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


    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.9/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Include SweetAlert2 library from CDN in your main layout -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
    document.addEventListener("DOMContentLoaded", (event) => {
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
<script src="{{ route('assets.lang') }}"></script>

</body>

</html>
