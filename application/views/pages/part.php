<div class="row" style="margin-top: 0px;">
    <aside id="sidebar" class="grid_3 right">

        <?php echo View::factory('/pages/menu'); ?>


        <div id="archives-3" class="widget"><h3>Archives</h3>		<ul>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/07/" title="July 2011">July 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/05/" title="May 2011">May 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/04/" title="April 2011">April 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/03/" title="March 2011">March 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/02/" title="February 2011">February 2011</a></li>
            <li><a href="http://livedemo00.template-help.com/wordpress_42065/2011/01/" title="January 2011">January 2011</a></li>
        </ul>
        </div>
    </aside><!--sidebar-->


    <script type='text/javascript' src='/media/js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='/media/js/jquery.idTabs.js'></script>
    <script type="text/javascript" src="/media/js/product.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/part.css"/>

    <div id="content" class="grid_9 right">

    <div id="center_column" class="center_column grid_9">



    <script type="text/javascript">
        // <![CDATA[

        // internal settings
        var currencySign = '$';
        var currencyRate = '1';
        var currencyFormat = '1';
        var currencyBlank = '0';
        var taxRate = 0;
        var jqZoomEnabled = true;

        //JS Hook
        var oosHookJsCodeFunctions = new Array();

        // Parameters
        var id_product = '1';
        var productHasAttributes = false;
        var quantitiesDisplayAllowed = true;
        var quantityAvailable = 159;
        var allowBuyWhenOutOfStock = false;
        var availableNowValue = '';
        var availableLaterValue = '';
        var productPriceTaxExcluded = 549 - 0.000000;
        var reduction_percent = 0;
        var reduction_price = 0;
        var specific_price = 0;
        var product_specific_price = new Array();
        product_specific_price['0'] = '';
        var specific_currency = false;
        var group_reduction = '1';
        var default_eco_tax = 0.000000;
        var ecotaxTax_rate = 0;
        //var currentDate = '2013-01-23 15:34:55';
        var maxQuantityToAllowDisplayOfLastQuantityMessage = 3;
        var noTaxForThisProduct = true;
        var displayPrice = 0;
        var productReference = '';
        var productAvailableForOrder = '1';
        var productShowPrice = '1';
        var productUnitPriceRatio = '0.000000';
        var idDefaultImage = 1;
        var stock_management = 1;

        var productPriceWithoutRedution = '549';
        var productPrice = '549';

        // Customizable field
        var customizationFields = new Array();
        customizationFields[0] = new Array();
        customizationFields[0][0] = 'img0';
        customizationFields[0][1] = 0;

        // Images

        var combinationImages = new Array();


        combinationImages[0] = new Array();
       /* combinationImages[0][0] = 1;
        combinationImages[0][1] = 2;   */

        // Translations
        var doesntExist = 'This combination does not exist for this product. Please choose another.';
        var doesntExistNoMore = 'This product is no longer in stock';
        var doesntExistNoMoreBut = 'with those attributes but is available with others';
        var uploading_in_progress = 'Uploading in progress, please wait...';
        var fieldRequired = 'Please fill in all required fields, then save the customization.';

        // Combinations attributes informations
        var attributesCombinations = new Array();
        //]]>
    </script>

    <!-- Breadcrumb -->
    <?php  if (isset($part))
        foreach($part as $art):
            ?>
        <div class="breadcrumb bordercolor">
            <div class="breadcrumb_inner">

                <span class="navigation_page"><?php  if (isset($tree)) {echo $tree;}?></span>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <div id="primary_block" class="clearfix">


            <!-- right infos-->
            <div id="pb-right-column">
                <!-- product img-->
                <div id="image-block" class="bordercolor">

                    <img src="/media/img/<?=$art['img'];?>" class="jqzoom" alt="/media/img/<?=$art['img'];?>" id="bigpic" width="304px" height="304px" style="">

                </div>

                <!-- thumbnails -->
                <div id="views_block">
                    <span class="view_scroll_spacer"><a id="view_scroll_left" class="hidden" title="Other views" href="javascript:{}" style="cursor: default; opacity: 0;">Previous</a></span>
                    <div id="thumbs_list">
                        <ul id="thumbs_list_frame" style="width: 358px;">
                            <?php if (!empty($art['slider'])): $a = unserialize($art['slider']);
                            $i=0; $s=1;  echo "<script type='text/javascript'> combinationImages[0][0] = 1;</script>";
                            foreach ($a as $b): $i++; $s++;?>  <?php echo "<script> combinationImages[0][$i] = $s; </script>"; ?>
                                <li id="thumbnail_<?=$i;?>" class="" style="display: list-item;">
                                    <a href="/media/img/<?=$b;?>" rel="other-views" class="thickbox bordercolor shown">
                                        <img id="thumb_<?=$i;?>" src="/media/img/<?=$b;?>" alt="" height="80px" width="80px">
                                    </a>
                                </li>
                                <?php endforeach; endif;?>
                        </ul>
                    </div>
                    <a id="view_scroll_right" title="Other views" href="javascript:{}" style="cursor: pointer; opacity: 1; display: block;">Next</a>		</div>
                <p class="resetimg" style="display:none;"><span id="wrapResetImages" style="display: none;">
         <!-- <img src="http://livedemo00.template-help.com/prestashop_41588/themes/theme499/img/icon/cancel_11x13.gif" alt="Cancel" width="11" height="13"> <a id="resetImages" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=1&amp;controller=product&amp;id_lang=1" onclick="$('span#wrapResetImages').hide('slow');return (false);">Display all pictures</a></span></p>
           -->


            </div>

            <!-- left infos-->
            <div id="pb-left-column">
                <h1><?=$art['title'];?></h1>




                <!-- add to cart form-->
                <form id="buy_block" class="bordercolor" action="http://livedemo00.template-help.com/prestashop_41588/index.php?controller=cart" method="post">
                    <!-- prices -->



                    <div class="price bordercolor">

				<span class="our_price_display">
									<span id="our_price_display" class="pricecolor">Цена: <?=$art['price'];?> грн.</span>
					<!---->
								</span>


                    </div>



                    <div id="short_description_block" class="bordercolor">
                        <div id="short_description_content" class="rte align_justify">
                            <p> <?=$art['desc'];?></p></div>
                        <p class="buttons_bottom_block"><a href="javascript:{}" class="button">Подробнее</a></p>

                        <!-- Out of stock hook -->
                        <p id="oosHook" style="display: none;">
                            <script type="text/javascript">
                                $(function(){
                                    $('a[href=#idTab5]').click(function(){
                                        $('*[id^="idTab"]').addClass('block_hidden_only_for_screen');
                                        $('div#idTab5').removeClass('block_hidden_only_for_screen');

                                        $('ul#more_info_tabs a[href^="#idTab"]').removeClass('selected');
                                        $('a[href="#idTab5"]').addClass('selected');
                                    });
                                });
                            </script>
                        </p>

                        <!--start print-->

                        <ul id="usefull_link_block" class="bordercolor">

                            <li id="left_share_fb">
                                <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Flivedemo00.template-help.com%2Fprestashop_41588%2Findex.php%3Fid_product%3D1%26controller%3Dproduct%26id_lang%3D1&amp;t=Lorem+ipsum+duis+interdum+eget+urna" class="js-new-window">Share on Facebook</a>
                            </li>
                            <script text="javascript">

                                $('document').ready(function(){
                                    $('#send_friend_button').fancybox({
                                        'hideOnContentClick': false
                                    });

                                    $('#sendEmail').click(function(){
                                        var datas = [];
                                        $('#fancybox-content').find('input').each(function(index){
                                            var o = {};
                                            o.key = $(this).attr('name');
                                            o.value = $(this).val();
                                            if (o.value != '')
                                                datas.push(o);
                                        });
                                        if (datas.length >= 3)
                                        {
                                            $.ajax({
                                                url: "/prestashop_41588/modules/sendtoafriend/sendtoafriend_ajax.php",
                                                post: "POST",
                                                data: {action: 'sendToMyFriend', secure_key: '1ab0b223915b7084af94a571d836d138', friend: JSON.stringify(datas)},
                                                dataType: "json",
                                                success: function(result){
                                                    $.fancybox.close();
                                                }
                                            });
                                        }
                                        else
                                            $('#send_friend_form_error').text("You did not fill required fields");
                                    });
                                });

                            </script>
                            <li class="sendtofriend">
                                <a id="send_friend_button" href="#send_friend_form">Send to a friend</a>
                            </li>

                            <div style="display: none;">
                                <div id="send_friend_form">
                                    <h2 class="title">Send to a friend</h2>
                                    <div class="product clearfix">
                                        <img src="http://livedemo00.template-help.com/prestashop_41588/img/p/1/1-home_default.jpg" height="180" width="180" alt="Lorem ipsum duis interdum eget urna">
                                        <div class="product_desc">
                                            <p class="product_name"><strong>Lorem ipsum duis interdum eget urna</strong></p>
                                            <p>From ancient times people always wanted to find a harmony. Greek philosophers stated that harmony is the basic element of a nature, and everything that surrounds us is in harmony, however mankind still can't find a way to reach this condition. So, obviously we must start making our lives more harmonious. We spend a great amount of time of our life at our home (house or apartment).</p>
                                        </div>
                                    </div>

                                    <div class="send_friend_form_content">
                                        <div id="send_friend_form_error"></div>
                                        <div class="form_container">
                                            <p class="intro_form">Recipient :</p>
                                            <p class="text">
                                                <label for="friend_name">Name of your friend <sup class="required">*</sup> :</label>
                                                <input id="friend_name" name="friend_name" type="text" value="">
                                            </p>
                                            <p class="text">
                                                <label for="friend_email">E-mail address of your friend <sup class="required">*</sup> :</label>
                                                <input id="friend_email" name="friend_email" type="text" value="">
                                            </p>
                                            <p class="txt_required"><sup class="required">*</sup> Required fields</p>
                                        </div>
                                        <p class="submit">
                                            <input id="id_product_comment_send" name="id_product" type="hidden" value="1">
                                            <!--   <a href="#" onclick="$.fancybox.close();">Cancel</a>&nbsp;or&nbsp; -->
                                            <input id="sendEmail" class="button" name="sendEmail" type="submit" value="Send">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <li class="print"><a href="javascript:print();">Print</a></li>
                        </ul>
                        <!--end print-->


                        <div class="clearblock"></div>
                    </div>
                    <!-- hidden datas -->

                </form>
            </div>


        </div>



        <!-- description and features -->
        <div id="more_info_block">
            <ul id="more_info_tabs" class="idTabs idTabsShort ">
                <li><a id="more_info_tab_more_info" href="#idTab1" class="selected">More info</a></li>
                <li><a id="more_info_tab_data_sheet" href="#idTab2" class="">Data sheet</a></li>
                <li><a id="more_info_tab_attachments" href="#idTab9" class="">Download</a></li>
                <li><a href="#idTab4" class="">Accessories</a></li>
                <li><a href="#idTab5" class="idTabHrefShort">Comments</a></li>
            </ul>
            <div id="more_info_sheets" class="bordercolor bgcolor">
                <!-- full description -->
                <div id="idTab1" class=""><div>
                    <?=$art['text'];?>
                </div></div>
                <!-- product's features -->
                <ul id="idTab2" class="bullet block_hidden_only_for_screen">
                    <li><span>Width</span> 10"</li>
                    <li><span>Height</span> 15"</li>
                    <li><span>Depth</span> 10"</li>
                    <li><span>Weight</span> 0.5 kg</li>
                    <li><span>Size</span> L</li>
                </ul>
                <ul id="idTab9" class="bullet block_hidden_only_for_screen">
                   <?php if(!empty($auth_user)) {$zip = $art['zip'];
                   echo  "<li><a href='/media/files/$zip'>Download</a></li>"; }
                   else {echo "<li><a href='/user/login'>Информация доступна только зарегистрированным пользователям</a></li>";}
                     ?>
                </ul>
                <!-- accessories -->
                <ul id="idTab4" class="block_hidden_only_for_screen">
                    <li class="ajax_block_product bordercolor first_item product_accessories_description">
                        <div class="accessories_desc">
                            <a href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=2&amp;controller=product&amp;id_lang=1" title="" class="accessory_image product_img_link bordercolor"><img src="http://livedemo00.template-help.com/prestashop_41588/img/p/4/4-medium_default.jpg" alt="" width="80" height="80"></a>
                            <h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=2&amp;controller=product&amp;id_lang=1">Consectetur...</a></h5>
                            <a class="product_descr" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=2&amp;controller=product&amp;id_lang=1" title="More">Greek philosophers stated that harmony is the basic element of a nature, and everything that surrounds us is in...</a>
                        </div>
                        <div class="accessories_price bordercolor">
                            <span class="price">$215.00</span>										<a class="exclusive button ajax_add_to_cart_button" href="http://livedemo00.template-help.com/prestashop_41588/index.php?controller=cart&amp;qty=1&amp;id_product=2&amp;token=0188f12e4b16f2b5e78eb52cefd2f810&amp;add=" rel="ajax_id_product_2" title="Add to cart">Add to cart</a>
                        </div>
                    </li>
                    <li class="ajax_block_product bordercolor item product_accessories_description">
                        <div class="accessories_desc">
                            <a href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=4&amp;controller=product&amp;id_lang=1" title="" class="accessory_image product_img_link bordercolor"><img src="http://livedemo00.template-help.com/prestashop_41588/img/p/1/0/10-medium_default.jpg" alt="" width="80" height="80"></a>
                            <h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=4&amp;controller=product&amp;id_lang=1">Orci hendrerit...</a></h5>
                            <a class="product_descr" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=4&amp;controller=product&amp;id_lang=1" title="More">We spend a great amount of time of our life at our home (house or apartment). It is very important to feel the...</a>
                        </div>
                        <div class="accessories_price bordercolor">
                            <span class="price">$315.00</span>										<a class="exclusive button ajax_add_to_cart_button" href="http://livedemo00.template-help.com/prestashop_41588/index.php?controller=cart&amp;qty=1&amp;id_product=4&amp;token=0188f12e4b16f2b5e78eb52cefd2f810&amp;add=" rel="ajax_id_product_4" title="Add to cart">Add to cart</a>
                        </div>
                    </li>
                    <li class="ajax_block_product bordercolor last_item product_accessories_description">
                        <div class="accessories_desc">
                            <a href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=9&amp;controller=product&amp;id_lang=1" title="" class="accessory_image product_img_link bordercolor"><img src="http://livedemo00.template-help.com/prestashop_41588/img/p/2/5/25-medium_default.jpg" alt="" width="80" height="80"></a>
                            <h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=9&amp;controller=product&amp;id_lang=1">Arne Jacobsen Egg...</a></h5>
                            <a class="product_descr" href="http://livedemo00.template-help.com/prestashop_41588/index.php?id_product=9&amp;controller=product&amp;id_lang=1" title="More">This product has unique design and many special options which could indeed help you. You know, nowadays good design...</a>
                        </div>
                        <div class="accessories_price bordercolor">
                            <span class="price">$182.75</span>										<span class="exclusive">Add to cart</span>
                            <span class="availability">Out of stock</span>
                        </div>
                    </li>
                </ul>

                <div id="idTab5" class="block_hidden_only_for_screen">
                    <div id="product_comments_block_tab">

                        <?php  if (!empty($comments)): echo "<p class='post_comment'>Комментарии:</p>";
                        foreach($comments as $comment): ?>

                            <div style="clear: both;" class='post_div'><p class='post_comment_add2'>Комментарий добавил(а): <strong class='post_comment_add1'><?php echo ($comment['author']); ?></strong></p><p class='post_comment_add'>Дата: <?php echo ($comment['date']);?></p><p><?php echo ($comment['text']); ?></p></div>

                            <?php endforeach; endif;?>

                        <h3>Add your comment</h3>



                        <form method="post" id="commentform">


                            <p class="field"><input type="text" name="author" id="author" value="Name:" onfocus="if(this.value=='Name:'){this.value=''}" onblur="if(this.value==''){this.value='Name:'}" size="22" tabindex="1" aria-required="true"></p>


                            <p class="area"><textarea style="background: #cccaaa;" name="text" id="comment" cols="58" rows="10" tabindex="4" onfocus="if(this.value=='Comment:'){this.value=''}" onblur="if(this.value==''){this.value='Comment:'}">Comment:</textarea></p>

                            <p>Введите символи <br><img style="margin:2px;" src="/media/img/noise.php" width="120px" height="50px"></p>
                            <p><input class="fm" style='margin-left:4px; font-size:14px; font-weight:bold; color:#9900CC;' name="pr" type="text" size="10" maxlength="5"></p>

                            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Комментировать">

                            </p>

                        </form>


                    </div>
                </div>



                <!-- Fancybox -->
              <!--  <div style="display: none;">
                    <div id="new_comment_form">
                        <form action="#">
                            <h2 class="title">Write your review</h2>
                            <div class="product clearfix">
                                <img src="http://livedemo00.template-help.com/prestashop_41588/img/p/1/1-home_default.jpg" alt="Lorem ipsum duis interdum eget urna">
                                <div class="product_desc">
                                    <p class="product_name"><strong>Lorem ipsum duis interdum eget urna</strong></p>
                                    <p>From ancient times people always wanted to find a harmony. Greek philosophers stated that harmony is the basic element of a nature, and everything that surrounds us is in harmony, however mankind still can't find a way to reach this condition. So, obviously we must start making our lives more harmonious. We spend a great amount of time of our life at our home (house or apartment).</p>
                                </div>
                            </div>
                            <div class="new_comment_form_content">
                                <h2>Write your review</h2>

                                <div id="new_comment_form_error" class="error" style="display: none;">
                                    <ul></ul>
                                </div>
                                <ul id="criterions_list">
                                    <li class="clearfix">
                                        <label>Quality:</label>
                                        <div class="star_content">
                                            <input type="hidden" name="criterion[1]" value="3"><div class="cancel"><a title="Cancel Rating"></a></div><div class="star star_on"><a title="1">1</a></div>
                                            <div class="star star_on"><a title="2">2</a></div>
                                            <div class="star star_on"><a title="3">3</a></div>
                                            <div class="star"><a title="4">4</a></div>
                                            <div class="star"><a title="5">5</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <label for="comment_title">Title: <sup class="required">*</sup></label>
                                <input id="comment_title" name="title" type="text" value="">
                                <label for="content">Comment: <sup class="required">*</sup></label>
                                <textarea id="content" name="content"></textarea>
                                <label>Your name: <sup class="required">*</sup></label>
                                <input id="commentCustomerName" name="customer_name" type="text" value="">
                                <div id="new_comment_form_footer">
                                    <input id="id_product_comment_send" name="id_product" type="hidden" value="1">
                                    <p class="fl required"><sup>*</sup> Required fields</p>
                                    <p class="fr">

                                        <a href="#" onclick="$.fancybox.close();">Cancel</a>&nbsp;or&nbsp;
                                        <input class="button" id="submitNewMessage" name="submitMessage" type="submit" value="Send">
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  -->
                <!-- End fancybox -->
            </div>
            <?php endforeach;?>

    </div>

    </div>




    </div><!--#content-->