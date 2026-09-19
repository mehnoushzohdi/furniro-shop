<?php get_header(); ?>


<?php

$hero_label = "New Arrival";

$hero_title = "Discover Our New Collection";

$hero_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.";

$hero_button = "BUY NOW";

$hero_image = get_theme_file_uri('images/hero-banner.png');

$range_title = "Browse The Range";

$range_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

$range_categories = get_terms([
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'number'     => 3,
    'orderby'    => 'count',
    'order'      => 'DESC',
]);

$range_categories = is_wp_error($range_categories) ? [] : $range_categories;

$shop_url = wc_get_page_permalink('shop');

$inspiration_title = "50+ Beautiful Rooms Inspiration";

$inspiration_description = "Our designer already made a lot of beautiful prototype of rooms that inspire you";

$inspiration_button = "Explore More";

$products_title = "Our Products";

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

<a href="<?php echo esc_url($shop_url); ?>" class="hero__button">
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

        <?php foreach ($range_categories as $category) : ?>

<a
    href="<?php echo esc_url(get_term_link($category)); ?>"
    class="range__item"
>

    <?php
    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
    $category_image = $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, 'full') : '';
    ?>

    <img
        src="<?php echo esc_url($category_image ?: wc_placeholder_img_src('full')); ?>"
        alt="<?php echo esc_attr($category->name); ?>"
        class="range__image"
    >

    <h3 class="range__name">
        <?php echo esc_html($category->name); ?>
    </h3>

</a>

<?php endforeach; ?>

        </div>

    </div>
</section>

<!-- Our Products -->
<section class="products">
    <div class="container">

    <h2 class="products__title"><?php echo $products_title; ?></h2>

        <div class="products__grid">

        <?php
$home_products = wc_get_products([
    'limit'  => 8,
    'status' => 'publish',
]);

?>

<?php if ($home_products) : ?>
<?php foreach ($home_products as $product) : ?>

    <article class="product-card">

        <div class="product-card__image-wrapper">

            <img
                src="<?php echo esc_url(get_the_post_thumbnail_url($product->get_id(), 'full') ?: wc_placeholder_img_src('full')); ?>"
                alt="<?php echo esc_attr($product->get_name()); ?>"
            >

            <?php if ($product->is_on_sale()) : ?>
                <span class="product-card__badge product-card__badge--sale">
                    Sale
                </span>
            <?php endif; ?>

        </div>

        <div class="product-card__content">

            <a href="<?php echo esc_url($product->get_permalink()); ?>">

                <h3 class="product-card__name">
                    <?php echo esc_html($product->get_name()); ?>
                </h3>

            </a>

            <p class="product-card__description">
                <?php echo esc_html(wp_strip_all_tags($product->get_short_description())); ?>
            </p>

            <div class="product-card__price">

                <span class="product-card__current-price">
                    <?php echo wc_price($product->get_price()); ?>
                </span>

                <?php if ($product->is_on_sale()) : ?>

                    <span class="product-card__old-price">
                        <?php echo wc_price($product->get_regular_price()); ?>
                    </span>

                <?php endif; ?>

            </div>

        </div>

    </article>

<?php endforeach; ?>
<?php else : ?>
    <p class="products__empty">No products are available yet.</p>
<?php endif; ?>

        </div>

        <div class="products__button-wrapper">
        <a href="<?php echo esc_url($shop_url); ?>" class="products__button">
            Show More
        </a>
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
<?php echo $inspiration_description; ?>
</p>

<a href="#" class="inspiration__button">
    <?php echo $inspiration_button; ?>
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

<?php get_footer(); ?>
