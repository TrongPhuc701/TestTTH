<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container header-wrap">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">Trầm Hương Việt</a>
        <nav class="main-nav" aria-label="Main Navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => function () {
                    echo '<ul>';
                    echo '<li><a href="#">Trang chủ</a></li>';
                    echo '<li><a href="#">Sản phẩm</a></li>';
                    echo '<li><a href="#">Về chúng tôi</a></li>';
                    echo '<li><a href="#">Liên hệ</a></li>';
                    echo '</ul>';
                },
            ]);
            ?>
        </nav>
    </div>
</header>
