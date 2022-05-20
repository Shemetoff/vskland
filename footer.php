<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__row">
                <a href="#" class="footer__logo">
                    <?php
                    $image = get_field('footer_logo', 'options');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </a>

                <div class="footer__soc">
                    <?php if (get_field('footer__soc_vk', 'options')): ?>
                        <a href="<?php echo get_field('footer__soc_vk', 'options') ?>" class="footer__soc-item">
                            <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_259_184)">
                                    <path d="M23.525 0.841797H12.4741C2.38965 0.841797 -0.000976562 3.23242 -0.000976562 13.3169V24.3678C-0.000976562 34.4523 2.38965 36.8429 12.4741 36.8429H23.525C33.6095 36.8429 36.0001 34.4523 36.0001 24.3678V13.3169C36.0001 3.23242 33.5859 0.841797 23.525 0.841797ZM29.0623 26.5233H26.4489C25.4589 26.5233 25.154 25.738 23.3731 23.9335C21.8263 22.4339 21.1411 22.2348 20.7598 22.2348C20.2209 22.2348 20.0679 22.3867 20.0679 23.1258V25.4872C20.0679 26.1205 19.8688 26.5008 18.1925 26.5008C15.4205 26.5008 12.3448 24.8245 10.1881 21.7015C6.93577 17.125 6.0459 13.6972 6.0459 12.9884C6.0459 12.607 6.19777 12.2504 6.93015 12.2504H9.54915C10.2118 12.2504 10.4638 12.5553 10.7214 13.264C12.0163 17.0024 14.1729 20.2773 15.0628 20.2773C15.3913 20.2773 15.5431 20.1254 15.5431 19.2873V15.4263C15.443 13.6454 14.5059 13.4924 14.5059 12.8602C14.5059 12.5553 14.7579 12.2504 15.1618 12.2504H19.2804C19.8373 12.2504 20.042 12.5553 20.042 13.2112V18.4199C20.042 18.9824 20.294 19.1815 20.4459 19.1815C20.7744 19.1815 21.0556 18.9824 21.6643 18.3727C23.5453 16.2633 24.893 13.0109 24.893 13.0109C25.0685 12.6295 25.3734 12.2729 26.036 12.2729H28.655C29.4403 12.2729 29.6158 12.6768 29.4403 13.2393C29.1118 14.7625 25.9066 19.2862 25.9066 19.2862C25.631 19.7429 25.5253 19.942 25.9066 20.4517C26.1879 20.833 27.1025 21.6239 27.7111 22.3327C28.8305 23.6039 29.6911 24.6704 29.9206 25.4084C30.1783 26.1408 29.798 26.5222 29.0589 26.5222L29.0623 26.5233Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_259_184">
                                        <rect width="36" height="36" fill="white" transform="translate(0 0.841797)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('footer__soc_inst', 'options')): ?>
                        <a href="<?php echo get_field('footer__soc_inst', 'options') ?>" class="footer__soc-item">
                            <svg style="width: 50px; height: 50px;" width="50" height="51" viewBox="0 0 50 51" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.64 17.9334C43.619 16.3556 43.3236 14.7934 42.7671 13.3168C42.2845 12.0712 41.5473 10.9401 40.6028 9.99558C39.6583 9.05106 38.5272 8.31396 37.2816 7.83135C35.824 7.28418 34.2841 6.98831 32.7275 6.95635C30.7233 6.86677 30.0879 6.84177 25.0004 6.84177C19.9129 6.84177 19.2608 6.84177 17.2712 6.95635C15.7153 6.98855 14.1761 7.28441 12.7191 7.83135C11.4734 8.31362 10.3421 9.05061 9.39754 9.99517C8.45298 10.9397 7.71599 12.0711 7.23372 13.3168C6.68546 14.7733 6.39023 16.3128 6.36081 17.8688C6.27122 19.8751 6.24414 20.5105 6.24414 25.598C6.24414 30.6855 6.24414 31.3355 6.36081 33.3272C6.39206 34.8855 6.68581 36.423 7.23372 37.8834C7.7168 39.1288 8.45434 40.2596 9.39922 41.2038C10.3441 42.148 11.4755 42.8846 12.7212 43.3668C14.1742 43.9359 15.7137 44.253 17.2733 44.3043C19.2796 44.3938 19.915 44.4209 25.0025 44.4209C30.09 44.4209 30.7421 44.4209 32.7316 44.3043C34.2882 44.2736 35.8282 43.9784 37.2858 43.4313C38.531 42.9482 39.6619 42.2109 40.6063 41.2664C41.5508 40.322 42.2881 39.1911 42.7712 37.9459C43.3191 36.4876 43.6129 34.9501 43.6441 33.3897C43.7337 31.3855 43.7608 30.7501 43.7608 25.6605C43.7566 20.573 43.7566 19.9272 43.64 17.9334V17.9334ZM24.9879 35.2188C19.6671 35.2188 15.3566 30.9084 15.3566 25.5876C15.3566 20.2668 19.6671 15.9563 24.9879 15.9563C27.5423 15.9563 29.992 16.9711 31.7982 18.7773C33.6044 20.5835 34.6191 23.0332 34.6191 25.5876C34.6191 28.142 33.6044 30.5917 31.7982 32.3979C29.992 34.2041 27.5423 35.2188 24.9879 35.2188V35.2188ZM35.0025 17.8459C34.7075 17.8462 34.4153 17.7883 34.1427 17.6755C33.8701 17.5628 33.6224 17.3974 33.4138 17.1888C33.2052 16.9802 33.0398 16.7325 32.927 16.4599C32.8143 16.1873 32.7564 15.8951 32.7566 15.6001C32.7566 15.3053 32.8147 15.0134 32.9275 14.7411C33.0403 14.4687 33.2057 14.2212 33.4141 14.0128C33.6226 13.8043 33.87 13.639 34.1424 13.5262C34.4147 13.4134 34.7066 13.3553 35.0014 13.3553C35.2962 13.3553 35.5881 13.4134 35.8605 13.5262C36.1328 13.639 36.3803 13.8043 36.5887 14.0128C36.7972 14.2212 36.9625 14.4687 37.0754 14.7411C37.1882 15.0134 37.2462 15.3053 37.2462 15.6001C37.2462 16.8418 36.2421 17.8459 35.0025 17.8459Z"
                                      fill="white"/>
                                <path d="M24.9877 31.8439C28.4429 31.8439 31.2439 29.0428 31.2439 25.5876C31.2439 22.1324 28.4429 19.3314 24.9877 19.3314C21.5325 19.3314 18.7314 22.1324 18.7314 25.5876C18.7314 29.0428 21.5325 31.8439 24.9877 31.8439Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>

            </div>

            <div class="footer__row">
                <div class="footer__row-in">
                    <?php if (get_field('footer_link_of', 'options')): ?>
                        <a href="<?php echo get_field('footer_link_of', 'options') ?>" class="footer__link">Оферта</a>
                    <?php endif; ?>
                    <?php if (get_field('footer_link_date', 'options')): ?>
                        <a href="<?php echo get_field('footer_link_date', 'options') ?>" class="footer__link">Согласие
                            на обработку ПД</a>
                    <?php endif; ?>

                </div>
                <div class="footer__row-in">
                    <?php if (get_field('footer_txt', 'options')): ?>
                        <a href="<?php echo get_field('footer_txt', 'options') ?>" class="footer__tx">Страховое
                            акционерное общество «ВСК» </a>
                    <?php endif; ?>
                    <!--                    <div class="footer__tx">-->
                    <?php //the_field('footer_txt', 'options'); ?><!--</div>-->
                    <div class="footer__tx">
                        <?php if (get_field('footer_link_vsk', 'options')): ?>
                            <a href="<?php echo get_field('footer_link_vsk', 'options') ?>"
                               class="footer__tx">VSK.RU</a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
</footer>

<div id="orders" class="modalM">
    <div class="modalM__holder">
        <div class="modalM__inner">
            <div class="modalM__title">Шаг 1</div>
            <div class="modalM__tx">Введите данные для создания QR-кода</div>
            <div class="modalM__form">
                <form>
                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-50">
                            <label>Фамилия</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell modalM__form-cell_ok w-50">
                            <label>Имя</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Отчество</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-100">
                            <label>Должность</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-50">
                            <label>Рабочий телефон</label>
                            <input type="text" class="tel">
                        </div>
                        <div class="modalM__form-cell modalM__form-cell_err w-50">
                            <label>Рабочий телефон - 2</label>
                            <input type="text" class="tel">
                            <span class="er">Введите номер в формате +7 (000) 000 - 00 - 00</span>
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Мобильный телефон</label>
                            <input type="text" class="tel">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Мобильный телефон - 2</label>
                            <input type="text" class="tel">
                        </div>
                    </div>

                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-50">
                            <label>e-mail</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>e-mail - 2</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="modalM__form-bottom">
                        <button type="button" class="button button-primary js-next">СГЕНЕРИРОВАТЬ QR</button>
                        <div class="modalM__form-tt">
                            Нажимая на кнопку “Сгенерировать QR” Вы соглашаететсь
                            с <a href="#">политикой конфидициальности</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modalM__inner mob">
            <div class="modalM__title">Шаг 2</div>
            <div class="modalM__tx">Введите данные для заказа чехла</div>
            <div class="modalM__qr">
                <div class="modalM__qr-img"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/qr.jpg"
                                                 alt=""></div>
                <div class="modalM__qr-tx">
                    <p><a href="#">Проверьте правильность введенных данных
                            с помощью вашего телефона </a></p>
                    <p>Если все данные верны - заполните ваши
                        контактные данные и адрес доставки чехла</p>
                </div>
            </div>
            <div class="modalM__form">
                <h3>Контактные данные</h3>
                <form>
                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-50">
                            <label>Имя</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Мобильный телефон</label>
                            <input type="text" class="tel">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>e-mail</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Модель телефона</label>
                            <input type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modalM__form">
                <h3>Адрес доставки</h3>
                <form>
                    <div class="modalM__form-row">
                        <div class="modalM__form-cell w-50">
                            <label>Город</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Улица</label>
                            <input type="text" class="tel">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Дом</label>
                            <input type="text">
                        </div>
                        <div class="modalM__form-cell w-50">
                            <label>Квартира/офис</label>
                            <input type="text">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modalM__form-bottom">
                <button type="button" class="button button-primary">ЗАКАЗАТЬ ЧЕХОЛ</button>
                <div class="modalM__form-tt">
                    Нажимая на кнопку “Заказать чехол” Вы соглашаетесь
                    с <a href="#">политикой конфидициальности</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
