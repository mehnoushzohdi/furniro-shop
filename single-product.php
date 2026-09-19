<?php
global $product;

if (! $product || ! is_a($product, 'WC_Product')) {
    $product = wc_get_product(get_the_ID());
}
if (! $product) {
    return;
}

$shop_url = wc_get_page_permalink('shop');

get_header();
?>

<!-- ================= BREADCRUMB ================= -->

<section class="product-breadcrumb">

    <div class="product-breadcrumb__container">

        <a href="<?php echo esc_url(home_url('/')); ?>">
            Home
        </a>

        <i class="bi bi-chevron-right"></i>

        <a href="<?php echo esc_url($shop_url); ?>">
            Shop
        </a>

        <i class="bi bi-chevron-right"></i>

        <span>
            <?php echo esc_html($product->get_name()); ?>
        </span>

    </div>

</section>



<!-- ================= PRODUCT ================= -->

<main class="product-page">


    <section class="product-main">

        <div class="product-main__container">


            <!-- ================= PRODUCT GALLERY ================= -->

            <div class="product-gallery">


                <!-- Thumbnails -->

                <div class="product-gallery__thumbnails">


                <?php
$image_ids = array_merge(
    [$product->get_image_id()],
    $product->get_gallery_image_ids()
);

$image_ids = array_filter(array_unique($image_ids));

if (! $image_ids) {
    $image_ids = [0];
}
?>

<?php foreach (array_slice($image_ids, 0, 5) as $index => $image_id) : ?>

    <button
        type="button"
        class="product-gallery__thumbnail <?php echo $index === 0 ? 'product-gallery__thumbnail--active' : ''; ?>">

        <img
            src="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'full') ?: wc_placeholder_img_src('full')); ?>"
            alt="<?php echo esc_attr($product->get_name()); ?>">

    </button>

<?php endforeach; ?>

                </div>



                <!-- Main Image -->

                <div class="product-gallery__main">

                    <img
                        src="<?php echo esc_url(wp_get_attachment_image_url($product->get_image_id(), 'full') ?: wc_placeholder_img_src('full')); ?>"
                        alt="<?php echo esc_attr($product->get_name()); ?>"
                        class="product-gallery__main-image">

                </div>


            </div>



            <!-- ================= PRODUCT INFO ================= -->

            <div class="product-info">


            <h1 class="product-info__title">
    <?php echo esc_html($product->get_name()); ?>
</h1>


<p class="product-info__price">
    <?php echo wc_price($product->get_price()); ?>
</p>



                <!-- Rating -->

                <div class="product-info__rating">

                    <div class="product-info__stars">

                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>

                    </div>

                    <span class="product-info__rating-divider"></span>

                    <span class="product-info__reviews">
                        5 Customer Review
                    </span>

                </div>



                <!-- Description -->

                <p class="product-info__description">

    <?php echo esc_html(wp_strip_all_tags($product->get_short_description())); ?>

</p>



                <!-- Size -->

                <div class="product-option">

                    <h3 class="product-option__title">
                        Size
                    </h3>


                    <div class="product-option__sizes">

                        <button
                            type="button"
                            class="product-option__size product-option__size--active">
                            L
                        </button>

                        <button
                            type="button"
                            class="product-option__size">
                            XL
                        </button>

                        <button
                            type="button"
                            class="product-option__size">
                            XS
                        </button>

                    </div>

                </div>



                <!-- Color -->

                <div class="product-option">

                    <h3 class="product-option__title">
                        Color
                    </h3>


                    <div class="product-option__colors">

                        <button
                            type="button"
                            class="product-option__color product-option__color--purple"
                            aria-label="Purple">
                        </button>

                        <button
                            type="button"
                            class="product-option__color product-option__color--black"
                            aria-label="Black">
                        </button>

                        <button
                            type="button"
                            class="product-option__color product-option__color--gold"
                            aria-label="Gold">
                        </button>

                    </div>

                </div>



                <!-- Product Actions -->

                <form class="product-actions" method="post" action="<?php echo esc_url($product->get_permalink()); ?>">


    <div class="product-quantity">

<button
    type="button"
    class="product-quantity__button"
    onclick="
        const input = this.parentElement.querySelector('.product-quantity__input');
        const value = this.parentElement.querySelector('.product-quantity__value');
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
            value.textContent = input.value;
        }
    ">


</button>


<span class="product-quantity__value">
    1
</span>

<input
    type="hidden"
    name="quantity"
    value="1"
    class="product-quantity__input">


<button
    type="button"
    class="product-quantity__button"
    onclick="
        const input = this.parentElement.querySelector('.product-quantity__input');
        const value = this.parentElement.querySelector('.product-quantity__value');
        input.value = parseInt(input.value) + 1;
        value.textContent = input.value;
    ">

    +

</button>

</div>

    <button
        type="submit"
        name="add-to-cart"
        value="<?php echo esc_attr($product->get_id()); ?>"
        class="product-actions__cart">

        Add To Cart

    </button>


                    <!-- Compare -->

                    <button
                        type="button"
                        class="product-actions__compare">

                        + Compare

                    </button>

                </form>



                <!-- Product Meta -->

                <div class="product-meta">


                    <div class="product-meta__item">

                        <span class="product-meta__label">
                            SKU
                        </span>

                        <span class="product-meta__colon">
                            :
                        </span>

                        <span>
    <?php echo esc_html($product->get_sku()); ?>
</span>

                    </div>


                    <div class="product-meta__item">

                        <span class="product-meta__label">
                            Category
                        </span>

                        <span class="product-meta__colon">
                            :
                        </span>

                        <span>
    <?php
    $categories = get_the_terms($product->get_id(), 'product_cat');

    if ($categories && ! is_wp_error($categories)) {
        echo esc_html($categories[0]->name);
    }
    ?>
</span>

                    </div>


                    <div class="product-meta__item">

                        <span class="product-meta__label">
                            Tags
                        </span>

                        <span class="product-meta__colon">
                            :
                        </span>

                        <span>
    <?php
    $tags = get_the_terms($product->get_id(), 'product_tag');

    if ($tags && ! is_wp_error($tags)) {
        echo esc_html(implode(', ', wp_list_pluck($tags, 'name')));
    }
    ?>
</span>
                    </div>


                    <div class="product-meta__item">

                        <span class="product-meta__label">
                            Share
                        </span>

                        <span class="product-meta__colon">
                            :
                        </span>


                        <div class="product-meta__social">

                            <a href="#" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="#" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>

                        </div>

                    </div>


                </div>


            </div>

        </div>

    </section>



<!-- ================= DESCRIPTION ================= -->

<section class="product-description">

    <div class="product-description__container">


        <!-- Tabs -->

        <div class="product-description__tabs">

            <button
                type="button"
                class="product-description__tab product-description__tab--active">

                Description

            </button>


            <button
                type="button"
                class="product-description__tab">

                Additional Information

            </button>


            <button
                type="button"
                class="product-description__tab">

                Reviews [5]

            </button>

        </div>



        <!-- Description Text -->

<div class="product-description__content">

<?php echo wp_kses_post($product->get_description()); ?>

</div>


<!-- Description Images -->

        <div class="product-description__images">


            <div class="product-description__image">

                <img
                    src="<?php echo esc_url(get_theme_file_uri('images/product-page/Group 106.png')); ?>"
                    alt="Asgaard sofa">

            </div>


            <div class="product-description__image">

                <img
                    src="<?php echo esc_url(get_theme_file_uri('images/product-page/Group 107.png')); ?>"
                    alt="Asgaard sofa">

            </div>


        </div>


    </div>

</section>



<!-- ================= RELATED PRODUCTS ================= -->

<section class="related-products">

    <div class="container">


        <h2 class="related-products__title">
            Related Products
        </h2>


        <div class="related-products__grid">


        <?php
$related_products = wc_get_related_products($product->get_id(), 4);
?>

<?php foreach ($related_products as $related_product_id) : ?>

    <?php
    $related_product = wc_get_product($related_product_id);
    ?>

    <article class="product-card">

        <div class="product-card__image-wrapper">

            <img
                src="<?php echo esc_url(get_the_post_thumbnail_url($related_product->get_id(), 'full') ?: wc_placeholder_img_src('full')); ?>"
                alt="<?php echo esc_attr($related_product->get_name()); ?>">

            <?php if ($related_product->is_on_sale()) : ?>

                <span class="product-card__badge product-card__badge--sale">
                    Sale
                </span>

            <?php endif; ?>

        </div>


        <div class="product-card__content">

            <a href="<?php echo esc_url($related_product->get_permalink()); ?>">

                <h3 class="product-card__name">
                    <?php echo esc_html($related_product->get_name()); ?>
                </h3>

            </a>

            <p class="product-card__description">
                <?php echo esc_html(wp_strip_all_tags($related_product->get_short_description())); ?>
            </p>


            <div class="product-card__price">

                <span class="product-card__current-price">
                    <?php echo wc_price($related_product->get_price()); ?>
                </span>

                <?php if ($related_product->is_on_sale()) : ?>

                    <span class="product-card__old-price">
                        <?php echo wc_price($related_product->get_regular_price()); ?>
                    </span>

                <?php endif; ?>

            </div>

        </div>

    </article>

<?php endforeach; ?>

        </div>



        <!-- Show More -->

        <div class="related-products__button-wrapper">

            <a href="<?php echo esc_url($shop_url); ?>" class="related-products__button">
                Show More
            </a>

        </div>


    </div>

</section>


</main>



<?php get_footer(); ?>
