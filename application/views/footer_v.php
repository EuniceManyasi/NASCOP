<div class="container-fluid">
	<div id="footer_text" class="row-fluid">
		Government of Kenya &copy; <?php echo date('Y');?>.All Rights Reserved
	</div>
</div>
<?php 
$jsArray = array('searchable.js','jquery.form.js', 'jquery.gritter.js', 'jquery-ui.js', 'sorttable.js', 'datatable/jquery.dataTables.min.js', 'datatable/FixedColumns.js', 'bootstrap/bootstrap.min.js','bootstrap-multiselect.js', 'bootstrap/paging.js', 'Merged_JS.js', 'jquery.multiselect.min.js', 'jquery.multiselect.filter.js', 'validator.js', 'validationEngine-en.js', 'jquery.blockUI.js', 'amcharts/amcharts.js', 'highcharts/highcharts.js', 'highcharts/highcharts-more.js', 'highcharts/modules/exporting.js');
foreach ($jsArray as $key => $value) {
	echo '<script type="text/javascript" src="'.base_url().'assets/js/'.$value.'" charset="UTF-8"></script>';
	?>
	<br>
	<?php
}