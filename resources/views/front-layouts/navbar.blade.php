<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio</h1>
      </a>

      @php 
      $url= request()->route()->uri()
      @endphp
        <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class={{$url==="/"?'active':""}}>Home</a></li>
          <li><a href="/about" class={{$url=="about"?'active':""}}>About</a></li>
          <li><a href="/resume" class={{$url=="resume"?'active':""}}>Resume</a></li>
          <li><a href="/services" class={{$url=="services"?'active':""}}>Services</a></li>
          <li><a href="/portfolio" class={{$url=="portfolio"?'active':""}}>Portfolio</a></li>
          <li><a href="/contact" class={{$url=="contact"?'active':""}}>Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>