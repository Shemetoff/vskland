<?php
/*
Template Name: font-page
*/
?>

<?php
get_header();
?>

    <div class="banner">
        <div class="container">
            <div class="banner__inner"
                 style="background-image: url('<?php bloginfo('template_url'); ?>/assets/src/images/banner.jpg')">
                <div class="banner__text">
                    <h1><?php the_field('banner_title'); ?></h1>
                    <p><?php the_field('banner_text'); ?></p>
                    <?php $link = get_field('banner_button'); ?>
                    <?php if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>
                        <a href="#orders" class="button button-primary md">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="banner__img">
                    <?php
                    $image = get_field('banner_img');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="container">
            <div class="list__inner">
                <?php if (have_rows('list')): ?>
                    <?php while (have_rows('list')) : the_row(); ?>
                        <div class="list__item">
                            <div class="list__item-inner">
                                <div class="list__item-icon">
                                    <?php
                                    $sub_img = get_sub_field('img_cell');
                                    if ($sub_img['url']) {
                                        echo '<img src="' . $sub_img['url'] . '" alt = "' . $sub_img['alt'] . '" > ';
                                    } ?>
                                </div>
                                <?php if (get_sub_field('text_cell')) {
                                    echo '<div class="list__item-tx">' . get_sub_field('text_cell') . '</div>';
                                } ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="container">
            <h2><?php the_field('slider_title'); ?></h2>
            <div class="gallery__inner">
                <div class="gallery__slider js-gallery-slider">
                    <?php
                    $images = get_field('slider_img');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($images): ?>
                        <?php foreach ($images as $image_id): ?>
                            <div class="gallery__slider-item">
                                <div class="gallery__slider-inner">
                                    <img src="<?php echo $image_id['url']; ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="order">
        <div class="container">
            <h2><?php the_field('order_title'); ?></h2>
            <div class="order__inner">
                <div class="order__list">
                    <?php if (have_rows('order_list')): ?>
                        <?php while (have_rows('order_list')) : the_row(); ?>

                            <div class="order__list-item">
                                <div class="order__list-inner">
                                    <?php if (get_sub_field('order_num')) {
                                        echo '<div class="order__list-numb">' . get_sub_field('order_num') . '</div>';
                                    } ?>
                                    <?php if (get_sub_field('order_text')) {
                                        echo '<div class="order__list-tx">' . get_sub_field('order_text') . '</div>';
                                    } ?>

                                    <?php $link = get_sub_field('order_button'); ?>
                                    <?php if ($link):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        ?>
                                        <a href="#orders" class="button button-primary button-min mod">
                                            <?php echo $link_title; ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="fr">
        <div class="container">
            <div class="fr__inner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/src/images/banner2.jpg')">
                <div class="fr__img">
                    <?php
                    $image = get_field('fr_img');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
                <div class="fr__text">
                    <h2><?php the_field('fr_title'); ?></h2>
                    <p><?php the_field('fr_text'); ?></p>

                    <?php $link = get_field('fr_button'); ?>
                    <?php if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>
                        <a href="#orders" class="button button-primary mod">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>