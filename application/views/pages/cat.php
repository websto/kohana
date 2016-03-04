<div class="row">

        <aside id="sidebar" class="grid_3 right">

            <?php echo View::factory('/pages/menu'); ?>


    <div id="archives-3" class="widget"><h3 style="color:#9acd32;">Сортировать по</h3>
        <?php    function buildTree($data, $parent_id = 0) {
            $result = array();
            foreach ($data as $row) {
                if ($row['parent_id'] == $parent_id) {
                    $result[$row['id']] = $row;
                    $result[$row['id']]['children']  = buildTree($data, $row['id']);
                }
            }
            return $result;
        }
        $tree = buildTree($sortL, 0);
        ?>
        <form method="post">
        <?php foreach ($tree as $groups): ?>
            <select class="sort_select" name='sort[]'>
                <option value=""><?=$groups['category'];?></option>
                <?php foreach ($groups['children'] as $gr): ?>
                <option value="<?=$gr['category'];?>"><?=$gr['category'];?></option>
                <?php endforeach; ?>
            </select><br> <?php endforeach; ?><input type="submit" value="Сравнить">
        </form>
        </div>
    </aside><!--sidebar-->

        <div id="content" class="grid_9 right">
            <div class="box">

                <h1 class="sp-title">Категория:  <span> <?php if (isset($meta)) foreach ($meta as $m) {echo $m['category'];}?></span></h1>


                <div style="float: left;">
                              <form method="post">
                         <select onchange="submit()" name="cookie" class="select">
                        <option disabled selected="">Количество товаров на странице</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                    </select> </form>
              </div>


                <span>&nbsp;</span>

             <!--   <input type="radio" name="view-control" class="view-control-1" checked="checked"/>
                <span class="control first"><img src="/media/images/blockinline.png"/></span>
             -->
                <input type="radio" name="view-control" class="view-control-4" checked="checked"/>
                <span class="control last"><img src="/media/images/block.png"/></span>

                <input type="radio" name="view-control" class="view-control-3"/>
                <span class="control"><img src="/media/images/blocklist.png"/></span>

                <input type="radio" name="view-control" class="view-control-2"/>
                <span class="control"><img src="/media/images/blockinline.png"/></span>




                <ul id="item-list">
                    <form method="post" action="/comparison" id="form">
                <?php
                      if (isset($cat))

                      foreach($cat as $art):

                      $str = Helper_MyUrl::SEOIt($art['title']); ?>


			<li>
                <div style="margin-bottom: 20px;">

             <header class="entry-header">
             <div class="title"><a href="<?php echo URL::site($art['id'].'/'.$str);?>"><?=$art['title'];?></a></div>
             </header>



         <figure class="featured-thumbnail">
            <a href="<?php echo URL::site($art['id'].'/'.$str);?>">
         <img src="/media/img/<?=$art['img'];?>" alt="<?=$art['title'];?>" title="<?=$art['title'];?>">
                <span class="stroke"></span>
            </a>
        </figure>




        <div class="developer">

           <?=$art['desc'];?>

        </div>

                    <div style="margin-top: 10px; display: inline-block;">

                              <input type="checkbox" name="items[]" value="<?=$art['id'];?>">
                              <a style="cursor: pointer;" onclick="document.getElementById('form').submit(); return false;">В&nbsp;сравнении</a>

                    </div>


                <!--    <button onclick="document.getElementById('cart_button').submit(); return false;" style="cursor: pointer" name="cart_button" value="<?php echo $art['id'];?>" id="cart_button" data-id="<?php echo $art['id'];?>">Купить</button>
                  -->

                    <a id="cart_button" data-id="<?=$art['id'];?>" href="#">Купить</a>

         </div>
            </li>
                            <?php endforeach;?>  </ul>
                </form>

                <script type="text/javascript">
                    $(function() {

                        $(document).on('click', '#cart_button, #cart_bar .plus', function() {


                                var cart_button = $(this).data('id');
                                var plus = $(this).parent().parent().data('id');

                         if ($.isNumeric(cart_button) == true) {var id = cart_button; }
                         if ($.isNumeric(plus) == true) {var id = plus; }


                            if(id) {

                                $.ajax({

                                    type: "POST",

                                    url: "/cart/items_count",

                                    data: {id : id},

                                    dataType: "json",

                                    cache: false,

                                    async : false,

                                    beforeSend: function(html) {


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

          <?php if (isset($pag)) echo $pag; ?>
                <!-- Posts navigation -->	</div>
        </div><!--#content-->

    </div><!--.row-->

   