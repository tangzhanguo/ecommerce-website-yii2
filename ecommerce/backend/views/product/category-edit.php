<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;

$this->title = 'Edit Category';
$this->params['breadcrumbs'][] = ['label' => 'Product','url' => ['product'],'template' => "<li><b>{link}</b></li>\n"];
$this->params['breadcrumbs'][] = $this->title;

$defaultInputTemplate ='{label}<div class="col-md-9"><div class="input-inline input-medium">{input}</div>{error}</div>';
?>

<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/global/plugins/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
	<link href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css">
	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN PAGE PLUGINS -->
	<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script src="assets/pages/script/product/categorydetail.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {  
		CategoryDetail.init();
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
							<?= Html::a('Category',['category'],['class'=>'list-group-item']) ?>
							<?= Html::a('Review <span class="badge">14</span>',['review'],['class'=>'list-group-item']) ?>
						</div>
			        </div>
			        <div class="col-lg-9">
			            <h2>Category Editor</h2>
						<div class="page-nav-bar">
							<?= Breadcrumbs::widget([
								'itemTemplate' => "<li><i>{link}</i></li>\n",
							    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							]) ?>
						</div>

						<div class="page-main">
							<?php $form = ActiveForm::begin(['id' => 'category-form', 'options' => ['class' => 'default-form form-horizontal form-row-seperated', 'novalidate'=>'novalidate']]); ?>
								<div class="tabbable">
									<div class="head-box vpadding-10 vmargin-10">
										<div class="left">
											<i class="fa fa-shopping-cart"></i> Category Information
										</div>
										<div class="right">
											<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Save </button>
											<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Save and exit </button>
											<?= Html::a('<span class="glyphicon glyphicon-trash"></span> delete',['product/category-delete','id'=>$model['ID']],['class' => 'btn btn-danger btn-sm','title'=>'Delete', 'data-pjax'=>'0', 'data-confirm'=>'Are you sure you want to delete this category?']) ?>
										</div>
									</div>

									<?php 
										$fieldName = $form->field($model,'CATEGORYNAME')->label('Name: <span class="required">* </span>',['class'=>'col-md-3 control-label'])->textInput(['class'=>'form-control']);
										$fieldName->template = $defaultInputTemplate;
										echo $fieldName;


										$DropDownListData=ArrayHelper::map($catlist,'ID','CATEGORYNAME');
										$fieldPCategory = $form->field($model,'PARENTID')->dropDownList($DropDownListData,['class'=>'table-group-action-input form-control input-medium'])->label('Parrent Category: <span class="required">* </span>',['class'=>'col-md-3 control-label']);
										$fieldPCategory->template = $defaultInputTemplate;
										echo $fieldPCategory;
									?>

									<div class="form-group">
										<label class="col-md-3 control-label">Description:</label>
										<div class="col-md-9">
											<textarea name="description" id="maxlength_textarea1" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
											<span class="help-block">
											max 255 chars </span>
										</div>
									</div>
								</div>
							<?php ActiveForm::end(); ?>
						</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>