<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>


<?php $this->beginBlock('styleBlock'); ?>
  <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/global/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css">
  <!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
  <!-- BEGIN PAGE PLUGINS -->
    <script type="text/javascript" src="assets/global/plugins/bxslider/jquery.bxslider.min.js"></script>
  <!-- END PAGE PLUGINS -->

  <!-- BEGIN PAGE SCRIPTS -->
    <script type="text/javascript" src="assets/pages/script/index.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Index.init();
            Index.initBxSlider();
        });
    </script>
  <!-- END PAGE SCRIPTS -->
<?php $this->endBlock(); ?>


<style>
ul.bxslider li {
  padding-bottom: 5px;
  padding-right : 5px;
}
.bxslider-wrapper .bx-controls-direction {
  position: absolute;
  right: 0;
  top: -40px;
}
.sale-product {
  padding-bottom: 20px;
}
.product-item {
  padding: 12px 12px 16px;
  background: #fff;
  position: relative;
}
.product-item:hover {
  box-shadow: 5px 5px rgba(234, 234, 234, 0.9);
}
.product-item:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
  font-size: 0;
  line-height:0;
}
*html .product-item {
  zoom:1;
}
*+html .product-item {
  zoom:1;
}
.product-item h3 {
  font: 300 14pt 'Open Sans', sans-serif;
  text-transform: inherit;
  padding-top: 10px;
  padding-bottom: 4px;
  text-transform: uppercase;
}
.pitem-price {
  color: #e84d1c;
  font: 18px 'PT Sans Narrow', sans-serif;
  float: left;
  padding-top: 1px;
}
.pitem-btn {
  float: right;
  color: #a8aeb3;
  border: 1px #ededed solid;
  padding: 3px 6px;
}
.pitem-btn:hover {
  color: #fff !important;
  background: #E84D1C !important;
  border-color: #E84D1C;
}


</style>

<div class="container">
<div class="row">
  <!-- BEGIN SALE PRODUCT -->
  <div class="col-md-12 sale-product">
    <h2>New Arrivals</h2>
    <div class="bxslider-wrapper">
      <ul class="bxslider" data-slides-phone="1" data-slides-tablet="2" data-slides-desktop="5" data-slide-margin="10">
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="pi-img-wrapper">
              <img src="k2.jpg" class="img-responsive" alt="Berry Lace Dress">
            </div>
            <h3><a href="item.html">Berry Lace Dress</a></h3>
            <div class="pitem-price">IDR 29.000</div>
            <a href="#" class="btn btn-default pitem-btn">view</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>