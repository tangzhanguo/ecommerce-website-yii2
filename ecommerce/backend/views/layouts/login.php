<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
    <!-- BEGIN GLOBAL CSS -->
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/global/css/login.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL CSS -->

    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <?php $this->beginBody() ?>

        <?= $content ?>

    <?php $this->endBody() ?>

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/global/plugins/jquery/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE PLUGINS -->
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE PLUGINS -->

    <!-- BEGIN PAGE SCRIPTS -->
    <script type="text/javascript" src="assets/pages/script/login.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {  
        Login.init();
    });
    </script>
    <!-- END PAGE SCRIPTS -->
</body>
</html>
<?php $this->endPage() ?>
