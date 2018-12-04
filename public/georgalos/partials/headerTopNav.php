<nav id="main-nav" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- Logo starts -->
            <a class="navbar-brand logoMobil" href="/">
                <img src="assets/imagesHQ/footer-logo-02.png" alt="Logo">
            </a>
            <!-- Logo Ends -->

            <!-- Responsive Menu button starts -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Responsive Menu button Ends -->
        </div>

        <!-- Navigation starts -->
        <div class="navbar-collapse collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right main-navigation">

                <li class="<?php echo $site == 'empresa' ? 'active' : '' ?>"><a href="/empresa">EMPRESA</a></li>
                <li class="<?php echo $site == 'productos' ? 'active' : '' ?>" ><a href="#about">PRODUCTOS</a></li>
                <li class="<?php echo $site == 'recetas' ? 'active' : '' ?>"><a href="#portfolio">RECETAS</a></li>
                <li class="<?php echo $site == 'novedades' ? 'active' : '' ?>"><a href="#resume">NOVEDADES</a></li>
                <!-- <li class="<?php echo $site == 'empresa' ? 'active' : '' ?>"><a href="#blog">Blog</a></li> -->
                <li class="<?php echo $site == 'contacto' ? 'active' : '' ?>"><a href="#contact">CONTACTO</a></li>
            </ul>
        </div>
        <!-- Navigation Ends -->
    </div>
</nav>
