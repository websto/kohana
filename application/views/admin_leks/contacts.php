<div id="main-panel"><!--  Start of Main Panel -->

<div id="tab" class="ae-widget"> <!--  Start of Tab Widget -->

<ul class="ae-widget-header">  <!--  Start of Tab Controls -->
    <li><a href="#">Edit Contacts Page</a></li>
</ul> <!--  End of Tab Controls -->

<div id="message_box">
    <div id="message">

    </div>
</div>
<div class="tabs" class="ae-widget-content">

<div id="tab1" > <!--  Start of Tab 1 -->

    <div class="ae-widget">
        <h4 align="center"></h4>
        <form method="post" enctype="multipart/form-data" action="/admin_mexico/static/edit">

            <h4>Текст</h4>
            <?php foreach ($cat as $ga):?>
            <!--  <textarea id="editor" name="text" cols="40" rows="5"><?//=$news->text;?>
            </textarea>-->
            <?php  Controller_Admin_Main::ckeditor('contacts', $ga['contacts']) ?>


             <input name="page" type="hidden" value="contacts"><?php endforeach;?>
            <input style="margin-bottom:20px" type="submit" name="submit" value="Сохранить изменения"  class="button"/>
        </form>






</div>  <!--  End of Tab 1 -->
 </div>

<div> <!--  Start of Tab 2 -->

<h4 align="center">Добавить товар</h4>


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