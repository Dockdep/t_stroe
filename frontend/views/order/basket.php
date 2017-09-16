<div class="col-xs-12 col-sm-12">

    <div class="row">
        <div class="col-xs-12 col-sm-12 title-card">Товары в вашей корзина</div>

        <!--если корзина пустая выводить-->

        <!--<div class="col-xs-12 col-sm-12 title_empty_basket">-->
        <!--Ваша корзина пуста-->
        <!--</div>-->

        <!-------------------------------->

        <div class="col-xs-12 col-sm-12 basket_page">

        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="style price-total-wr">
                <div class="hidden-xs col-sm-6"><span class="total_txt">итого</span></div>
                <div class="col-sm-12 col-sm-6 price-total"><span>  грн.</span></div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="style basket-tabs_list-wr hidden-xs">
                <ul>
                    <li class="active">
                        <a href="#">Новый покупатель</a>
                    </li>

                    <li>
                        <a href="#">Я уже зарегестрирован</a>
                    </li>
                </ul>
            </div>

            <!------------------------>
            <div class="style tabs_basket-blocks">
                <div class="style tabs_basket-mobile active-mobile">
                    <a class="btn_mobil_show_desk style hidden-sm hidden-md hidden-lg" href="#">Новый покупатель</a>
                    <div class="style hidden_tabs">
                        <div class="forms_pages form-new-customer">
                            <form action="">
                                <form  action="" method="post">

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr">
                                            <div class="form-group required">
                                                <label class="control-label" for="">Имя</label>
                                                <input type="text" id="">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr">
                                            <div class="form-group required">
                                                <label class="control-label" for="">Фамилия</label>
                                                <input type="text" id="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr">
                                            <div class="form-group field-signupform-email required">
                                                <label class="control-label" for="signupform-email">Ваш e-mail</label>
                                                <input type="text" id="signupform-email" class="form-control" name="SignupForm[email]">


                                            </div>                        </div>

                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr  phones_mask">
                                            <div class="form-group ">
                                                <label>Ваш мобильный телефон</label>
                                                <input type="text" id="signupform-phone" class="form-control" name="SignupForm[phone]" placeholder="+38(_ _ _) _ _ _- _ _ - _ _">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                                            <div class="form-group">
                                                <label>Город</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                                            <div class="form-group">
                                                <label >Ваш адрес</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row delivery-wrapper">
                                        <div class="col-xs-12 col-sm-12 input-wr required">
                                            <label for="">Вариант доставки</label>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="style radio_custom">
                                                <input type="radio" id="radio-1-1" name="group-1">
                                                <label for="radio-1-1">Доставка по Киеву и области</label>

                                            </div>

                                            <div class="style radio_custom">
                                                <input type="radio" id="radio-1-2"  name="group-1">
                                                <label for="radio-1-2">Доставка по Украине</label>
                                            </div>

                                            <div class="style radio_custom">
                                                <input type="radio" id="radio-1-3"  name="group-1">
                                                <label for="radio-1-3">Самовывоз</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row payment-wrapper">
                                        <div class="col-xs-12 col-sm-12 input-wr required">
                                            <label for="">Способы оплаты</label>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="style radio_custom">
                                                <input type="radio" id="radio-2-1" name="group-2">
                                                <label for="radio-2-1">Оплата наличными</label>
                                            </div>

                                            <div class="style radio_custom">
                                                <input type="radio" id="radio-2-2"  name="group-2">
                                                <label for="radio-2-2">Оплата по безналичному расчету</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 input-wr">
                                            <div class="form-group ">
                                                <label>Комментарий</label>
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 button-wr button-left">
                                            <button type="submit">ОФОРМИТЬ ЗАКАЗ</button>
                                        </div>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="style tabs_basket-mobile">
                    <a class="btn_mobil_show_desk style hidden-sm hidden-md hidden-lg" href="#">Я уже зарегестрирован</a>
                    <div class="style hidden_tabs">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <form action="#">
                                    <form id="w2" action="" method="post">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 input-wr medium-label">
                                                <div class="form-group required">
                                                    <label class="control-label">Email</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 input-wr medium-label">
                                                <div class="form-group required">
                                                    <label class="control-label">Пароль</label>
                                                    <input type="password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 input-wr sidebar_checks">
                                                <div class="form-group field-loginform-rememberme">
                                                    <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                                    <label class="control-label" for="loginform-rememberme"><a>Запомнить меня</a></label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 button-wr button-left">

                                                <button type="submit">Войти</button>
                                                <div class="btns_reg">
                                                    <a class="restore_password_" href="restore.html">Забыли пароль?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------>

        </div>
    </div>

</div>