<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Product Category';
$this->params['breadcrumbs'][] = ['label' => 'Product','url' => ['/product'],'template' => "<li><b>{link}</b></li>\n"];
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->

	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
<!-- BEGIN JAVASCRIPTS -->

	<!-- BEGIN PAGE PLUGINS -->

	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script src="assets/pages/script/product/products.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {  
		ProductList.init();
	});
	</script>
	<!-- END PAGE SCRIPTS -->

<!-- END JAVASCRIPTS -->
<?php $this->endBlock(); ?>


<div class="site-area">
	<div class="container">
		<div class="site-index">
			<div class="body-content">
			    <div class="row">
			        <div class="col-lg-3">
						<div class="list-group">
							<?= Html::a('Product',['index'],['class'=>'list-group-item']) ?>
							<?= Html::a('Category',['category'],['class'=>'list-group-item disabled']) ?>
							<?= Html::a('Review <span class="badge">14</span>',['review'],['class'=>'list-group-item']) ?>
						</div>
			        </div>
			        <div class="col-lg-9">
			            <h2>Category</h2>
						<div class="page-nav-bar">
							<?= Breadcrumbs::widget([
								'itemTemplate' => "<li><i>{link}</i></li>\n",
							    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							]) ?>
						</div>

						<div class="head-box vpadding-10 vmargin-10">
							<div class="left">
								<div class="page-nav-bar" style="margin-bottom:0">
									<ul class="page-breadcrumb" style="padding:0;">
										<li>
											<?= Html::a('/ ',['category']) ?>
										</li>
										<?php
										if(isset($cattraverse)):
											for ($k=sizeof($cattraverse)-1;$k>=0;$k--): ?>
											<li>
												&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
												<?= Html::a($cattraverse[$k]['CATEGORYNAME'],['product/category','parent'=>$cattraverse[$k]['ID']]) ?>
											</li>
										<?php endfor; endif;?>
									</ul>
								</div>
							</div>
							<div class="right">
								<?= Html::a('<i class="fa fa-plus"></i> Add New Category ',['category-create','parent'=>Yii::$app->getRequest()->getQueryParam('parent')],['class'=>'btn btn-success btn-sm']) ?>
							</div>
						</div>

						<div class="row">

							<?php foreach ($model as $item): ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<a href="index.php?r=product/category&parent=<?= $item['ID'] ?>">
									<div class="grid-box blue">
										<div class="visual">
											<img src="3.jpg"/>
										</div>
										<div class="details">
											<div class="title">
												 <?= $item['CATEGORYNAME'] ?>
											</div>
											<div class="count">
												 0 post
											</div>
										</div>
										<?= Html::a('<span class="glyphicon glyphicon-pencil"></span> Edit Category ',['product/category-edit','id'=>$item['ID']],['class'=>'more']) ?>
									</div>
								</a>
							</div>
							<?php endforeach; ?>
						</div>

			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
