
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__row">
                <a href="#" class="footer__logo"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/logo-w.svg" alt=""></a>
                <div class="footer__soc">
                    <a href="#" class="footer__soc-item"><svg><use xlink:href="#soc1"></use></svg></a>
                    <a href="#" class="footer__soc-item"><svg style="width: 50px; height: 50px;"><use xlink:href="#soc2"></use></svg></a>
                </div>
            </div>

            <div class="footer__row">
                <div class="footer__row-in">
                    <a href="#" class="footer__link">Оферта</a>
                    <a href="#" class="footer__link">Согласие на обработку ПД</a>
                </div>
                <div class="footer__row-in">
                    <div class="footer__tx">Страховое акционерное общество «ВСК» </div>
                    <div class="footer__tx"><b>VSK.RU</b></div>
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
                <div class="modalM__qr-img"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/qr.jpg" alt=""></div>
                <div class="modalM__qr-tx">
                    <p><a href="#">Проверьте правильность введенных данных
                            с помощью вашего телефона </a> </p>
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
