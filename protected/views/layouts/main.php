<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="es">
    <!-- Basic Page Needs
    ================================================== -->
    <meta name="description" content="Proyecto de aprendizaje AKO">
    <meta name="author" content="Grupo Universidad EAN">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <!-- Bootstrap  -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
    <!-- web font  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
    <!-- plugin css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/animation-framework/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/pretty-photo/css/prettyPhoto.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/isotope/css/style.css">
    <!--link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/supersized/css/supersized.css" type="text/css" media="screen" /-->
    <!--link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/supersized/theme/supersized.shutter.css" type="text/css" media="screen" /-->
    <!-- icon fonts -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-icons/custom-icons/css/custom-icons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-icons/custom-icons/css/custom-icons-ie7.css">
    <!-- Custom css -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css">
    <link type="text/css" id="colors" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blue.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.6.1.min.js"></script>
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-144x144.png">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body data-spy="scroll" data-target="#resMainMenu" data-offset="150">
<!-- Primary Page Layout 
    ================================================== -->
    <!-- globalWrapper -->
    <div id="globalWrapper" class="localscroll">
        <!-- header -->
        <header id="mainHeader" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12"> <a href="" class="brand"><img src="images/main-logo.png" alt="ALTEA website template"/></a>
                        <nav id="resMainMenu" class="scrollMenu">
                            <ul class="nav clearfix">
                                <li class="active"><a href="#home">Inicio</a> </li>
                                <li><a href="#news">Aprende</a> </li>
                                <li><a href="#services">El Proyecto</a> </li>
                                <li><a href="#works">Retos</a> </li>
                                <li><a href="#team">Nosotros</a> </li>
                                <!--li><a href="features.html">Features</a> </li-->
                                <!--li><a href="blog-home-sidebar-right.html">Blog</a> </li-->
                                <li><a href="#contactSlice">Contactenos</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- header -->

        <?php echo $content; ?>

        <!-- footer -->
        <!--footer>
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
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoRss" title="Rss"><i class="icon-rss"></i></a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoFacebook" title="Facebook"><i class="icon-facebook"></i></a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoTwitter" title="Twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoGoogle" title="Google +"><i class="icon-gplus"></i></a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoVimeo" title="Vimeo"><i class="icon-vimeo"></i></a></li>
                                    <li class="last"><a href="<?php echo Yii::app()->request->baseUrl; ?>/#" class="iconWrapper color4 tips icoLinkedin" title="Linkedin"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="span12"> </div>
                        </div>
                    </div>
                </section>
            </footer-->
            <section  id="footerRights">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <p>Copyright © 2016 <a href="http://www.ako.com.co" target="blank">AKO</a> / Todos los Derechos Reservados.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End footer -->
        </div>
        <!-- global wrapper -->

<!-- End Document 
    ================================================== -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/respond/respond.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
    <!-- third party plugins  -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap-carousel-ie.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/easing/jquery.easing.1.3.js"></script>
    <!--script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/supersized/js/supersized.3.2.7.min.js"></script-->
    <!--script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/supersized/theme/supersized.shutter.min.js"></script-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/responsive-nav/responsive-nav.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/isotope/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js-plugin/parallax/js/jquery.stellar.min.js"></script>
    <!-- Custom  -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
</body>
</html>
