<div class="row">

        <aside id="sidebar" class="grid_3 right">

            <?php echo View::factory('/pages/menu'); ?>


    <div id="archives-3" class="widget"><h3>Archives</h3>
        <ul>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/07/" title="July 2011">July 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/05/" title="May 2011">May 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/04/" title="April 2011">April 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/03/" title="March 2011">March 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/02/" title="February 2011">February 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/01/" title="January 2011">January 2011</a></li>
        </ul>
        </div>
    </aside><!--sidebar-->

    <div id="content" class="grid_9 right">
        <div class="box">
            <div class="header-title">
                <h1>Recent Posts</h1>

            </div>

                  <?php foreach ($news as $art):
                     $str = Helper_MyUrl::SEOIt($art['title']);
                    $text = mb_substr(($art['text']),0,100);
                    ?>

            <article class="post-77 post type-post status-publish format-standard hentry category-ctetur category-minim-veniam tag-augue-quis tag-bibendum-mauris tag-elit tag-ipsum-dolor tag-tempor post-holder cat-34-id cat-7-id">

                <header class="entry-header">



                    <h2 class="entry-title left-indent"><a href="<?php echo URL::site($art['id'].'/news/'.$str);?>" title="<?=$art['title'];?>"><?=$art['title'];?></a></h2>



                    <div class="post-meta"> <br>
                        <div class="clear"></div>
                        <div class="dates">
                            <time><span class="day"><?=$art['date'];?></span></time>
                        </div>
                    </div><!--.post-meta-->


                </header>



                <figure class="featured-thumbnail">
                    <a href="<?php echo URL::site($art['id'].'/news/'.$str);?>">
                        <img width="201px" height="205px" src="/media/img/news/<?=$art['img'];?>" class="attachment-post-thumbnail wp-post-image" alt="<?=$art['title'];?>" title="<?=$art['title'];?>">
                        <span class="stroke"></span>
                    </a>
                </figure>




                <div class="post-content">

                    <div class="excerpt">
                                               <?=$text;?>
            </div>


                    <a href="<?php echo URL::site($art['id'].'/news/'.$str);?>" class="button">Read more</a>
                </div>


            </article>         <?php endforeach;?>
         <!--
            <article id="post-75" class="post-75 post type-post status-publish format-standard hentry category-amet-conse category-ullamco-laboris tag-bibendum tag-suscipit post-holder cat-33-id cat-5-id">

            <header class="entry-header">



                <h2 class="entry-title left-indent"><a href="http://livedemo00.template-help.com/wordpress_42065/ullamco-laboris/vivamus-vel-sem-at/" title="Permalink to: Vivamus vel sem at">Vivamus vel sem at</a></h2>



                <div class="post-meta">
                    <div class="fleft">Posted by <a href="http://livedemo00.template-help.com/wordpress_42065/author/admin/" title="Posts by admin" rel="author">admin</a></div>
                    <div class="fright"><a href="http://livedemo00.template-help.com/wordpress_42065/ullamco-laboris/vivamus-vel-sem-at/#respond" class="comments-link" title="Comment on Vivamus vel sem at">No comments</a></div>
                    <div class="clear"></div>
                    <div class="dates">
                        <time datetime="2011-07-14T20:30"><span class="day">14</span><span class="mounth">Jul</span></time>
                    </div>
                </div>


            </header>



            <figure class="featured-thumbnail">
                <a href="http://livedemo00.template-help.com/wordpress_42065/ullamco-laboris/vivamus-vel-sem-at/">
                    <img width="201" height="205" src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-2-201x205.jpg" class="attachment-post-thumbnail wp-post-image" alt="slide-2" title="slide-2">				<span class="stroke"></span>
                </a>
            </figure>




            <div class="post-content">

                <div class="excerpt">


                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros. Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis.
                </div>


                <a href="http://livedemo00.template-help.com/wordpress_42065/ullamco-laboris/vivamus-vel-sem-at/" class="button">Read more</a>
            </div>


        </article>			<article id="post-73" class="post-73 post type-post status-publish format-standard hentry category-awards-recognitions category-elit-sed-do category-incididunt tag-lorem post-holder cat-8-id cat-32-id cat-35-id">

            <header class="entry-header">



                <h2 class="entry-title left-indent"><a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/" title="Permalink to: cupidatat non proident – 2007">cupidatat non proident – 2007</a></h2>



                <div class="post-meta">
                    <div class="fleft">Posted by <a href="http://livedemo00.template-help.com/wordpress_42065/author/admin/" title="Posts by admin" rel="author">admin</a></div>
                    <div class="fright"><a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/#comments" class="comments-link" title="Comment on cupidatat non proident – 2007">3 Comments</a></div>
                    <div class="clear"></div>
                    <div class="dates">
                        <time datetime="2011-05-14T20:29"><span class="day">14</span><span class="mounth">May</span></time>
                    </div>
                </div>


            </header>



            <figure class="featured-thumbnail">
                <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/">
                    <img width="201" height="205" src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-7-201x205.jpg" class="attachment-post-thumbnail wp-post-image" alt="slide-7" title="slide-7">				<span class="stroke"></span>
                </a>
            </figure>




            <div class="post-content">

                <div class="excerpt">


                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros. Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis.
                </div>


                <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/" class="button">Read more</a>
            </div>


        </article>    -->

          <?php echo $pag;?>
            <!-- Posts navigation -->		</div>
    </div>

    </div><!--.row-->

   