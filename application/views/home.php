<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <meta name="robots" content="all">
    <meta name="Revisit-After" content="1 Day">
    <meta name="Distribution" content="Global">

    <link rel="stylesheet" type="text/css" media="all" href="/media/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/cameraslideshow.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/1140.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/menu.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/media/css/sort.css"/>

    <script type='text/javascript' src='/media/js/jquery.min.js'></script>
    <script type='text/javascript' src='/media/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='/media/js/jquery.tools.min.js'></script>
    <script type='text/javascript' src='/media/js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='/media/js/touchTouch.js'></script>
    <script type='text/javascript' src='/media/js/camera.js'></script>
    <script type='text/javascript' src='/media/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='/media/js/jquery-ui.js'></script>

 <!-- Custom CSS -->

</head>
<body class="home page page-id-203 page-template page-template-page-home-php"> <?php ProfilerToolbar::render(true); ?>
<div class="bg-top" style="margin-top: -20px;"><!-- this encompasses the entire Web site -->
<div class="top-line">
<div id="main">
<div class="container">
<?php echo View::factory('/pages/header');?>
<?php if(!empty($content)) echo $content; ?>
<?php echo View::factory('/pages/footer');?>
</div><!--.container-->
</div><!--#main-->
</div><!--.top-line-->
</div><!--.bg-top-->
</body>
</html>
