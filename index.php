<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Furniro Shop</title>

    <?php wp_head(); ?>
</head>
<body>
<?php
include 'header.php';
?>


<?php

$hero_label = "New Arrival";

$hero_title = "Discover Our New Collection";

$hero_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.";

$hero_button = "BUY NOW";

$hero_image = get_theme_file_uri('images/hero-banner.png');

$range_title = "Browse The Range";

$range_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

$range_dining_image = get_theme_file_uri('images/range/dining.png');

$range_dining_name = "Dining";

$range_living_image = get_theme_file_uri('images/range/living.png');

$range_living_name = "Living";

$range_bedroom_image = get_theme_file_uri('images/range/bedroom.png');

$range_bedroom_name = "Bedroom";

$products_title = "Our Products";

$product1_image = get_theme_file_uri('images/products/product-1.png');

$product1_name = "Syltherine";

$product1_description = "Stylish cafe chair";

$product1_price = "Rp 2.500.000";

$product1_old_price = "Rp 3.500.000";

$product1_discount = "-30%";

$product2_image = get_theme_file_uri('images/products/product-2.png');

$product2_name = "Leviosa";

$product2_description = "Stylish dining chair";

$product2_price = "Rp 3.000.000";

$product2_old_price = "Rp 4.000.000";

$product2_discount = "-25%";

$product3_image = get_theme_file_uri('images/products/product-3.png');

$product3_name = "Lolito";

$product3_description = "Luxury big sofa";

$product3_price = "Rp 7.000.000";

$product3_old_price = "Rp 14.000.000";

$product3_discount = "-50%";

$product4_image = get_theme_file_uri('images/products/product-4.png');

$product4_name = "Respira";

$product4_description = "Outdoor bar table and stool";

$product4_price = "Rp 500.000";

$product4_old_price = "";

$product4_discount = "";

$product5_image = get_theme_file_uri('images/products/product-5.png');

$product5_name = "Grifo";

$product5_description = "Night lamp";

$product5_price = "Rp 1.500.000";

$product5_old_price = "";

$product5_discount = "";

$product6_image = get_theme_file_uri('images/products/product-6.png');

$product6_name = "Muggo";

$product6_description = "Small mug";

$product6_price = "Rp 150.000";

$product6_old_price = "";

$product6_discount = "";

$product7_image = get_theme_file_uri('images/products/product-7.png');

$product7_name = "Pingky";

$product7_description = "Cute bed set";

$product7_price = "Rp 7.000.000";

$product7_old_price = "Rp 14.000.000";

$product7_discount = "-50%";

$product8_image = get_theme_file_uri('images/products/product-8.png');

$product8_name = "Potty";

$product8_description = "Minimalist flower pot";

$product8_price = "Rp 500.000";

$product8_old_price = "";

$product8_discount = "";

$inspiration_title = "50+ Beautiful Rooms Inspiration";

$inspiration_text = "Our designer already made a lot of beautiful prototype of rooms that inspire you";

$inspiration_image = get_theme_file_uri('images/inspiration/Rectangle 24.png');

$inspiration_category = "Bed Room";

$inspiration_caption_title = "Inner Peace";

$inspiration_number = "01";

$inspiration_side_image = get_theme_file_uri('images/inspiration/Rectangle 25.png');

$share_setup_subtitle = "Share your setup with";

$share_setup_title = "#FuniroFurniture";

$share_image_1 = get_theme_file_uri('images/share/Rectangle 36.png');

$share_image_2 = get_theme_file_uri('images/share/Rectangle 38.png');

$share_image_3 = get_theme_file_uri('images/share/Rectangle 37.png');

$share_image_4 = get_theme_file_uri('images/share/Rectangle 39.png');

$share_image_5 = get_theme_file_uri('images/share/Rectangle 40.png');

$share_image_6 = get_theme_file_uri('images/share/Rectangle 43.png');

$share_image_7 = get_theme_file_uri('images/share/Rectangle 41.png');

$share_image_8 = get_theme_file_uri('images/share/Rectangle 44.png');

$share_image_9 = get_theme_file_uri('images/share/Rectangle 45.png');
?>

<!-- Hero Banner -->
<section class="hero">
    <div class="hero__image">
    <img src="<?php echo $hero_image; ?>" alt="Furniro New Collection">
    </div>

    <div class="hero__content">
    <span class="hero__label"><?php echo $hero_label; ?></span>

    <h1 class="hero__title">
    <?php echo $hero_title; ?>
</h1>

<p class="hero__text">
    <?php echo $hero_text; ?>
</p>

<a href="#" class="hero__button">
    <?php echo $hero_button; ?>
</a>
    </div>
</section> 

<!-- Browse The Range -->
<section class="range">
    <div class="range__container">

        <div class="range__header">
        <h2 class="range__title"><?php echo $range_title; ?></h2>

        <p class="range__text">
    <?php echo $range_text; ?>
</p>
        </div>

        <div class="range__items">

            <a href="#" class="range__item">
                <img
                    src="<?php echo $range_dining_image; ?>"
                    alt="Dining furniture"
                    class="range__image"
                >
                <h3 class="range__name"><?php echo $range_dining_name; ?></h3>
            </a>

            <a href="#" class="range__item">
                <img
                    src="<?php echo $range_living_image; ?>"
                    alt="Living room furniture"
                    class="range__image"
                >
                <h3 class="range__name"><?php echo $range_living_name; ?></h3>
            </a>

            <a href="#" class="range__item">
                <img
                    src="<?php echo $range_bedroom_image; ?>"
                    alt="Bedroom furniture"
                    class="range__image"
                >
                <h3 class="range__name"><?php echo $range_bedroom_name; ?></h3>
            </a>

        </div>

    </div>
</section>

<!-- Our Products -->
<section class="products">
    <div class="container">

    <h2 class="products__title"><?php echo $products_title; ?></h2>

        <div class="products__grid">

            <!-- Product 1 -->
<article class="product-card">

<div class="product-card__image-wrapper">
    <img src="<?php echo $product1_image; ?>" alt="<?php echo $product1_name; ?>">

    <span class="product-card__badge product-card__badge--sale">
        <?php echo $product1_discount; ?>
    </span>
</div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product1_name; ?></h3>
                <p class="product-card__description"><?php echo $product1_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product1_price; ?></span>
                    <span class="product-card__old-price"><?php echo $product1_old_price; ?></span>
                    </div>
                </div>
            </article>


            <!-- Product 2 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product2_image; ?>" alt="<?php echo $product2_name; ?>">

                    <div class="product-card__hover">
                        <button class="product-card__cart" type="button">
                            Add to cart
                        </button>

                        <div class="product-card__actions">
                            <button type="button">
                                <i class="bi bi-share"></i>
                                Share
                            </button>

                            <button type="button">
                                <i class="bi bi-arrow-left-right"></i>
                                Compare
                            </button>

                            <button type="button">
                                <i class="bi bi-heart"></i>
                                Like
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product2_name; ?></h3>
                <p class="product-card__description"><?php echo $product2_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product2_price; ?></span>
                    </div>
                </div>
            </article>


            <!-- Product 3 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product3_image; ?>" alt="<?php echo $product3_name; ?>">
                <span class="product-card__badge product-card__badge--sale">
    <?php echo $product3_discount; ?>
</span>
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product3_name; ?></h3>
                <p class="product-card__description"><?php echo $product3_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product3_price; ?></span>
                    <span class="product-card__old-price"><?php echo $product3_old_price; ?></span>
                    </div>
                </div>
            </article>


            <!-- Product 4 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product4_image; ?>" alt="<?php echo $product4_name; ?>">
                    <span class="product-card__badge product-card__badge--new">New</span>
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product4_name; ?></h3>
                <p class="product-card__description"><?php echo $product4_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product4_price; ?></span>
                    </div>
                </div>
            </article>


            <!-- Product 5 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product5_image; ?>" alt="<?php echo $product5_name; ?>">
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product5_name; ?></h3>
                <p class="product-card__description"><?php echo $product5_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product5_price; ?></span>
                    </div>
                </div>
            </article>


           <!-- Product 6 -->
<article class="product-card">

<div class="product-card__image-wrapper">
    <img src="<?php echo $product6_image; ?>" alt="<?php echo $product6_name; ?>">
    <span class="product-card__badge product-card__badge--new">New</span>
</div>

<div class="product-card__content">
    <h3 class="product-card__name"><?php echo $product6_name; ?></h3>

    <p class="product-card__description">
        <?php echo $product6_description; ?>
    </p>

    <div class="product-card__price">
        <span class="product-card__current-price">
            <?php echo $product6_price; ?>
        </span>
    </div>
</div>

</article>


            <!-- Product 7 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product7_image; ?>" alt="<?php echo $product7_name; ?>">
                    <span class="product-card__badge product-card__badge--sale">-50%</span>
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product7_name; ?></h3>
                <p class="product-card__description"><?php echo $product7_description; ?></p>

                    <div class="product-card__price">
                    <span class="product-card__current-price"><?php echo $product7_price; ?></span>
                    <span class="product-card__old-price"><?php echo $product7_old_price; ?></span>
                    </div>
                </div>
            </article>


            <!-- Product 8 -->
            <article class="product-card">
                <div class="product-card__image-wrapper">
                <img src="<?php echo $product8_image; ?>" alt="<?php echo $product8_name; ?>">
                <span class="product-card__badge product-card__badge--new">New</span>
                </div>

                <div class="product-card__content">
                <h3 class="product-card__name"><?php echo $product8_name; ?></h3>
<p class="product-card__description"><?php echo $product8_description; ?></p>

<div class="product-card__price">
    <span class="product-card__current-price"><?php echo $product8_price; ?></span>
</div>
                </div>
            </article>

        </div>

        <div class="products__button-wrapper">
            <button type="button" class="products__button">
                Show More
            </button>
        </div>

    </div>
</section>


<!-- Inspiration -->
<section class="inspiration">
    <div class="inspiration__container">

        <!-- Content -->
        <div class="inspiration__content">

        <h2 class="inspiration__title">
    <?php echo $inspiration_title; ?>
</h2>

<p class="inspiration__description">
    <?php echo $inspiration_text; ?>
</p>

            <a href="#" class="inspiration__button">
                Explore More
            </a>

        </div>


        <!-- Gallery -->
        <div class="inspiration__gallery">

            <!-- Large Image -->
            <div class="inspiration__main">

            <img
    src="<?php echo $inspiration_image; ?>"
    alt="Bedroom inspiration"
    class="inspiration__image"
>

                <!-- Image Caption -->
                <div class="inspiration__caption">

                    <div class="inspiration__caption-info">

                        <div class="inspiration__caption-meta">
                        <span class="inspiration__caption-number">
    <?php echo $inspiration_number; ?>
</span>

                            <span class="inspiration__caption-line"></span>

                            <span class="inspiration__caption-category">
    <?php echo $inspiration_category; ?>
</span>
                        </div>

                        <h3 class="inspiration__caption-title">
    <?php echo $inspiration_caption_title; ?>
</h3>

                    </div>

                    <button
                        type="button"
                        class="inspiration__caption-arrow"
                        aria-label="Next room"
                    >
                        <i class="bi bi-arrow-right"></i>
                    </button>

                </div>

            </div>


            <!-- Right Image -->
            <div class="inspiration__side">

                <img
                    src="<?php echo $inspiration_side_image; ?>"
                    alt="Dining room inspiration"
                    class="inspiration__side-image"
                >

                <!-- Navigation Dots -->
                <div class="inspiration__navigation">

                    <button
                        type="button"
                        class="inspiration__dot inspiration__dot--active"
                        aria-label="Slide 1"
                    ></button>

                    <button
                        type="button"
                        class="inspiration__dot"
                        aria-label="Slide 2"
                    ></button>

                    <button
                        type="button"
                        class="inspiration__dot"
                        aria-label="Slide 3"
                    ></button>

                    <button
                        type="button"
                        class="inspiration__dot"
                        aria-label="Slide 4"
                    ></button>

                </div>

            </div>

        </div>

    </div>
</section>




<!-- Share Your Setup -->
<section class="share-setup">

    <div class="share-setup__header">
    <p class="share-setup__subtitle">
    <?php echo $share_setup_subtitle; ?>
</p>

<h2 class="share-setup__title">
    <?php echo $share_setup_title; ?>
</h2>
    </div>


    <div class="share-setup__gallery">

        <div class="share-setup__item share-setup__item--1">
        <img
    src="<?php echo $share_image_1; ?>"
    alt="Funiro furniture interior"
>
        </div>

        <div class="share-setup__item share-setup__item--2">
            <img
                src="<?php echo $share_image_2; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--3">
            <img
                src="<?php echo $share_image_3; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--4">
            <img
                src="<?php echo $share_image_4; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--5">
            <img
                src="<?php echo $share_image_5; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--6">
            <img
                src="<?php echo $share_image_6; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--7">
            <img
                src="<?php echo $share_image_7; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--8">
            <img
                src="<?php echo $share_image_8; ?>"
                alt="Funiro furniture interior"
            >
        </div>

        <div class="share-setup__item share-setup__item--9">
            <img
                src="<?php echo $share_image_9; ?>"
                alt="Funiro furniture interior"
            >
        </div>

    </div>

</section>

<?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

        

    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>