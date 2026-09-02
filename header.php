<header class="site-header">
    <div class="container-fluid site-header__container">

        <!-- Logo -->
        <a href="index.php" class="site-header__logo" aria-label="Furniro Home">
        <img src="<?php echo get_theme_file_uri('images/svg/logo.svg'); ?>" alt="Furniro">
        </a>

        <!-- Desktop Navigation -->
        <nav class="site-header__nav" aria-label="Main navigation">
            <ul class="site-header__menu">
                <li class="site-header__menu-item">
                <a href="index.php" class="site-header__link">Home</a>
                </li>

                <li class="site-header__menu-item">
                    <a href="#" class="site-header__link">Shop</a>
                </li>

                <li class="site-header__menu-item">
                    <a href="#" class="site-header__link">About</a>
                </li>

                <li class="site-header__menu-item">
                    <a href="#" class="site-header__link">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Desktop Actions -->
        <div class="site-header__actions">

            <button class="site-header__action" type="button" aria-label="Account">
                <i class="bi bi-person"></i>
            </button>

            <button class="site-header__action" type="button" aria-label="Search">
                <i class="bi bi-search"></i>
            </button>

            <button class="site-header__action" type="button" aria-label="Wishlist">
                <i class="bi bi-heart"></i>
            </button>

            <button class="site-header__action" type="button" aria-label="Shopping cart">
                <i class="bi bi-cart3"></i>
            </button>

            <!-- Mobile Menu Button -->
            <button
                class="mobile-menu-toggle"
                type="button"
                aria-label="Open menu"
                aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>

        </div>

    </div>

    <!-- Mobile Menu -->
    <nav class="mobile-menu" aria-label="Mobile navigation">

    <a href="index.php">Home</a>
        <a href="#products">Shop</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>

        <!-- Mobile Actions -->
        <div class="mobile-menu__actions">

            <a href="#" aria-label="Account">
                <i class="bi bi-person"></i>
            </a>

            <a href="#" aria-label="Search">
                <i class="bi bi-search"></i>
            </a>

            <a href="#" aria-label="Wishlist">
                <i class="bi bi-heart"></i>
            </a>

            <a href="#" aria-label="Cart">
                <i class="bi bi-cart3"></i>
            </a>

        </div>

    </nav>

</header>