<div id="main-panel"><!--  Start of Main Panel -->

<div id="tab" class="ae-widget"> <!--  Start of Tab Widget -->

<ul class="ae-widget-header">  <!--  Start of Tab Controls -->
    <li><a href="#">Sort filters</a></li>
 <!--   <li><a href="#">Forms</a></li> -->
</ul> <!--  End of Tab Controls -->

<div id="message_box">
    <div id="message">

    </div>
</div>
<div class="tabs" class="ae-widget-content">

<div id="tab1" > <!--  Start of Tab 1 -->

<div id="content">
<div class="data">

<div class="ae-widget">

            <?php

            function generate_menu($cat_menu, $level)
            {

                foreach($cat_menu[$level] as $id => $category)

                {
                    echo "<table class='menu_adm'><tr>";
                    echo "<td style='width:90%'>";
                    echo '<li>'.HTML::anchor('#', $category['category'], array('title' => $category['category'],'id' => $id,'rel' => 'CategoryTree')).'</li>';
                    echo "</td>";
                    echo "<td style='width:10%'>";
                    echo "<form method='post' action='/admin_leks/sort/delete'><input type='hidden' name='id' value='$id'> <input onclick='return confirm(\"Вы уверены?\")' type='image' src='/media/admin/css/i/del.png'></form>";
                    echo "</td>";
                    echo "</tr></table>";

                    if(isset($cat_menu[$id]))
                    {
                        echo '<li><ul>';
                        generate_menu($cat_menu, $id);
                        echo '</ul></li>';
                    }
                }
            }

            $cat_menu = array();
            foreach($news as $category)
            {
                $id = $category['id'];
                $cat_menu[$category['parent_id']][$id]['category'] = $category['category'];


            }

            ?>



        <ul id="contextMenu">
            <li><a href="#" rel="edit_category"><img src="/media/admin/css/i/edit.png">&nbsp;&nbsp;Редактировать</a></li>

            <li style="border-top: gray 1px solid; margin-top:5px;"><a href="#" rel="cansel_context"><img src="/media/admin/css/i/cansel.png">&nbsp;&nbsp;Отмена</a></li>
        </ul>


        <div id="category-editor">

            <div id="category-head">
                <a href="#" rel="creat_new_category" id="0" class="button" style="margin-top:3px; float:left;"><img src="/media/admin/css/i/plus.png">  &nbsp;&nbsp;Добавть категорию</a>
            </div>

             <ul id="category-tree">
          <?php  generate_menu($cat_menu, 0);  ?>
            </ul>

        </div>

        <div class="creat_category" style="background: #fff;">
            <div class="popwindow">
                <div class="title_popwindow">
                    Новая категория
                </div>


                <div class="close_popwindow">
                    <a href="#" rel="cancel_creat_new_category" >
                        <img  src="/media/admin/css/i/close.png"/>
                    </a>
                </div>
            </div>

               <form method="post" action="/admin_leks/sort/home" enctype="multipart/form-data">
            <table border="1" style="font-weight: bold;font-size: 16px;">

                <tr>
                    <td>Родительская категория: </td><td id="parent_name">
                    <select id='category_edit_select' name='select_parent_category'>
                         <option selected="selected" value="0">Главная</option>
                        <?php   foreach($news as $cat):?>
                        <option value="<?=$cat['id'];?>"><?=$cat['category'];?></option>
                        <?php  endforeach;?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Название:</td><td><input type="text" name="category_name"/></td>
                </tr>


                <tr>
                    <td colspan="3" style="height:40px; text-align:right;">
                        <input type="submit" name="submit" value="Сохранить"  class="button"/>
                    </td>
                </tr>
            </table></form>
            <div style="display:none" id="parent_id">0</div>
        </div>


        <div class="edit_category" style="background:#ffffff;">
            <div class="popwindow">
                <div class="title_popwindow">
                    Редактировать категорию
                </div>


                <div class="close_popwindow">
                    <a href="#" rel="cancel_edit_category" >
                        <img  src="/media/admin/css/i/close.png"/>
                    </a>
                </div>
            </div>

            <form method="post" action="/admin_leks/sort/edit">
            <table border="1">

                <tr>
                    <td>Родительская категория: </td><td id="parent_name">

                       <select id='category_edit_select' name='select_parent_category'>
                       <?php   foreach($news as $cat):?>
                       <option value="<?=$cat['id'];?>"><?=$cat['category'];?></option>
                        <?php endforeach;?>
                       </select>

                </td>
                </tr>
                <tr>
                    <td>Название:</td><td><input type="text" name="edit_name"/><input type="hidden" name="edit_id"/></td>
                </tr>

                <tr>
                    <td colspan="3" style="height:40px; text-align:right;">
                        <input type="submit" name="submit" value="Сохранить"  class="button"/>
                    </td>
                </tr>
            </table></form>
            <div style="display:none" id="edit_id"></div>
        </div>




    </div>


 </div>
    </div>

</div>  <!--  End of Tab 1 -->


<div> <!--  Start of Tab 2 -->

    <h4>Textfields</h4>
    <form action="#">
        <label for="small">Small Textfield</label>
        <input type="text" class="small ui-corner-all" id="small" />
        <label for="medium">Medium Textfield</label>
        <input type="text" class="medium ui-corner-all" id="medium"/>
        <label for="long">Long Textfield</label>
        <input type="text" class="long ui-corner-all" id="long"/>
    </form>

    <h4>Buttons</h4> <form action="#">
        <input type="submit" value="Submit"  class="ae-widget" />
        <input type="submit" value="Submit"  class="button" />
    </form>

    <h4>Checkboxes & Radio buttons</h4>
    <form action="#">
        <div class="buttonset">
            <input type="radio" id="radio1" name="radio" /><label for="radio1">Choice 1</label>
            <input type="radio" id="radio2" name="radio" checked="checked" /><label for="radio2">Choice 2</label>
            <input type="radio" id="radio3" name="radio" /><label for="radio3">Choice 3</label>
        </div>

        <div class="buttonset">
            <input type="checkbox" id="check1" /><label for="check1">B</label>
            <input type="checkbox" id="check2" /><label for="check2">I</label>
            <input type="checkbox" id="check3" /><label for="check3">U</label>
        </div>
    </form>

    <h4>Select box / Combo box</h4>

    <div class="ui-widget">

        <select id="exc1">
            <option value="">Select one...</option>
            <option value="a">asp</option>
            <option value="c">c</option>
            <option value="cpp">c++</option>
            <option value="cf">coldfusion</option>
            <option value="g">groovy</option>
        </select>
    </div>

    <h4>TextArea</h4>
    <textarea rows="8" cols="42"></textarea>

</div> <!--  End of Tab 2 -->


<div> <!--  Start of Tab 3 -->
    <div class="error"> This is an error message ! Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. </div>
    <div class="warning"> This is an warning message ! Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. </div>
    <div class="success"> This is an success message ! Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. </div>
    <div class="info"> This is an information message ! Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. </div>

    <div class="urgent">
        <h6>Urgent Attention required</h6>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus. Curabitur et lacus ligula.
        </p>
    </div>

</div><!--  End of Tab 3 -->

<div><!--  Start of Tab 4 -->

    <div id="bar" class="ae-widget-sidebar"><!-- Start of Graph -->
        <h4 class="ae-widget-header">Bar Graphs</h4>
        <div class="ae-widget-content">
            <table style="width:400px" >
                <caption>Envato Marketplace</caption>

                <caption id="legend">Profit</caption>

                <thead><td></td><th>GraphicRiver</th><th>Themeforest</th><th>CodeCanyon</th><th>VideoHive</th><th>Activeden</th><th>Audiojungle</th></thead>
                <tbody>
                <tr><th>2006</th><td>10</td><td>40</td><td>0</td><td>20</td><td>10</td><td>20</td>  </tr>
                <tr><th>2007</th><td>20</td><td>120</td><td>0</td><td>50</td><td>30</td><td>40</td>  </tr>
                <tr><th>2008</th><td>50</td><td>140</td><td>0</td><td>60</td><td>70</td><td>50</td>  </tr>
                <tr><th>2009</th><td>70</td><td>160</td><td>10</td><td>70</td><td>80</td><td>60</td>  </tr>
                <tr><th>2010</th><td>100</td><td>220</td><td>20</td><td>10</td><td>180</td><td>80</td>  </tr>

                </tbody>
            </table>
        </div>

    </div><!-- End of Graph -->


    <div id="pie" class="ae-widget-sidebar"><!-- Start of Graph -->
        <h4 class="ae-widget-header">Pie Charts</h4>
        <div class="ae-widget-content">
            <table style="width:400px" >
                <caption>Envato Marketplace</caption>

                <caption id="legend">Profit</caption>

                <thead><td></td><th>GraphicRiver</th><th>Themeforest</th><th>CodeCanyon</th><th>VideoHive</th><th>Activeden</th><th>Audiojungle</th></thead>
                <tbody>
                <tr><th>2006</th><td>10</td><td>40</td><td>0</td><td>20</td><td>10</td><td>20</td>  </tr>
                <tr><th>2007</th><td>20</td><td>120</td><td>0</td><td>50</td><td>30</td><td>40</td>  </tr>
                <tr><th>2008</th><td>50</td><td>140</td><td>0</td><td>60</td><td>70</td><td>50</td>  </tr>
                <tr><th>2009</th><td>70</td><td>160</td><td>10</td><td>70</td><td>80</td><td>60</td>  </tr>
                <tr><th>2010</th><td>100</td><td>220</td><td>20</td><td>10</td><td>180</td><td>80</td>  </tr>

                </tbody>
            </table>
        </div>

    </div><!-- End of Graph -->


    <div id="area" class="ae-widget-sidebar"><!-- Start of Graph -->
        <h4 class="ae-widget-header">Area Graphs</h4>
        <div class="ae-widget-content">
            <table style="width:400px" >
                <caption>Envato Marketplace</caption>

                <caption id="legend">Profit</caption>

                <thead><td></td><th>GraphicRiver</th><th>Themeforest</th><th>CodeCanyon</th><th>VideoHive</th><th>Activeden</th><th>Audiojungle</th></thead>
                <tbody>
                <tr><th>2006</th><td>10</td><td>40</td><td>0</td><td>20</td><td>10</td><td>20</td>  </tr>
                <tr><th>2007</th><td>20</td><td>120</td><td>0</td><td>50</td><td>30</td><td>40</td>  </tr>
                <tr><th>2008</th><td>50</td><td>140</td><td>0</td><td>60</td><td>70</td><td>50</td>  </tr>
                <tr><th>2009</th><td>70</td><td>160</td><td>10</td><td>70</td><td>80</td><td>60</td>  </tr>
                <tr><th>2010</th><td>100</td><td>220</td><td>20</td><td>10</td><td>180</td><td>80</td>  </tr>

                </tbody>
            </table>
        </div>

    </div><!-- End of Graph -->


    <div id="line" class="ae-widget-sidebar"><!-- Start of Graph -->
        <h4 class="ae-widget-header">Line Graphs</h4>
        <div class="ae-widget-content">
            <table style="width:400px" >
                <caption>Envato Marketplace</caption>

                <caption id="legend">Profit</caption>

                <thead><td></td><th>GraphicRiver</th><th>Themeforest</th><th>CodeCanyon</th><th>VideoHive</th><th>Activeden</th><th>Audiojungle</th></thead>
                <tbody>
                <tr><th>2006</th><td>10</td><td>40</td><td>0</td><td>20</td><td>10</td><td>20</td>  </tr>
                <tr><th>2007</th><td>20</td><td>120</td><td>0</td><td>50</td><td>30</td><td>40</td>  </tr>
                <tr><th>2008</th><td>50</td><td>140</td><td>0</td><td>60</td><td>70</td><td>50</td>  </tr>
                <tr><th>2009</th><td>70</td><td>160</td><td>10</td><td>70</td><td>80</td><td>60</td>  </tr>
                <tr><th>2010</th><td>100</td><td>220</td><td>20</td><td>10</td><td>180</td><td>80</td>  </tr>

                </tbody>
            </table>



        </div>

    </div><!-- End of Graph -->


    <div id="bubble" class="ae-widget-sidebar"><!-- Start of Graph -->
        <h4 class="ae-widget-header">Bubble Graphs</h4>
        <div class="ae-widget-content">
            <table style="width:400px" >
                <caption>Envato Marketplace</caption>

                <caption id="legend">Profit</caption>

                <thead><td></td><th>GraphicRiver</th><th>Themeforest</th><th>CodeCanyon</th><th>VideoHive</th><th>Activeden</th><th>Audiojungle</th></thead>
                <tbody>
                <tr><th>2006</th><td>10</td><td>40</td><td>0</td><td>20</td><td>10</td><td>20</td>  </tr>
                <tr><th>2007</th><td>20</td><td>120</td><td>0</td><td>50</td><td>30</td><td>40</td>  </tr>
                <tr><th>2008</th><td>50</td><td>140</td><td>0</td><td>60</td><td>70</td><td>50</td>  </tr>
                <tr><th>2009</th><td>70</td><td>160</td><td>10</td><td>70</td><td>80</td><td>60</td>  </tr>
                <tr><th>2010</th><td>100</td><td>220</td><td>20</td><td>10</td><td>180</td><td>80</td>  </tr>

                </tbody>
            </table>
        </div>

    </div><!-- End of Graph -->

</div><!--  End of Tab 4 -->

</div>

</div>

</div><!--  End of Main Panel -->