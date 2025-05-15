
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
  </a>


  <section class="navbar">

    <div class="container">
        <div class="logo">
              <div class="img-wrapper">
                <img src="wp-content/themes/sage/resources/images/architect-logo.png" alt="">
              </div>
              <h1>Architectuur</h1>
        </div>

        <div class="right">
        <div class="searchbar">
              <input type="text" placeholder="Waar ben je naar op zoek?">
                <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div id="menu-icon" class="burger-menu">
                  <i class="fa-solid fa-bars" style="color: #888888;"></i>
        </div>
        </div>
    </div>
     <div class="navigation">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">PROJECTS</a>
                <a href="#">BLOG</a>
                <a href="#">CUSTOMERS</a>
                <a href="#">CONTACT</a>
            </div>
  </section>



  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
