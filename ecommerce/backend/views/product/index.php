<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Product List';
$this->params['breadcrumbs'][] = ['label' => 'Product','url' => ['product'],'template' => "<li><b>{link}</b></li>\n"];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css">
	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
	<!-- BEGIN PAGE PLUGINS -->
	<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="assets/pages/script/product/products.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {  
		ProductList.init();
	});
	</script>
	<!-- END PAGE SCRIPTS -->
<?php $this->endBlock(); ?>


<div class="site-area">
	<div class="container">
		<div class="site-index">
			<div class="body-content">
			    <div class="row">
			        <div class="col-lg-3">
						<div class="list-group">
							<?= Html::a('Product',['index'],['class'=>'list-group-item disabled']) ?>
							<?= Html::a('Category',['category'],['class'=>'list-group-item']) ?>
							<?= Html::a('Review <span class="badge">14</span>',['review'],['class'=>'list-group-item']) ?>
						</div>
			        </div>
			        <div class="col-lg-9">
			            <h2>Product</h2>
						<div class="page-nav-bar">
							<?= Breadcrumbs::widget([
								'itemTemplate' => "<li><i>{link}</i></li>\n",
							    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							]) ?>
						</div>

						<div class="head-box vpadding-10 vmargin-10">
							<div class="left">
								<i class="fa fa-shopping-cart"></i> Product List
							</div>
							<div class="right">
								<?= Html::a('<i class="fa fa-plus"></i> Add New Product ',['create'],['class'=>'btn btn-success btn-sm']) ?>
							</div>
						</div>
						<table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_products">
							<thead>
							<tr role="row" class="heading">
								<th width="1%">
									<input type="checkbox" class="group-checkable">
								</th>
								<th width="10%">
									 ID
								</th>
								<th width="15%">
									 Product&nbsp;Name
								</th>
								<th width="15%">
									 Category
								</th>
								<th width="10%">
									 Price
								</th>
								<th width="10%">
									 Quantity
								</th>
								<th width="15%">
									 Date&nbsp;Created
								</th>
								<th width="10%">
									 Status
								</th>
								<th width="10%">
									 Actions
								</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($model as $item): ?>
								<tr role="row" class="odd">
									<td><div class="checker"><span><input type="checkbox" name="id[]" value="1"></span></div></td>
									<td class="sorting_1"><?= $item['PRODUCTID'] ?></td>
									<td><?= $item['TITLE'] ?></td>
									<td><?= $item->category['CATEGORYNAME'] ?></td>
									<td><?= $item['PRICE'] ?></td>
									<td><?= $item['STOCK'] ?></td>
									<td><?= Yii::$app->formatter->asDatetime($item['CREATEDATE'],'php:d-m-Y') ?></td>
									<td><span class="label label-sm <?= ($item['STATUS']==2 ? 'label-danger' : 'label-danger') ?> status"><?= $item->status['STATUS'] ?></span></td>
									<td>
										<?= Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['product/view','id'=>$item['PRODUCTID']],['title'=>'View', 'data-pjax'=>'0']) ?>&nbsp;
										<?= Html::a('<span class="glyphicon glyphicon-pencil"></span>',['product/edit','id'=>$item['PRODUCTID']],['title'=>'Edit', 'data-pjax'=>'0']) ?>&nbsp;
										<?= Html::a('<span class="glyphicon glyphicon-trash"></span>',['product/delete','id'=>$item['PRODUCTID']],['title'=>'Delete', 'data-pjax'=>'0', 'data-confirm'=>'Are you sure you want to delete this item?', 'data-method'=>'post']) ?>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>

			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
