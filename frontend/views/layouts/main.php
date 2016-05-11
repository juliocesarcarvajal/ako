<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\FontAsset;
use common\widgets\Alert;

AppAsset::register($this);
FontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
        <!-- Basic Page Needs
        ================================================== -->
    <meta name="description" content="ALTEA is a One Page Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap Framework">
    <meta name="author" content="Little NEKO">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target="#resMainMenu" data-offset="150">
<?php $this->beginBody() ?>
<!-- Primary Page Layout 
    ================================================== -->
<!-- globalWrapper -->
<div id="globalWrapper" class="localscroll">

    <!-- header -->
    <header id="mainHeader" class="clearfix">
    <div class="container">
    <div class="row">
      <div class="span12"> <a href="<?= Yii::$app->homeUrl ?>" class="brand"><img src="images/main-logo.png" alt="ALTEA website template"/></a>
        <nav id="resMainMenu" class="scrollMenu">
          <ul class="nav clearfix">
            <li class="active"><a href="#home">Home</a> </li>
            <li><a href="#news">Nuevo</a> </li>
            <li><a href="#services">Services</a> </li>
            <li><a href="#works">Works</a> </li>
            <li><a href="#team">Team</a> </li>
            <li><a href="features.html">Features</a> </li>
            <li><a href="blog-home-sidebar-right.html">Blog</a> </li>
            <li><a href="#contactSlice">Contact</a> </li>
          </ul>
        </nav>
      </div>
    </div>
    </div>
    </header>
    <!-- header -->
  <!-- End header -->
    <?= $content ?>
  <!-- footer -->
  <footer>
    <section id="mainFooter">
      <div class="container" id="footer">
        <div class="row">
          <div class="span12 text-center">
            <div class="blocPhone">
              <div class="iconWrapper color3"><i class="icon-phone"></i></div>
              615.987.1234 </div>
          </div>
          <div class="span12">
            <ul class="socialNetwork">
              <li><a href="#" class="iconWrapper color4 tips icoRss" title="Rss"><i class="icon-rss"></i></a></li>
              <li><a href="#" class="iconWrapper color4 tips icoFacebook" title="Facebook"><i class="icon-facebook"></i></a></li>
              <li><a href="#" class="iconWrapper color4 tips icoTwitter" title="Twitter"><i class="icon-twitter"></i></a></li>
              <li><a href="#" class="iconWrapper color4 tips icoGoogle" title="Google +"><i class="icon-gplus"></i></a></li>
              <li><a href="#" class="iconWrapper color4 tips icoVimeo" title="Vimeo"><i class="icon-vimeo"></i></a></li>
              <li class="last"><a href="#" class="iconWrapper color4 tips icoLinkedin" title="Linkedin"><i class="icon-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="span12"> </div>
        </div>
      </div>
    </section>
  </footer>
  <section  id="footerRights">
    <div class="container">
      <div class="row">
        <div class="span12">
          <p>Copyright © 2012 <a href="http://www.little-neko.com" target="blank">Little NEKO</a> / All rights reserved.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End footer -->
</div>
<!-- End global wrapper -->
<!-- End Document 
    ================================================== -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
