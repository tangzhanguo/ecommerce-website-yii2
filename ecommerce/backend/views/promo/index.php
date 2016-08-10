use yii/helpers/Html;
use yii/widgets/ActiveForm; 


<?php $this->beginBlock('styleBlock'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css">
	<!-- END PAGE LEVEL STYLES -->
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scriptBlock'); ?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN PAGE PLUGINS -->
	<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
	<!-- END PAGE PLUGINS -->

	<!-- BEGIN PAGE SCRIPTS -->
	<script type="text/javascript" src="pages/script/product/products.js"></script>
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
						  <a href="#" class="list-group-item disabled">Promotion <span class="badge">14</span></a>
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
									<a href="#">Promotion</a>
								</li>
							</ul>
						</div>


						<div class="head-box vpadding-10 vmargin-10">
							<div class="left">
								<i class="fa fa-shopping-cart"></i> Promo List
							</div>
							<div class="right">
								<a href="promo_compose.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Promotion </a>
							</div>
						</div>
						<table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_products">
							<thead>
							<tr role="row" class="heading">
								<th width="1%">
									<input type="checkbox" class="group-checkable">
								</th>
								<th width="8%">
									 ID
								</th>
								<th width="25%">
									 Promo&nbsp;Name
								</th>
								<th width="15%">
									 Begin&nbsp;Date
								</th>
								<th width="15%">
									 End&nbsp;Date
								</th>
								<th width="15%">
									 Status
								</th>
								<th width="17%">
									 Actions
								</th>
							</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd">
									<td><div class="checker"><span><input type="checkbox" name="id[]" value="1"></span></div></td>
									<td class="sorting_1">1</td>
									<td>Clearance Promo</td>
									<td>05/01/2011</td>
									<td>05/01/2012</td>
									<td><span class="label label-sm label-danger status">Non Active</span></td>
									<td>
										<a href="promo_compose.php" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a>
										<a href="promo_compose.php" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
									</td>
								</tr>
							</tbody>
						</table>

			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

