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
            <div class="banner__inner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/src/images/banner.jpg')">
                <div class="banner__text">
                    <h1><?php the_field('banner_title','options'); ?></h1>
                    <p><?php the_field('banner_text','options'); ?></p>
                    <a href="#orders" class="button button-primary md"><?php
                        $link = get_field('banner_button');
                        var_dump($link);
                         if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="banner__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/src/images/img1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="container">
            <div class="list__inner">
                <div class="list__item">
                    <div class="list__item-inner">
                        <div class="list__item-icon"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/icon1.svg" alt=""></div>
                        <div class="list__item-tx">Высококачественная
                            печать по уникальной
                            в РФ технологии</div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-inner">
                        <div class="list__item-icon"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/icon2.svg" alt=""></div>
                        <div class="list__item-tx">Premium силикон
                            Soft Touch</div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-inner">
                        <div class="list__item-icon"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/icon3.svg" alt=""></div>
                        <div class="list__item-tx">Гарантия 30 дней</div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-inner">
                        <div class="list__item-icon"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/icon4.svg" alt=""></div>
                        <div class="list__item-tx">Подгон элементов
                            дизайна для вашего
                            смартфона</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="container">
            <h2><span>Фотографии</span> чехла</h2>
            <div class="gallery__inner">
                <div class="gallery__slider js-gallery-slider">
                    <div class="gallery__slider-item">
                        <div class="gallery__slider-inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/src/images/foto1.jpg" alt="">
                        </div>
                    </div>
                    <div class="gallery__slider-item">
                        <div class="gallery__slider-inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/src/images/foto2.jpg" alt="">
                        </div>
                    </div>
                    <div class="gallery__slider-item">
                        <div class="gallery__slider-inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/src/images/foto3.jpg" alt="">
                        </div>
                    </div>
                    <div class="gallery__slider-item">
                        <div class="gallery__slider-inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/src/images/foto2.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="order">
        <div class="container">
            <h2><span>Как оформить</span> чехол ВСК?</h2>
            <div class="order__inner">
                <div class="order__list">
                    <div class="order__list-item">
                        <div class="order__list-inner">
                            <div class="order__list-numb">01.</div>
                            <div class="order__list-tx">
                                Нажмите "Заказать"<br>
                                на сайте</div>
                            <a href="#orders" class="button button-primary button-min mod">ЗАКАЗАТЬ ЧЕХОЛ</a>
                        </div>
                    </div>
                    <div class="order__list-item">
                        <div class="order__list-inner">
                            <div class="order__list-numb">02.</div>
                            <div class="order__list-tx">

                                Заполните заявку,<br>
                                укажите модель телефона<br>
                                и адрес доставки</div>
                        </div>
                    </div>
                    <div class="order__list-item">
                        <div class="order__list-inner">
                            <div class="order__list-numb">03.</div>
                            <div class="order__list-tx">

                                С вами свяжется менеджер<br>
                                для подтверждения<br>
                                заказа</div>
                        </div>
                    </div>
                    <div class="order__list-item">
                        <div class="order__list-inner">
                            <div class="order__list-numb">04.</div>
                            <div class="order__list-tx">

                                Оплатите заказ по ссылке<br>
                                и ожидайте чехол</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fr">
        <div class="container">
            <div class="fr__inner" style="background-image: url('images/banner2.jpg')">
                <div class="fr__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/src/images/img2.png" alt="">
                </div>
                <div class="fr__text">
                    <h2><span>Оформите заявку</span> прямо сейчас!</h2>
                    <p>Стоимость изготовления чехла - <span>от 1200 Р</span> + доставка.</p>
                    <p>В случае изменения стоимости об этом сообщит менеджер
                        перед подтверждением заказа.</p>
                    <p>Срок изготовления и доставки определяются индивидуально.</p>
                    <a href="#orders" class="button button-primary mod">ЗАКАЗАТЬ ЧЕХОЛ</a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>