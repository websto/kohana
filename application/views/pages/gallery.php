<div class="primary_content_wrap">
<div class="row">
<div id="content" class="grid_12">
<div class="box">
<div class="header-title">
    <h1>Галерея</h1>

</div>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/zoom.css"/>

<div id="gallery" class="four_columns">

    <div id="vlightbox" style="float: left; display: inline-block;">

<?php   foreach($gall as $art):?>
    <a class="vlightbox" href="/media/img/gallery/<?=$art->path;?>" title="African animals">
    <img style="width: 230px;height: 230px; float: left;" src="/media/img/gallery/<?=$art->path;?>" alt=" " /><span></span></a>



            <div class="folio-desc">
                <h4><?=$art->title;?></h4>
                <p class="excerpt"><?=$art->desc;?></p>
            </div>


        <?php endforeach;?></div>



    <div class="clear"></div>
</div>





<div class="pagenavi"><span class="pages">Page 1 of 2</span><span class="current">1</span><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/page/2/" class="inactive">2</a></div>
<!-- Posts navigation -->	<!-- Posts Navigation -->

</div>
</div><!-- #content -->
<!-- end #main -->
</div><!--.row-->
</div>
