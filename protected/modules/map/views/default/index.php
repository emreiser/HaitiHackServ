<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="styles/e62a0ad3.leaflet.css">
        <link rel="stylesheet" href="styles/bc43c441.main.css">
        <script src="scripts/vendor/cf69c6f2.modernizr.min.js"></script>
    </head>
    <body>
    <div id="app"></div>

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="scripts/vendor/8bc61845.jquery.min.js"><\/script>')</script>

<?php 

if(Yii::app()->user->isGuest) {
// something else needs to happen
echo 'You have to log in to interact with the map';
?>


<?php } else { ?>
    <script src="scripts/34ab0b8a.plugins.js"></script>

    <script>
      L.Icon.Default.imagePath = "/images"
    </script>
<?php }
?>	
</body>
</html>