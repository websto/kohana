<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">

<head>

    <!-- Styling Sheets   -->
    <link rel="stylesheet" type="text/css" href="/media/admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/media/admin/css/theme/jquery-ui-1.8.2.custom.css"/>


    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
    <!-- End of Styling Sheets   -->

    <!-- Scripts  -->
    <script type="text/javascript" src="/media/admin/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="/media/admin/js/jquery-ui-1.8.2.custom.min.js"></script>
    <script type="text/javascript" src="/media/admin/js/jQuery.tree.js"></script>
    <script type="text/javascript" src="/media/admin/js/cufon-yui.js"></script>
    <script type="text/javascript" src="/media/admin/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/media/admin/js/Quicksand_Book_400.font.js"></script>
    <script type="text/javascript" src="/media/admin/js/raphael-min.js"></script>
    <script type="text/javascript" src="/media/admin/js/graphix.0.9.min.js"></script>
    <script type="text/javascript" src="/media/admin/js/custom.js"></script>
    <script type="text/javascript" src="/media/admin/js/admin.js"></script>
    <script type="text/javascript" src="/media/admin/js/category.js"></script>
    <script type="text/javascript" src="/media/admin/js/upload.js"></script>
    <!-- End of Scripts  -->


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Панель админа</title>
</head>

<body>

<!-- Start of Message Box, shows when message text is clicked  -->

<div id="message-box" title="Message Box">

    <h5>Message 1</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.</p>
    <h5>Message 2</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.</p>
    <h5>Message 3</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.</p>

</div>

<!-- End of Message Box  -->

<div id="header"><!-- Start of Header -->


    <div id="notice-bar">

        <ul>  <!--  Start of Tab Controls -->
            <li><a href="#">Привет, Админ </a></li>
            <li><a href="/admin_leks/main/str">Личный кабинет</a></li>
            <!--<li><a href="#" id="message-button"> 1 Сообщения</a></li>-->
            <?php  echo html::anchor(Route::get('admin_leks')->uri(array('controller'=>'user','action'=>'logout')), '<li>Выход</li>' , array('class' => 'exit') )?>
            <!--<li><a href="" style="font-weight:bold; color:#FF0000">Exit</a></li> ,  <img src=/public_admin/css/icons/exit.png>-->
        </ul> <!--  End of Tab Controls --> <!--  End of Tab Controls -->
    </div><!-- Notice bar at the right side  -->
    <form action="#" method="post" id="search-bar"><!-- Start of AutoComplete Search Bar -->
        <fieldset>
            <input type="text" id="search"  class=" ui-corner-left"  /><input type="submit" value=" " id="search_submit"  />
        </fieldset><!-- End of Search Bar  -->
    </form>
   <a href="/admin_leks/main/index"> <div align="center" style="font-weight: bold;font-size: 28px; color: #fff;">Админ панель</div></a>
</div><!-- End of Header  -->

<div class="container" id="top-panel"><!--  Start of container -->

    <div class=" left-col"><!-- Start of Left Column -->
        <div class="urgent"><!-- Start of Urgent Message -->
            <h6> Attention required</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus. Curabitur et lacus ligula. Sed euismod lacinia magna tincidunt semper.
            </p>
        </div><!-- End of Urgent message  -->
    </div><!-- End of Left Column  -->


    <ul id="dock"><!--  Start of Dock -->
        <li><a href="#" class="dock-active"><img src="/media/admin/css/icons/main.png" alt='dock-icon'/>Main</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/users.png" alt='dock-icon' />Users</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/projects.png" alt='dock-icon'/>Projects</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/gallery.png" alt='dock-icon'/>Gallery</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/estimates.png" alt='dock-icon'/>Estimates</a></li>

        <li><a href="#"><img src="/media/admin/css/icons/settings.png" alt='dock-icon' />Settings</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/page.png" alt='dock-icon'/>Posts</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/events.png" alt='dock-icon'/>Events</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/database.png" alt='dock-icon' />Database</a></li>
        <li><a href="#"><img src="/media/admin/css/icons/contact.png" alt='dock-icon'/>Contacts</a></li>
    </ul><!--  End  of Dock -->

    <div class="right-col"><!--  Start of right column -->
        <div id="calender"></div>
    </div><!--  End  of right --->

    <a href="#" id="dock-control"></a><!--  Button for Sliding Head Panel --->

</div><!--  End of Head Panel container -->



<div class="container"><!--  Start of container -->

<div class="left-col"><!--  Start of Left Column -->



    <div class="ae-widget-sidebar  minimizable"><!--  Start of Widget Box -->
        <h4 class="ae-widget-header">Side Menu</h4><!--  Widget  header -->
        <div class="ae-widget-content"><!--  Start of Widget Content -->

            <ul style="font-weight: bold;color: #000000;font-size: 16px;">
                <li><a href="/admin_leks/main/categ">Меню категорий</a>


                </li>
                <li><a href="/admin_leks/main/goods">Товары</a>

                </li>
                <li><a href="/admin_leks/main/slider">Слайдер</a>

                </li>
                <li><a href="/admin_leks/main/news">Новости</a>

                </li>
                <li><a href="/admin_leks/main/sort">Фильтры сортировки</a>

                </li>
            </ul>


        </div><!--  End of Widget Content -->

    </div><!--  End of Widget Box -->

    <div class="ae-widget-sidebar closable"><!--  Start of Widget Box -->
        <h4 class="ae-widget-header">Sidebar Widget</h4>
        <div class="ae-widget-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus. Curabitur et lacus ligula. Sed euismod lacinia magna tincidunt semper. Morbi accumsan, lacus ut euismod lacinia, orci arcu ultricies diam, vel blandit magna diam sed lectus. Vivamus egestas commodo imperdiet. Nullam tempor risus vel nisi auctor aliquam. Phasellus quis nunc at ante posuere auctor non semper nisl.
            </p>
        </div>


    </div><!--  End of Widget Box -->


</div><!--  End of Left Column -->

    <?php if (!empty($content)) echo $content;?>


<div class="right-col"><!--  Start of Right Column -->

    <div class="ae-widget-sidebar"><!--  Start of Widget Box -->
        <h4 class="ae-widget-header">Recent Activities</h4>
        <div class="ae-widget-content">

            <ul style="font-weight: bold;color: #000000;font-size: 16px;">
                <li><a href="/admin_leks/main/about">О нас</a>


                </li>
                <li><a href="/admin_leks/main/contacts">Контакты</a>

                </li>
                <li><a href="/admin_leks/main/gallery">Галерея</a>

                </li>

            </ul>


        </div>

    </div><!--  End of Widget Box -->


    <div class="ae-widget-sidebar"><!--  Start of Widget Box -->
        <h4 class="ae-widget-header">Archives</h4>
        <div class="ae-widget-content">
            <ul class="files"><!--  Tree Widget -->
                <li><a href="documents.html">Invoices</a>
                    <ul>
                        <li><a href="#">2007</a>
                            <ul>
                                <li><a href="#">ENi.doc</a></li>
                                <li><a href="#">Sd-letter.doc</a></li>
                                <li><a href="#">GDstry.doc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">2008</a>
                            <ul>
                                <li><a href="#">Birthday Parties.doc</a></li>
                                <li><a href="#">Area Playgrounds.doc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">2009</a>
                            <ul>
                                <li><a href="#">Potential Places.doc</a></li>
                                <li><a href="#">Travel Funds.doc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">2010</a>
                            <ul>
                                <li><a href="#">Guests.doc</a></li>
                                <li><a href="#">Services.doc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Projects</a>
                    <ul>
                        <li><a href="#">The Big Lebowski.m4v</a></li>
                        <li><a href="#">Planet Earth.m4v</a></li>
                    </ul>
                </li>
                <li><a href="#">Logs</a>
                    <ul>
                        <li><a href="#">Bloc Party - Pioneers.mp3</a></li>
                        <li><a href="#">Fleet Foxes - Blue Ridge Mountains.mp3</a></li>
                    </ul>
                </li>
                <li><a href="#">My Photos</a>
                    <ul>
                        <li><a href="#">yellow-flower.jpg</a></li>
                        <li><a href="#">orange-flower.jpg</a></li>
                        <li><a href="#">red-flower.jpg</a></li>
                        <li><a href="#">white-flower.jpg</a></li>
                        <li><a href="#">bumblebees.jpg</a></li>
                    </ul>
                </li>
            </ul>

        </div>

    </div><!--  End of Widget Box -->


</div><!--  End of Right Column -->





</div><!--  End of container -->


</body>

</html>
