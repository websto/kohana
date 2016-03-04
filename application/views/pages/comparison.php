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





            <ul id="item-list">
                <?php
                if (isset($cat))

                    foreach($cat as $art):

                        $str = Helper_MyUrl::SEOIt($art->title); ?>


                        <li style="width: 19%;">
                            <div style="margin-bottom: 20px;">

                                <header class="entry-header">
                                    <div class="title"><a href="<?php echo URL::site($art->id.'/'.$str);?>"><?=$art->title;?></a></div>
                                </header>



                                <figure class="featured-thumbnail">
                                    <a href="<?php echo URL::site($art->id.'/'.$str);?>">
                                        <img align="center" width="100px" height="150px" src="/media/img/<?=$art->img;?>" alt="<?=$art->title;?>" title="<?=$art->title;?>">
                                        <span class="stroke"></span>
                                    </a>
                                </figure>




                                <div class="developer">

                                    <?//=$art['desc'];?>

                                </div>



                            </div>
                        </li>

                      <div style="display: inline-block;">
                          <form method="post" action="/comparison/delete">
                             <input type="hidden" name="com" value="<?=$art->id;?>">
                           <!--   <span style="cursor: pointer;" onclick="submit()">x</span>  -->
                          <input type='image' class="delete_img" src="/media/images/remove.png">
                          </form>
                      </div>
                        <?php endforeach;?>  </ul>


            <!-- Posts navigation -->	</div>
    </div><!--#content-->

</div><!--.row-->

