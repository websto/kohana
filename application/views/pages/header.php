<header id="header" style="margin-top: -20px;">
    <div class="row-top clearfix">

            <div id="meta-2" class="widget-header">
                <ul>
                    <a href="/" id="logo"><img src="/media/images/logo.png" alt="leks-design.com" title="leks-design.com"></a>

                    <li><a href="/user/create">Регистрация</a></li>
                        <!-- <li><a href="/user/login">Войти</a></li>  -->

                <?php
                if(empty($auth_user)) {
                    echo "<li><a href='/user/login'>Войти</a></li>"; }
                else {
                    echo "<li><a href='#'>Привет &nbsp $auth_user</a></li>";
                    echo "<li><a href='/user/logout'>Выйти</a></li>";}
                 ?>
                    <li><a href="/gallery">Галерея</a></li>
                    <li><a href="/contacts">Контакты</a></li>
            </ul>


             <div class="search">   <form action='/search'>
                    <input style="width: 200px;" name="text" type="text" x-webkit-speech="" onwebkitspeechchange="this.form.submit();">
                    <input type="submit" value="GO" style="height: 24px;">
                </form>
             </div>

                <div style="display: inline-block">
                    <a id="cart_p" href="#" style="text-decoration: none !important;">
                <img style="margin-left: 10px; margin-right: 10px" src="/media/images/shopping.gif">
                <span style="margin-right: 10px"><strong>Корзина</strong></span>
                <span id="cart" style="width: 28px; display: inline-block;"><?=$cnt['count_items']; ?></span>
                    </a>
                </div>

            						</div><!--#widget-header-->
    </div>
    <div class="row-logo clearfix" style="margin-top: -30px;">
    <!--    <div class="logo">
            <a href="/" id="logo"><img src="/media/images/logo.png" alt="leks-design.com" title="leks-design.com"></a>
            <p class="tagline">Just another WordPress site</p>
        </div>-->
        <nav class="primary">
        <!--    <ul id="topnav" class="sf-menu"><li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item menu-item-205"><a href="http://livedemo00.template-help.com/wordpress_42065/">Home</a></li>
                <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="http://livedemo00.template-help.com/wordpress_42065/about/">About</a>
                    <ul class="sub-menu">
                        <li id="menu-item-225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-225"><a href="http://livedemo00.template-help.com/wordpress_42065/about/testimonials/">Testimonials</a></li>
                        <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="http://livedemo00.template-help.com/wordpress_42065/about/archives/">Archives</a></li>
                        <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="http://livedemo00.template-help.com/wordpress_42065/about/faqs/">FAQs</a></li>
                    </ul>
                </li>
                <li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-105"><a href="http://livedemo00.template-help.com/wordpress_42065/blog/">Blog</a></li>
                <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/">Gallery</a>
                    <ul class="sub-menu">
                        <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-1-col/">Gallery 1 col</a></li>
                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-2-cols/">Gallery 2 cols</a></li>
                        <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-3-cols/">Gallery 3 cols</a>
                            <ul class="sub-menu">
                                <li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-3-cols/1st-category/">1st category</a></li>
                                <li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-3-cols/2nd-category/">2nd category</a></li>
                                <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a href="http://livedemo00.template-help.com/wordpress_42065/our-gallery/gallery-3-cols/3rd-category/">3rd category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="http://livedemo00.template-help.com/wordpress_42065/contacts/">Contacts</a></li>
            </ul>-->


        </nav>
    </div>
</header>

<div class="cart_panel"><img class="logos" src="/media/images/cart_big2.png" alt="">
    <ul id="cart_bar">
<?php if (!empty($result)): foreach ($result as $art):
   $c = Session::instance()->get("count[$art[id]]");
    ?>
        <li data-id="<?=$art['id'];?>">
            <img class="delete" src="/media/images/cart_del.png" alt="">

            <div class="count">
                <span class="minus"> - </span>
                <b id="cnt_count"> <?=$c;?> </b>
                <span class="plus">  + </span>
            </div>

            <a class="imgC" href="">
                <img width="120" height="120" src="/media/img/<?=$art['img'];?>">
            </a>
            <span class="price"><?=$art['price'];?></span>
        </li>
<?php  endforeach; endif; ?>
    </ul>

    <div class="info">
        <p class="sum">
             <?php if (!empty($cnt['total_price'])) echo "Сумма:". $cnt['total_price'];?>
        </p>

        <div style="float: left">
          <?php if (!empty($cnt['total_price'])): ?>
            <button class="order">Оформить заявку</button>
          <?php endif; ?>
            <a href="#" class="continue">Продолжить покупки</a>
        </div>

  </div>


    <form id="quick_order" action="/">
        <p>Ваш номер телефона: </p>
        <input type="text" name="phone" id="cart_phone" value="+380"> <br>
        <input class="order" type="submit" value="Быстрый заказ">
    </form>
</div>

    <script type="text/javascript">
        $(function() {
                $(document).on('click', '#cart_bar li img.delete, #cart_bar .minus', function() {

                var del = $(this).parent().data('id');
                var minus = $(this).parent().parent().data('id');

                    if ($.isNumeric(del) == true)
                    {
                       var id = del;
                       var url = "/cart/items_remove";
                    }
                    if ($.isNumeric(minus) == true)
                    {
                       var id = minus;
                       var url = "/cart/items_minus";
                    }

                if(id) {

                    $.ajax({

                        type: "POST",

                        url: url,

                        data: {id : id},

                        dataType: "json",

                        cache: false,

                        async : false,

                        beforeSend: function(html) { // запустится до вызова запроса


                            $("#cart").html('');
                            $(".sum").html('Сумма:');
                            $("#cart_bar").html('');
                            //  $("#cnt_count").html('');

                        },

                        success: function(html) {

                            $(".cart_panel").slideDown();
                            $('.cart_panel').css("display", "block");

                            $("#cart").append(html[1]);
                            $(".sum").append( html[2]);
                            $("#cart_bar").append(html[0]);
                            //    $("#cnt_count").append(html[3]);



                        }

                    });

                }
                return false;
            });


      });
    </script>


<style>
    .cart_panel {
        display: none;
        width: 100%;
        position: absolute;
        top: 0;
        border-bottom: 3px solid #d40707;
        right: 0;
        z-index: 100000;
        background: black;
        color: white;}
    .cart_panel img.logos {
        float: left;
        margin: 5px 0;
    }
    .cart_panel ul {
        list-style: none;
        margin-left: 110px;
        margin-top: 11px;
    }
    .cart_panel ul li {
        position: relative;
        margin-right: 20px;
        width: 120px;
        height: 120px;
        float: left;
        margin-bottom: 10px;
    }
    .cart_panel .info {
        float: left;
        margin: 0 25px;
    }

    .cart_panel button, .cart_panel a.continue {
        color: white;
        border: 1px solid white;
        background: black;
        text-decoration: none;
        font-size: 13px;
        width: 150px;
        padding: 6px 0;
        font-family: Arial;
        font-weight: bold;
        display: block;
        text-align: center;
        background-color: #354768;
    }
    .cart_panel div.count {
        position: absolute;
        color: red;
        background-color: rgba(0, 0, 0, 0.7);
        filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#B3000000,endColorstr=#B3000000)";
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#B3000000, endColorstr=#B3000000)";
        padding: 3px 7px;
        border-bottom-right-radius: 10px;
    }

    .cart_panel ul li .delete {
        cursor: pointer;
        position: absolute;
        top: 0;
        right: 0;
    }

    .cart_panel span.price {
        position: absolute;
        bottom: 0;
        color: white;
        background-color: rgba(0, 0, 0, 0.7);
        filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#B3000000,endColorstr=#B3000000)";
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#B3000000, endColorstr=#B3000000)";
        padding: 3px 7px;
        border-bottom-right-radius: 10px;
    }

    .cart_panel div.count .minus, .cart_panel div.count .plus {
        cursor: pointer; font-size: 14px;
    }

</style>

<script type="text/javascript">


    (function() {


    $("#cart_p").click(function() {
        $(".cart_panel").slideToggle();
        $('.cart_panel').css("display", "block");
        return false;
    });
    $(document).on("click", '.continue', function() {
        var loc;
        $(".cart_panel").slideToggle();
        loc = $('.loc').val();
        if (loc) {
            location.replace(loc);
        }
        return false;
    });
    }).call(this);


</script>