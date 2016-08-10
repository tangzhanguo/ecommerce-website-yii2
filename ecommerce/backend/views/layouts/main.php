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
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/global/css/global.css" rel="stylesheet" type="text/css">
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

    <?php
        NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'float-navbar navbar-fixed-top navbar',
            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
        ];

        $menuItems[] = ['label' => 'Products', 'url' => ['/product/index']];
        $menuItems[] = ['label' => 'Promo', 'url' => ['/promo/index']];
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->USERNAME . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
    ?>

    <?= $content ?>



    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>


    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/global/plugins/jquery/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <?php $this->endBody(); ?>
    <?php
        if(isset($this->blocks['scriptBlock'])):
            echo $this->blocks['scriptBlock'];
        endif;
    ?>
</body>
</html>
<?php $this->endPage() ?>
