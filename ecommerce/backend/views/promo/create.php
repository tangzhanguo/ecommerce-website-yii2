use yii/helpers/Html;
use yii/widgets/ActiveForm; 


<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/global/plugins/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
	<link href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet"/>
	<link href="assets/global/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
<!-- BEGIN JAVASCRIPTS -->
	<!-- BEGIN PAGE PLUGINS -->
	<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jstree/dist/jstree.min.js" type="text/javascript"></script>
	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script src="pages/script/product/promodetail.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {  
		PromoDetail.init();
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
						  <a href="promo.php" class="list-group-item">Promo <span class="badge">14</span></a>
						</div>
			        </div>
			        <div class="col-lg-9">
			            <h2>Promotion</h2>
						<div class="page-nav-bar">
							<ul class="page-breadcrumb">
								<li>
									<i class="fa fa-home"></i>
									<a href="index.html">Home</a>
									<i class="fa fa-angle-right"></i>
								</li>
								<li>
									<a href="#">Product</a>
								</li>
							</ul>
						</div>

						<div class="page-main">
							<form class="default-form form-horizontal form-row-seperated" action="#">
								<div class="tabbable">
									<div class="head-box vpadding-10 vmargin-10">
										<div class="left">
											<i class="fa fa-shopping-cart"></i> Promo Information
										</div>
										<div class="right">
											<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Save </button>
											<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Save and exit </button>
										</div>
									</div>
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											General </a>
										</li>
										<li>
											<a href="#tab_category" data-toggle="tab">
											Category List </a>
										</li>
										<li>
											<a href="#tab_product" data-toggle="tab">
											Product List </a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Name: <span class="required">
													* </span>
													</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="name" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-9">
														<textarea class="form-control" class="summernote" name="description"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Stock Limit: </label>
													<div class="col-md-3">
														<div class="input-inline input-medium">
															<input id="spn-stock" type="text" value="10" name="discount" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Price: <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-inline input-medium">
															<input id="spn-price" type="text" value="10000" name="price" class="form-control">
														</div>
														<span class="help-block">
														basic example </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Discount: </label>
													<div class="col-md-3">
														<div class="input-inline input-medium">
															<input id="spn-discount" type="text" value="10" name="discount" class="form-control">
														</div>
														<span class="help-block">
														discount with decimal steps </span>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_category">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Category:
													</label>
													<div class="col-md-9">
														<div id="ch-bx-tree" class="tree">
														<ul>
															<li>Root node 1
																<ul>
																	<li>Child node 1</li>
																	<li><a href="#">Child node 2</a></li>
																</ul>
															</li>
															<li>Root node 1</li>
															<li>Root node 1</li>
															<li>Root node 1</li>
														</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_product">
											<div class="alert alert-success">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
												<i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
											</div>
											<div class="text-align-ltr vpadding-10">
												<a href="javascript:;" class="btn btn-warning btn-sm" style="position: relative; z-index: 1;"><i class="fa fa-plus"></i> Select Files </a>
												
												<a href="javascript:;" class="btn btn-success btn-sm"><i class="fa fa-share"></i> Upload Files </a>
											</div>
											<table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_imgs">
											<thead>
											<tr role="row" class="heading">
												<th width="20%">
													 Image
												</th>
												<th width="56%">
													 Caption
												</th>
												<th width="12%">
													 Cover Image
												</th>
												<th width="12%">
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
													<a href="javascript:;" class="btn btn-primary btn-xs">
													<i class="fa fa-pencil"></i> Set Cover </a>

													<a href="javascript:;" class="btn btn-primary btn-xs">
													<i class="fa fa-pencil"></i> Modify </a>

													<a href="javascript:;" class="btn btn-danger btn-xs">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</form>
						</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
