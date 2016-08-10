<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Product','url' => ['product'],'template' => "<li><b>{link}</b></li>\n"];
$this->params['breadcrumbs'][] = $this->title;


$defaultInputTemplate ='{label}<div class="col-md-9"><div class="input-inline input-medium">{input}</div>{error}</div>';
$defaultInputTemplate4 ='{label}<div class="col-md-4"><div class="input-inline input-medium">{input}</div>{error}</div>';
$defaultInputTemplate3 ='{label}<div class="col-md-3"><div class="input-inline input-medium">{input}</div>{error}</div>';

?>


<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css">
	<link href="assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet">
	<link href="assets/global/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" type="text/css">
	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
	<!-- BEGIN PAGE PLUGINS -->
	<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jstree/dist/jstree.min.js"></script>
	<script src="assets/global/plugins/plupload/js/plupload.full.min.js"></script>
	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="assets/pages/script/product/productdetail.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {  
		ProductDetail.init();
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
							<?= Html::a('Product',['index'],['class'=>'list-group-item']) ?>
							<?= Html::a('Category',['category'],['class'=>'list-group-item']) ?>
							<?= Html::a('Review <span class="badge">14</span>',['review'],['class'=>'list-group-item']) ?>
						</div>
			        </div>
			        <div class="col-lg-9">
			            <h2>Product Editor</h2>
						<div class="page-nav-bar">
							<?= Breadcrumbs::widget([
								'itemTemplate' => "<li><i>{link}</i></li>\n",
							    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							]) ?>
						</div>

						<div class="page-main">
							<?php $form = ActiveForm::begin(['id' => 'default-form', 'options' => ['class' => 'default-form form-horizontal form-row-seperated', 'novalidate'=>'novalidate']]); ?>
							
								<div class="tabbable">
									<div class="head-box vpadding-10 vmargin-10">
										<div class="left">
											<i class="fa fa-shopping-cart"></i> Product Information
										</div>
										<div class="right">
											<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Save </button>
											<?= Html::submitButton('<i class="fa fa-plus"></i> Save and exit ', ['class' => 'btn btn-success btn-sm', 'name' => 'login-button']) ?>
										</div>
									</div>
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											General </a>
										</li>
										<li class="">
											<a href="#tab_spesification" data-toggle="tab">
											Spesification </a>
										</li>
										<li class="">
											<a href="#tab_meta" data-toggle="tab">
											Meta </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Images </a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div id="category_tree" class="tree-demo"><?= $categorylist ?></div>
												<?php 
													$fieldTitle = $form->field($model,'TITLE')->label('Product name <span class="required">* </span>',['class'=>'col-md-3 control-label'])->textInput(['class'=>'form-control']);
													$fieldTitle->template = $defaultInputTemplate;
													echo $fieldTitle;


													$fieldCategory = $form->field($model,'CATEGORYID')->dropDownList([1=>'a'],['class'=>'table-group-action-input form-control input-medium'])->label('Category <span class="required">* </span>',['class'=>'col-md-3 control-label']);
													$fieldCategory->template = $defaultInputTemplate;
													echo $fieldCategory;


													$fieldDescription = $form->field($model,'FULLDESCRIPTION')->textArea(['class'=>'form-control summernote'])->label('Description <span class="required">* </span>',['class'=>'col-md-3 control-label']);
													$fieldDescription->template = $defaultInputTemplate;
													echo $fieldDescription;

													$fieldStock = $form->field($model,'STOCK')->textInput(['value' => '10', 'id'=>'spn-stock', 'class'=>'form-control'])->label('Stock <span class="required">* </span>',['class'=>'col-md-3 control-label']);
													$fieldStock->template = $defaultInputTemplate3;
													echo $fieldStock;


													$fieldPrice = $form->field($model,'PRICE')->textInput(['value' => '10000', 'id'=>'spn-price', 'class'=>'form-control'])->label('Price <span class="required">* </span>',['class'=>'col-md-3 control-label']);
													$fieldPrice->template = $defaultInputTemplate4;
													echo $fieldPrice;


													$fieldDiscount = $form->field($model,'DISCOUNT')->textInput(['value' => '0', 'id'=>'spn-discount', 'class'=>'form-control'])->label('Discount',['class'=>'col-md-3 control-label']);
													$fieldDiscount->template = $defaultInputTemplate3;
													echo $fieldDiscount;


													$DropDownListData=ArrayHelper::map($statuslist,'ID','STATUS');
													$fieldStatus = $form->field($model,'STATUS')->dropDownList($DropDownListData,['class'=>'table-group-action-input form-control input-medium'])->label('Status <span class="required">* </span>',['class'=>'col-md-3 control-label']);
													$fieldStatus->template = $defaultInputTemplate;
													echo $fieldStatus;
												 ?>
											</div>
										</div>

										<div class="tab-pane" id="tab_spesification">
											<div class="form-body">
												<div class="text-align-ltr vpadding-10">
													<a href="javascript:;" class="btn btn-success btn-sm" id="spesification_new"><i class="fa fa-plus"></i> Add item </a>
												</div>
												<table class="table table-striped table-bordered table-hover dataTable no-footer" id="spesification">
													<thead>
													<tr role="row" class="heading">
														<th width="40%">
															Spesification
														</th>
														<th width="50%">
															 Value
														</th>
														<th width="10%">
															 
														</th>
													</tr>
													</thead>
													<tbody>
														<tr>
															<td>w</td>
															<td>w</td>
															<td><a class="edit" href="javascript:;">Edit</a> <a class="delete" href="javascript:;">Delete</a></td>
														</tr>
														<tr>
															<td>w</td>
															<td>w</td>
															<td><a class="edit" href="javascript:;">Edit</a> <a class="delete" href="javascript:;">Delete</a></td>
														</tr>
														<tr>
															<td>w</td>
															<td>w</td>
															<td><a class="edit" href="javascript:;">Edit</a> <a class="delete" href="javascript:;">Delete</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="tab-pane" id="tab_meta">
											<div class="form-body">
											<?php
												$fieldMTitle = $form->field($model,'METATITLE')->textArea(['maxlength' => '100', 'rows'=>'2', 'placeholder' => 'This textarea has a limit of 100 chars.'])->label('Meta Title: ',['class'=>'col-md-3 control-label']);
												$fieldMTitle->template = $defaultInputTemplate;
												echo $fieldMTitle;


												
												$fieldMKeyword = $form->field($model,'METAKEYWORDS')->textArea(['maxlength' => '1000', 'rows'=>'5', 'placeholder' => 'This textarea has a limit of 1000 chars.'])->label('Meta Keywords:',['class'=>'col-md-3 control-label']);
												$fieldMKeyword->template = $defaultInputTemplate;
												echo $fieldMKeyword;


												
												$fieldTMDesc = $form->field($model,'METADESCRIPTION')->textArea(['maxlength' => '225', 'rows'=>'3', 'placeholder' => 'This textarea has a limit of 225 chars.'])->label('Meta Description:',['class'=>'col-md-3 control-label']);
												$fieldTMDesc->template = $defaultInputTemplate;
												echo $fieldTMDesc;
											?>
											</div>
										</div>
										<div class="tab-pane" id="tab_images">
											<div class="alert alert-success">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
												<i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
											</div>
											<div id="imagesuploader_container" class="text-align-ltr vpadding-10">
												<a href="javascript:;" id="imagesuploader_pickfiles" class="btn btn-warning btn-sm" style="position: relative; z-index: 1;"><i class="fa fa-plus"></i> Select Files </a>
												<a href="javascript:;" id="imagesuploader_uploadfiles" class="btn btn-success btn-sm"><i class="fa fa-share"></i> Upload Files </a>
											</div>
											<div class="row">
												<div id="imagesuploader_filelist" class="col-md-6 col-sm-12"></div>
											</div>
											<table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_imgs">
											<thead>
											<tr role="row" class="heading">
												<th width="50%">
													 Image
												</th>
												<th width="50%">
													 Caption
												</th>
												<th width="8%">
													 As Cover
												</th>
												<th width="8%">
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="../../assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="../../assets/admin/pages/media/works/img1.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
												</td>
												<td>
													<span class="label label-sm label-primary status">cover</span>
												</td>
												<td>
													<?= Html::a('edit ',['%23'],['title'=>'Edit', 'data-pjax'=>'0']) ?>&nbsp;
													<?= Html::a('delete ',['%23'],['title'=>'Delete', 'data-pjax'=>'0', 'data-confirm'=>'Are you sure you want to delete this item?', 'data-method'=>'post']) ?>
												</td>
											</tr>
											</tbody>
											</table>
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
