
<div class="primary_content_wrap">

    <div class="clearfix">
        <div class="grid_3">
            <div class="left-content-area">

                <?php echo View::factory('/pages/menu'); ?>


            </div>
        </div>

        <div class="grid_6">
            <div class="center-content-area">


                <div class="block">
                    <h1><?php echo __('Password reset'); ?></h1>
                    <div class="content">
                        <?php
                        echo Form::open('user/reset');
                        ?>
                        <ul>
                            <li>
                                <label><?php echo __('Account email address'); ?>:</label>
                                <?php echo Form::input('reset_email', '', array('class' => 'text')) ?>
                            </li>
                            <li>
                                <label><?php echo __('Password reset token'); ?>:</label>
                                <?php echo Form::input('reset_token', '', array('class' => 'text')) ?>
                            </li>
                        </ul>
                        <br style="clear:both;">
                        <?php echo Form::submit(NULL, __('Reset password')); ?>

                        <?php echo Form::close() ?>

                    </div>
                </div>

                <?php
                if (isset($message))
                    echo $message;
                ?>


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