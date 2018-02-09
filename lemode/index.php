<?php
  $database = require 'core/bootstrap.php';

  $menuItems = $app['database']->selectAll('menu_items');

  $general = $app['database']->selectAll('general');
 ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header id="main">
          <h1><img src="img/logo.jpg" alt="la Mode"></h1>
          <nav>
            <ul class="menu bgblackgradient clearfix">
              <?php  foreach ($menuItems as $item) : ?>
                <li class="menu-item"><a href="<?= $item->link ?>"><?= $item->name ?></a></li>
              <?php endforeach;  ?>
              <!-- <li class="menu-item"><a href="#">Women</a></li>
              <li class="menu-item"><a href="#">Men</a></li>
              <li class="menu-item"><a href="#">Brands</a></li>
              <li class="menu-item"><a href="#">Sale</a></li>
              <li class="menu-item"><a href="#">Accessories</a></li>
              <li class="menu-item"><a href="#">Stores</a></li> -->
            </ul>
          </nav>
        </header>


        <article class="main-article main-psd2">
          <section class="clearfix">
            <div class="right ">
              <h2><span class="golden">Leave an </span><br><span class="golden">Impression</span><br>
              <span>WITH YOUR HAT</span></h2>
              <div class="discount">
                <span><?= end($general)->percent  ?></span>
                <span>%</span>
                <span>OFF</span>
              </div>
              <a href="#" class="button bgblackgradient">get it now</a>
            </div>
          </section>
          <section class="clearfix">
            <article style="background-image:url(uploads/<?= end($general)->img1 ?>);background-size:176px auto;background-position:center;" class="promotions promo-psd2">
              <h2>NEW
                <span class="golden">COLLECTION</span>
                <a href="#" class="button bgblackgradient">&#9658;</a>
              </h2>
            </article>
            <article style="background-image:url(uploads/<?= end($general)->img2 ?>);background-size:176px auto;background-position:center;" class="promotions promo-psd2">
              <h2><span class="golden">WIN</span> A TRIP</h2>
              <h3>TO PARIS</h3>
              <a href="#" class="button bgblackgradient">more</a>
            </article>
            <article style="background-image:url(uploads/<?= end($general)->img3 ?>);background-size:176px auto;background-position:center;" class="promotions promo-psd2">
              <h2>GET 2</h2>
              <h3>GET ONE <span class="golden">FREE</span></h3>
              <a href="#" class="button bgblackgradient">here</a>
            </article>
          </section>
        </article>

        <footer class="main-footer footer-psd2 clearfix">
          <p>Follow us on:
          <a href="#" class="social"><img src="img/facebook.jpg" alt="facebook"></a>
          <a href="#" class="social"><img src="img/twitter.jpg" alt="twitter"></a>
          <a href="#" class="social"><img src="img/google-plus.jpg" alt="google-plus"></a>
          </p>
          <p class="links">
            <a href="#">www.lamode.com</a> -
            <a href="#">mail@lamode.com</a> -
            <a href="#">Unsubscribe</a>
          </p>
          <p>
            <span>toll free 858.234.5523 -</span>
            <span>fax 858.234.5522</span>
          </p>
          <p>Copyright &copy; 2012. All right reserved</p>
        </footer>
        <a href="panel.php">Panel</a>
    </body>
</html>
