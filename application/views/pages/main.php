<section id="slider-wrapper">
    <script type="text/javascript">
        jQuery(window).load(function() {
            jQuery(function(){
                jQuery('.camera_wrap').camera({
                    autoAdvance			: true,	//true, false
                    mobileAutoAdvance	: true, //true, false. Auto-advancing for mobile devices
                    barDirection		: 'leftToRight',	//'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
                    barPosition			: 'bottom',	//'bottom', 'left', 'top', 'right'
                    cols				: 6,
                    easing				: 'easeInOutExpo',	//for the complete list http://jqueryui.com/demos/effect/easing.html
                    mobileEasing		: '',	//leave empty if you want to display the same easing on mobile devices and on desktop etc.
                    fx					: 'mosaicRandom',	//'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 			'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
                    //you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
                    mobileFx			: '',	//leave empty if you want to display the same effect on mobile devices and on desktop etc.
                    gridDifference		: 250,	//to make the grid blocks slower than the slices, this value must be smaller than transPeriod
                    height				: '44.38%',	//here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
                    imagePath			: 'images/',	//he path to the image folder (it serves for the blank.gif, when you want to display videos)
                    loader				: 'bar',	//pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
                    loaderColor			: '#222222',
                    loaderBgColor		: '#f2880a',
                    loaderOpacity		: 1,	//0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
                    loaderPadding		: 0,	//how many empty pixels you want to display between the loader and its background
                    loaderStroke		: 3,	//the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
                    minHeight			: '178px',	//you can also leave it blank
                    navigation			: false,	//true or false, to display or not the navigation buttons
                    navigationHover		: false,	//if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
                    pagination			: false,
                    playPause			: false,	//true or false, to display or not the play/pause buttons
                    pieDiameter			: 38,
                    piePosition			: 'LeftBottom',	//'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
                    rows				: 4,
                    slicedCols			: 6,
                    slicedRows			: 4,
                    thumbnails			: true,
                    time				: 7000,	//milliseconds between the end of the sliding effect and the start of the next one
                    transPeriod			: 1500,	//lenght of the sliding effect in milliseconds

                    ////////callbacks

                    onEndTransition		: function() {  },	//this callback is invoked when the transition effect ends
                    onLoaded			: function() {  },	//this callback is invoked when the image on a slide has completely loaded
                    onStartLoading		: function() {  },	//this callback is invoked when the image on a slide start loading
                    onStartTransition	: function() {  }	//this callback is invoked when the transition effect starts
                });
            });
        });
    </script>

  <!--  <div class="camera_wrap">
        <?php  foreach($slider as $art): ?>
        <div data-src='/media/img/slider/<?=$art['path'];?>' data-link='<?=$art['href'];?>' data-thumb='/media/img/slider/<?=$art['path'];?>'>
            <div class="camera_caption moveFromLeft" data-easing="easeOutBack">
               <?=$art['desc'];?>
            </div>
        </div>    <?php endforeach;?>

    </div>-->
</section><!--#slider-->
<div class="primary_content_wrap">
<div class="row"><div class="before-content-area clearfix">
    <div class="grid_12">
        <div id="my_requestquotewidget-3" class="box">					<div class="top-box">
            <h2>Welcome!</h2>
            <div class="box-text">
                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 													</div><!-- end 'with title' -->
        </div>
        </div>        	</div>
</div>
<div class="clearfix">
    <div class="grid_3">
        <div class="left-content-area">

    <?php echo View::factory('/pages/menu'); ?>

            <div id="my_twitterwidget-2" class="widget">
                <div id="twitter-806388" class="twitter"></div>
                <script>
                    jQuery("#twitter-806388").getTwitter({
                        userName: "lorem_ipsum_dol",
                        numTweets: 3,
                        loaderText: "Loading tweets...",
                        slideIn: false,
                        showHeading: true,
                        beforeHeading: "<h2>",
                        afterHeading: "</h2>",
                        headingText: "Recent tweets",
                        id:"#twitter-806388",
                        showProfileLink: true
                    });
                </script>


            </div>
        </div>
    </div>

 <div class="grid_6">
 <div class="center-content-area">
 <div id="my_postwidget-3" class="box">


     <h2 style="margin-bottom: 0px;">Latest News</h2>

 <ul class="latestpost">

                     <?php foreach ($news as $art):
                              $str = Helper_MyUrl::SEOIt($art['title']);         ?>
                    <li class="clearfix">
                        <figure class="featured-thumbnail">
                            <a href="<?php echo URL::site($art['id'].'/'.$str);?>" title="<?=$art['title'];?>">
                                <img style="width: 180px; height: 200px;" src="/media/img/<?=$art['img'];?>" alt="<?=$art['title'];?>" />
                                <span class="stroke"></span>
                            </a>
                        </figure>

                        <div class="wrapper">
                            <div>
                                <time></time>
                           </div>
                            <div class="extra-wrap">
                                <h4><a href="<?php echo URL::site($art['id'].'/'.$str);?>" rel="bookmark" title="<?=$art['title'];?>"><?=$art['title'];?></a></h4>
                                <div class="excerpt">
                                    <?=$art['desc'];?>													<a href="<?php echo URL::site($art['id'].'/'.$str);?>" class="more-link"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                              <?php endforeach;?>

                </ul>



                <!-- Link under post cycle -->
            <!--    <div class="border-top">
                    <a href="blog/" class="button">see  all  articles</a>
                </div>-->


            </div>
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
                            <?=$art->title;?>
                        </a>
                    </li>
                              <?php endforeach;?>
            <!--        <li class="clearfix">
                        <figure class="featured-thumbnail">
                            <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2009/" title="cupidatat non proident &#8211; 2009">
                                <img src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-5-191x85.jpg" alt="cupidatat non proident &#8211; 2009" />
                                <span class="stroke"></span>
                            </a>
                        </figure>
                        <time datetime="2011-04-14T20:28">14 April 2011</time>
                        <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2009/" rel="bookmark" title="Permanent Link to cupidatat non proident &#8211; 2009" class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing. 										</a>
                    </li>

                    <li class="clearfix">
                        <figure class="featured-thumbnail">
                            <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2012/" title="cupidatat non proident &#8211; 2012">
                                <img src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-6-191x85.jpg" alt="cupidatat non proident &#8211; 2012" />
                                <span class="stroke"></span>
                            </a>
                        </figure>
                        <time datetime="2011-02-14T20:26">14 February 2011</time>
                        <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2012/" rel="bookmark" title="Permanent Link to cupidatat non proident &#8211; 2012" class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing. 										</a>
                    </li>

                    <li class="clearfix">
                        <figure class="featured-thumbnail">
                            <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/" title="cupidatat non proident &#8211; 2007">
                                <img src="http://livedemo00.template-help.com/wordpress_42065/wp-content/uploads/2012/11/slide-7-191x85.jpg" alt="cupidatat non proident &#8211; 2007" />
                                <span class="stroke"></span>
                            </a>
                        </figure>
                        <time datetime="2011-05-14T20:29">14 May 2011</time>
                        <a href="http://livedemo00.template-help.com/wordpress_42065/awards-recognitions/cupidatat-non-proident-2007/" rel="bookmark" title="Permanent Link to cupidatat non proident &#8211; 2007" class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing. 										</a>
                    </li>  -->
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