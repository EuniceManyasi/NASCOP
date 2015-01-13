
<?php
$cssArray = array('amcharts/style.css', 'bootstrap.css','bootstrap.min.css','bootstrap-responsive.min.css','bootstrap-multiselect.css', 'datatable/jquery.dataTables.css', 'datatable/jquery.dataTables_themeroller.css', 'datatable/demo_table.css', 'assets/jquery.multiselect.css', 'assets/jquery.multiselect.filter.css', 'assets/prettify.css', 'style_report.css', 'validator.css', 'jquery.gritter.css', 'jquery-ui.css', 'style.css');
foreach ($cssArray as $key => $value) {
	echo '<link type="text/css" rel="stylesheet" href="'.base_url().'assets/css/'.$value.'" media="screen" />';

}
echo '<script type="text/javascript" src="'.base_url().'assets/js/jquery-1.10.2.js" charset="UTF-8"></script>';
echo '<script type="text/javascript" src="'.base_url().'assets/js/jquery-1.7.2.min.js" charset="UTF-8"></script>';
echo '<script type="text/javascript" src="'.base_url().'assets/js/jquery-migrate-1.2.1.js" charset="UTF-8"></script>';
?>


	