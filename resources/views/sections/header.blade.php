<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
  </a>


  <section class="navbar">

    <div class="container">
        <div class="logos">
              <div class="logo1"></div>
              <div class="logo2"></div>
              <div class="logo3"></div>
              <span>Architectuur</span>
        </div>

        <div class="searchbar">
              <input type="text" placeholder="Waar ben je naar op zoek?">
                <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="burger-menu">

            <div class="icon">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>

            <div class="navigation">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">PROJECTS</a>
                <a href="#">BLOG</a>
                <a href="#">CUSTOMERS</a>
                <a href="#">CONTACT</a>
            </div>
            
        </div>
    </div>
  </section>



  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
