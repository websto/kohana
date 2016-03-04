<div class="primary_content_wrap">

        <div class="clearfix">
            <div class="grid_3">
                <div class="left-content-area">

                    <?php echo View::factory('/pages/menu'); ?>


                </div>
            </div>

            <div class="grid_6">
                <div class="center-content-area">
                    <h2>Регистрация</h2>
                    <? if ($message) : ?>
                    <h3 class="message">
                        <?= $message; ?>
                    </h3>
                    <? endif; ?>

                    <?= Form::open('user/create', array('class' => 'regform')); ?>

                    <div class="frm_input">
                        <?= Form::label('username', 'Логин'); ?>
                        <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'username'); ?>
                        </div>
                    </div>

                    <div class="frm_input">
                        <?= Form::label('email', 'Email'); ?>
                        <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'email'); ?>
                        </div>
                    </div>

                    <div class="frm_input">
                        <?= Form::label('password', 'Пароль'); ?>
                        <?= Form::password('password'); ?>
                        <div class="error">
                            <?= Arr::path($errors, '_external.password'); ?>
                        </div>
                    </div>

                    <div class="frm_input">
                        <?= Form::label('password_confirm', 'Повторите пароль'); ?>
                        <?= Form::password('password_confirm'); ?>
                        <div class="error">
                            <?= Arr::path($errors, '_external.password_confirm'); ?>
                        </div>
                    </div>


                    <div class="frm_input">
                        <?= Form::label('tell', 'Телефон'); ?>
                      <span style="color: red; margin: -3px;">*</span> <?= Form::input('tell', HTML::chars(Arr::get($_POST, 'tell'))); ?>

                    </div>

                    <div class="frm_input">
                        <?= Form::label('profession', 'Профессия'); ?>
                        <span style="color: red; margin: -3px;">*</span>
                        <select name='profession' style="width: 130px; font-size: 15px; font-weight: bold;">
                        <option selected="selected">Профессия</option>
                        <option value="Дизайнер">Дизайнер</option>
                        <option value="Архитектор">Архитектор</option>
                        <option value="Проектировщик">Проектировщик</option>
                        <option value="Дилер">Дилер</option>
                         <option value="Монтажник">Монтажник</option>
                         <option value="Другое">Другое</option>
                    </select>  </div>
                    <div style="color: white; margin: 10px;"><span style="color: red;">*</span>Не обязательние поля.Пароль должен состоять минимум с 8 символов </div>
                    <div class="frm_submit">
                        <?= Form::submit('create', 'Зарегистрироваться', array('class'=>'buttonS bGreen')); ?>
                    </div>
                    <?= Form::close(); ?>


                    <p class="small">Или <?= HTML::anchor('user/login', 'войдите'); ?> если у вас уже есть учетная запись.</p>







                </div>
            </div>
            <div class="grid_3">
                <div class="right-content-area">
                    <div id="my_sidebarpostwidget-2" class="box">

                        <h2>Popular News</h2>

                        <ul class="sidebar-latestpost">

                            <?php foreach ($newsA as $art):
                            $str = Helper_MyUrl::SEOIt($art->title);
                            /* $titleW = substr(($file->title),0,100);*/
                            ?>
                            <li class="clearfix">
                                <figure class="featured-thumbnail">
                                    <a href="<?php echo URL::site($art->id.'/news/'.$str);?>" title="<?=$art->title;?>">
                                        <img style="width:190px;height: 85px;" src="/media/img/news/<?=$art->img;?>" alt="<?=$art->title;?>" />
                                        <span class="stroke"></span>
                                    </a>
                                </figure>
                                <time><?=$art->date;?></time>
                                <a href="<?php echo URL::site($art->id.'/news/'.$str);?>" rel="bookmark" title="<?=$art->title;?>" class="excerpt">
                                    <?=$art->title;?> 										</a>
                            </li>
                            <?php endforeach;?>

                        </ul>



                        <!-- Link under post cycle -->
                        <div class="border-top">
                            <a href="/News" class="button">Все новости</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div><!--.row-->
</div><!--.primary_content_wrap-->