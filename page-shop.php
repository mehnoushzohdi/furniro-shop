<?php get_header(); ?>

<!-- ================= SHOP HERO ================= -->

<section class="shop-hero">

    <div class="shop-hero__image">
        <img
            src="<?php echo esc_url(get_theme_file_uri('images/shop/hero-shop.png')); ?>"
            alt="Furniro Shop"
        >
    </div>

    <div class="shop-hero__content">

        <h1 class="shop-hero__title">
            Shop
        </h1>

        <div class="shop-hero__breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <i class="bi bi-chevron-right"></i>
            <span>Shop</span>
        </div>

    </div>

</section>


<!-- ================= SHOP TOOLBAR ================= -->
<?php
$products_per_page = isset($_GET['show']) ? absint($_GET['show']) : 16;

if (!in_array($products_per_page, [2, 16, 32], true)) {
    $products_per_page = 16;
}
$sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'default';
$total_products = wp_count_posts('product')->publish;
$total_pages = max(1, (int) ceil($total_products / $products_per_page));
$current_page = isset($_GET['paged']) ? absint($_GET['paged']) : 1;

if ($current_page < 1) {
    $current_page = 1;
}
if ($current_page > $total_pages) {
    $current_page = $total_pages;
}

$showing_from = $total_products ? (($current_page - 1) * $products_per_page) + 1 : 0;
$showing_to = min($current_page * $products_per_page, $total_products);
?>

<section class="shop-toolbar">

    <div class="shop-toolbar__left">

        <button type="button" class="shop-toolbar__filter">
            <i class="bi bi-sliders"></i>
            <span>Filter</span>
        </button>

        <button type="button" class="shop-toolbar__view">
            <i class="bi bi-grid-fill"></i>
        </button>

        <button type="button" class="shop-toolbar__view">
            <i class="bi bi-view-list"></i>
        </button>

        <span class="shop-toolbar__divider"></span>

        Showing <?php echo esc_html($showing_from); ?>–<?php echo esc_html($showing_to); ?> of <?php echo esc_html($total_products); ?> results
</div>

<form method="get" class="shop-toolbar__right">

        <label for="show-count">
            Show
        </label>

        <select name="show" id="show-count" class="shop-toolbar__select" onchange="this.form.submit()">
    <option value="16" <?php selected($products_per_page, 16); ?>>16</option>
    <option value="2" <?php selected($products_per_page, 2); ?>>2</option>
    <option value="32" <?php selected($products_per_page, 32); ?>>32</option>
</select>


        <label for="sort-by">
            Short by
        </label>

        <select name="sort" id="sort-by" class="shop-toolbar__select" onchange="this.form.submit()">
            <option value="default" <?php selected($sort, 'default'); ?>>Default</option>
            <option value="price-low" <?php selected($sort, 'price-low'); ?>>Price Low to High</option>
            <option value="price-high" <?php selected($sort, 'price-high'); ?>>Price High to Low</option>
        </select>

        </form>

</section>


<!-- ================= SHOP PRODUCTS ================= -->

<section class="shop-products">

    <div class="container">

        <div class="products__grid">

        <?php
        if ($sort === 'price-low') {
            $orderby = 'price';
            $order = 'ASC';
        } elseif ($sort === 'price-high') {
            $orderby = 'price';
            $order = 'DESC';
        } else {
            $orderby = 'date';
            $order = 'DESC';
        }
$products = wc_get_products([
    'limit' => $products_per_page,
    'orderby' => $orderby,
'order'   => $order,
'offset'  => ($current_page - 1) * $products_per_page,
]);
?>
<?php if ($products) : ?>
<?php foreach ($products as $product) : ?>

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

            <div class="product-card__hover">

                <a
                    class="product-card__cart"
                    href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                >
                    Add to cart
                </a>

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


        <!-- ================= PAGINATION ================= -->
        <?php if ($total_pages > 1) : ?>

        <div class="shop-pagination">

        <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
            <a
                class="shop-pagination__button <?php echo $current_page === $page ? 'shop-pagination__button--active' : ''; ?>"
                href="<?php echo esc_url(add_query_arg(['paged' => $page, 'show' => $products_per_page, 'sort' => $sort], get_permalink())); ?>"
            >
                <?php echo esc_html($page); ?>
            </a>
        <?php endfor; ?>
        <?php if ($current_page < $total_pages) : ?>
            <a
                class="shop-pagination__button"
                href="<?php echo esc_url(add_query_arg(['paged' => $current_page + 1, 'show' => $products_per_page, 'sort' => $sort], get_permalink())); ?>"
            >
                Next
            </a>
        <?php endif; ?>
<?php endif; ?>
    </div>

</section>


<!-- ================= FEATURES ================= -->

<section class="features">

    <div class="features__container">

        <div class="features__item">
            <i class="bi bi-trophy"></i>

            <div>
                <h3>High Quality</h3>
                <p>crafted from top materials</p>
            </div>
        </div>


        <div class="features__item">
            <i class="bi bi-patch-check"></i>

            <div>
                <h3>Warranty Protection</h3>
                <p>Over 2 years</p>
            </div>
        </div>


        <div class="features__item">
            <i class="bi bi-box-seam"></i>

            <div>
                <h3>Free Shipping</h3>
                <p>Order over 150 $</p>
            </div>
        </div>


        <div class="features__item">
            <i class="bi bi-headset"></i>

            <div>
                <h3>24 / 7 Support</h3>
                <p>Dedicated support</p>
            </div>
        </div>

    </div>

</section>


<?php get_footer(); ?>
