<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- BEGIN Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <!-- END Fonts -->

    <!-- BEGIN GLOBAL CSS -->
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/global/css/global.css" rel="stylesheet" type="text/css">
    <link href="assets/global/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL CSS -->

    <?php
        if(isset($this->blocks['styleBlock'])):
            echo $this->blocks['styleBlock'];
        endif;
    ?>

    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <?php $this->beginBody() ?>

    <!-- BEGIN HEADER -->
    <div role="navigation" class="navbar header no-margin">
        <div class="container">
            <div class="navbar-header">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <a href="index.html" class="navbar-brand"><span style="font-size:30px;display:block;padding-top:15px">mycompany</span></a><!-- LOGO -->
            </div>
            <!-- BEGIN CART -->
            <div class="search-area">
                <ul class="nav navbar-nav">
                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div> 
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END CART -->
            <!-- BEGIN NAVIGATION -->
            <div class="collapse navbar-collapse mega-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="product-list.html" href="product-list.html">
                        Our Product 
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <ul class="dropdown-menu" aria-labelledby="mega-menu">
                        <li>
                          <div class="nav-content">
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Footwear</h3>
                              <ul>
                                <li><a href="product-list.html">Astro Trainers</a></li>
                                <li><a href="product-list.html">Basketball Shoes</a></li>
                                <li><a href="product-list.html">Boots</a></li>
                                <li><a href="product-list.html">Canvas Shoes</a></li>
                                <li><a href="product-list.html">Football Boots</a></li>
                                <li><a href="product-list.html">Golf Shoes</a></li>
                                <li><a href="product-list.html">Hi Tops</a></li>
                                <li><a href="product-list.html">Indoor and Court Trainers</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Clothing</h3>
                              <ul>
                                <li><a href="product-list.html">Base Layer</a></li>
                                <li><a href="product-list.html">Character</a></li>
                                <li><a href="product-list.html">Chinos</a></li>
                                <li><a href="product-list.html">Combats</a></li>
                                <li><a href="product-list.html">Cricket Clothing</a></li>
                                <li><a href="product-list.html">Fleeces</a></li>
                                <li><a href="product-list.html">Gilets</a></li>
                                <li><a href="product-list.html">Golf Tops</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Accessories</h3>
                              <ul>
                                <li><a href="product-list.html">Belts</a></li>
                                <li><a href="product-list.html">Caps</a></li>
                                <li><a href="product-list.html">Gloves, Hats and Scarves</a></li>
                              </ul>

                              <h3>Clearance</h3>
                              <ul>
                                <li><a href="product-list.html">Jackets</a></li>
                                <li><a href="product-list.html">Bottoms</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                          </div>
                        </li>
                      </ul>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <li><a href="#phowtoorder">How to order</a></li>
                    <li><a href="#pfaq">FAQ</a></li>
                    <li><a href="#pabout">About</a></li>
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- END HEADER -->
    <style>
        #pmain,#pabout {
            height : 800px;
        }
        #pabout {
            background : url('foot1.png') 50% 0 repeat fixed;
        }
    </style>
    <?= $content ?>
    <div class="main" id="pabout"> 
    <div class="story">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- BEGIN BOTTOM ABOUT BLOCK -->
              <div class="col-md-12 col-sm-12">
                <h2 class="gvibes">how to order</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
              </div>
              <!-- END BOTTOM ABOUT BLOCK -->
              <!-- BEGIN BOTTOM INFO BLOCK -->
              <div class="col-md-6 col-sm-6">
                <h2>Information</h2>
                <ul class="list-unstyled">
                  <li><i class="fa fa-angle-right"></i> <a href="#">How To Order</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Delivery Information</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Shipping &amp; Returns</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Payment Methods</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">FAQ</a></li>
                </ul>
              </div>
              <!-- END INFO BLOCK -->
              <!-- BEGIN BOTTOM CONTACTS -->
              <div class="col-md-6 col-sm-6">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                  Jl. ABCD, No. XX<br>
                  City, Province, Indonesia<br>
                  Phone: 085X-XXXX-XXXX<br>
                  Email: <a href="mailto:info@mycompany.com">info@mycompany.com</a><br>
                  Skype: <a href="skype:mycompany">mycompany</a>
                </address>
              </div>
              <!-- END BOTTOM CONTACTS -->
            </div>
          </div>
        </div>
    </div>
    </div>
    <div class="main" id="pfaq"> 
    <div class="story">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- BEGIN BOTTOM ABOUT BLOCK -->
              <div class="col-md-12 col-sm-12">
                <h2 class="gvibes">frequently asked question</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
              </div>
              <!-- END BOTTOM ABOUT BLOCK -->
              <!-- BEGIN BOTTOM INFO BLOCK -->
              <div class="col-md-6 col-sm-6">
                <h2>Information</h2>
                <ul class="list-unstyled">
                  <li><i class="fa fa-angle-right"></i> <a href="#">How To Order</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Delivery Information</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Shipping &amp; Returns</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Payment Methods</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">FAQ</a></li>
                </ul>
              </div>
              <!-- END INFO BLOCK -->
              <!-- BEGIN BOTTOM CONTACTS -->
              <div class="col-md-6 col-sm-6">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                  Jl. ABCD, No. XX<br>
                  City, Province, Indonesia<br>
                  Phone: 085X-XXXX-XXXX<br>
                  Email: <a href="mailto:info@mycompany.com">info@mycompany.com</a><br>
                  Skype: <a href="skype:mycompany">mycompany</a>
                </address>
              </div>
              <!-- END BOTTOM CONTACTS -->
            </div>
          </div>
        </div>
    </div>
    </div>
    <div class="main" id="pabout"> 
    <div class="story">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- BEGIN BOTTOM ABOUT BLOCK -->
              <div class="col-md-12 col-sm-12">
                <h2 class="gvibes">About us</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
              </div>
              <!-- END BOTTOM ABOUT BLOCK -->
              <!-- BEGIN BOTTOM INFO BLOCK -->
              <div class="col-md-6 col-sm-6">
                <h2>Information</h2>
                <ul class="list-unstyled">
                  <li><i class="fa fa-angle-right"></i> <a href="#">How To Order</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Delivery Information</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Shipping &amp; Returns</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Payment Methods</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">FAQ</a></li>
                </ul>
              </div>
              <!-- END INFO BLOCK -->
              <!-- BEGIN BOTTOM CONTACTS -->
              <div class="col-md-6 col-sm-6">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                  Jl. ABCD, No. XX<br>
                  City, Province, Indonesia<br>
                  Phone: 085X-XXXX-XXXX<br>
                  Email: <a href="mailto:info@mycompany.com">info@mycompany.com</a><br>
                  Skype: <a href="skype:mycompany">mycompany</a>
                </address>
              </div>
              <!-- END BOTTOM CONTACTS -->
            </div>
          </div>
        </div>
    </div>
    </div>

	
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <!-- END CORE PLUGINS -->

    <!-- BEGIN CORE PLUGINS -->

    <script src="assets/global/plugins/jquery/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
 
    <script type="text/javascript">
    $(document).ready(function(){
      $('#nav').localScroll(800);
      $('#pmain').parallax("50%", 0.1);
      $('#pabout').parallax("50%", 0.1);

    })
    </script>

    <?php $this->endBody(); ?>
    <?php
        if(isset($this->blocks['scriptBlock'])):
            echo $this->blocks['scriptBlock'];
        endif;
    ?>
</body>
</html>
<?php $this->endPage() ?>