<div class="primary_content_wrap">

    <div class="clearfix">
        <div class="grid_3">
            <div class="left-content-area">

                <?php echo View::factory('/pages/menu'); ?>


            </div>
        </div>

        <div class="grid_6">
            <div class="center-content-area">

                <h2>Вход</h2>
                <? if ($message) : ?>
                <h3 class="message">
                    <?= $message; ?>
                </h3>
                <? endif; ?>

                <?= Form::open('user/login', array('class' => 'regform')); ?>
                <div class="frm_input">
                    <?= Form::label('username', 'Логин/Email'); ?>
                    <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
                </div>
                <div class="frm_input">
                    <?= Form::label('password', 'Пароль'); ?>
                    <?= Form::password('password'); ?>
                </div>
                <div class="forget_link">
                    <?=Html::anchor('user/forgot', 'Забыли пароль?', array('class'=>'link', 'style'=>'margin-left:160px')) ?>
                </div>

                <!--<div style="margin-top: 10px; margin-left: 161px;">
    <?/*= Form::checkbox('remember'); */?>
    <?/*= Form::label('remember', 'запомнить', array('class' => 'remember')); */?>
</div>-->

                <div style="margin-top: 13px;">
                    <?= Form::label('username', 'Или:'); ?>
                    <?= Ulogin::factory(array('type'=>'panel'))->render('panel') ?>
                </div>

                <div class="frm_submit">
                    <?= Form::submit('login', 'Войти', array('class'=>'buttonS bGreen')); ?>
                </div>
                <?= Form::close(); ?>

                <?= HTML::anchor('user/create', 'Регистрация', array('class'=>'reg_loin')); ?>


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

