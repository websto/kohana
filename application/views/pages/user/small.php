<div id="rel_box">
    <div id="entrance-box" class="entrance_box">
        <div class="white_box">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr style="height:6px;">
                    <td class="wb_lt"></td>
                    <td class="wb_ct"></td>
                    <td class="wb_rt"></td>
                </tr>
                <tr>
                    <td class="wb_lm"></td>
                    <td class="wb_cm">
                        <div class="wb_inner">
                            <form action="/user/login" method="post">

                                <div class="mt15">
                                    <input id="input-email" class="text_input" type="text" name="username"
                                           placeholder="Email/Логин">
                                </div>

                                <div class="mt3 mb15">
                                    <input id="input-password" class="text_input" type="password" name="password"
                                           placeholder="Пароль">

                                    <div class="forget_link">
                                        <?=Html::anchor('user/forgot', 'Забыли пароль?', array('class'=>'link')) ?>
                                    </div>
                                </div>
                                <?= Ulogin::factory()->render('panel') ?>
                                <input type="submit" class="default_button pl15 pr15 fleft" value="Войти">

                                <div class="clearfix"></div>

                                <div class="tac reg_box_link mt10">
                                    <a class="link" href="/user/create/"
                                       title="Зарегистрироваться в магазине">Зарегистрироваться</a>
                                </div>
                            </form>
                        </div>
                    </td>
                    <td class="wb_rm"></td>
                </tr>
                <tr style="height:6px;">
                    <td class="wb_lb"></td>
                    <td class="wb_cb"></td>
                    <td class="wb_rb"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>