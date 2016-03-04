<div class="primary_content_wrap">

    <div class="clearfix">
        <div class="grid_3">
            <div class="left-content-area">

                <?php echo View::factory('/pages/menu'); ?>


            </div>
        </div>

        <div class="grid_6">
            <div class="center-content-area" style="width: 500px;">

                <h2>Info for  user "<?= $user->username; ?>"</h2>

                <ul>
                    <li>Email: <?= $user->email; ?></li>
                    <li>Number of logins: <?= $user->logins; ?></li>
                    <li>Last Login: <?= Date::fuzzy_span($user->last_login); ?></li>
                </ul>

                <?= HTML::anchor('user/logout', 'Logout'); ?>


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