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
          <?php foreach ($news as $art):?>
        <article id="post-67" class="post-67 post type-post status-publish format-standard hentry category-awards-recognitions category-minim-veniam category-ullamco-laboris tag-sit-amet post-holder cat-8-id cat-7-id cat-5-id">

            <header class="entry-header">




                <h1 class="entry-title left-indent"><?=$art->title;?></h1>





                <div class="post-meta">
                   <br>
                    <div class="clear"></div>
                    <div class="dates">
                        <time><?=$art->date;?></time>
                    </div>
                </div>


            </header>



            <figure class="featured-thumbnail large">
                <img style="width: 780px; height: 385px;" src="/media/img/news/<?=$art->img;?>" alt="<?=$art->title;?>">
                <span class="stroke"></span>
            </figure>
            <div class="clear"></div>




            <div class="content">
                <?=$art->text;?>

                <!--// .content -->
            </div>


        </article>

              <?php endforeach;?>


    <!--    <h3 class="sp-title">Related Posts</h3>

        <ul class="related-posts">

            <li>
                <figure class="featured-thumbnail">
                    <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2009/" title="cupidatat non proident – 2009">
                        <img src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-5-173x120.jpg" alt="cupidatat non proident – 2009">
                        <span class="stroke"></span>
                    </a>
                </figure>

                <h5><a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2009/"> cupidatat non proident – 2009 </a></h5>
            </li>


        </ul>     -->





        <!-- You can start editing here. -->

            <?php  if (!empty($comments)): echo "<p class='post_comment'>Комментарии:</p>";
            foreach($comments as $comment): ?>

                <div class='post_div'><p class='post_comment_add2'>Комментарий добавил(а): <strong class='post_comment_add1'><?php echo ($comment['author']); ?></strong></p><p class='post_comment_add'>Дата: <?php echo ($comment['date']);?></p><p><?php echo ($comment['text']); ?></p></div>

                <?php endforeach; endif;?>






        <div id="respond">

            <h3>Add your comment</h3>



            <form method="post" id="commentform">


                <p class="field"><input type="text" name="author" id="author" value="Name:" onfocus="if(this.value=='Name:'){this.value=''}" onblur="if(this.value==''){this.value='Name:'}" size="22" tabindex="1" aria-required="true"></p>


                <!--<p><small><strong>XHTML:</strong> You can use these tags: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>-->

                <p class="area"><textarea name="text" id="comment" cols="58" rows="10" tabindex="4" onfocus="if(this.value=='Comment:'){this.value=''}" onblur="if(this.value==''){this.value='Comment:'}">Comment:</textarea></p>

                <p>Введите символи <br><img style="margin:2px;" src="/media/img/noise.php" width="120px" height="50px"></p>
                <p><input class="fm" style='margin-left:4px; font-size:14px; font-weight:bold; color:#9900CC;' name="pr" type="text" size="10" maxlength="5"></p>

                <p><input name="submit" type="submit" id="submit" tabindex="5" value="Комментировать">

                </p>

            </form>

        </div>




        </div>
        </div>

    </div><!--.row-->

   