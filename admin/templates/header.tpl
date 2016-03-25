<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Administrator - Khalwahijab</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="This site was made using Smarty PHP.">
		<meta name="author" content="Avin Putra">
		
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
		
		<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
		
		<script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
		
		<!-- Demo page code -->
		<style type="text/css">
			#line-chart {
				height:300px;
				width:800px;
				margin: 0px auto;
				margin-top: 1em;
			}
			.brand { font-family: georgia, serif; }
			.brand .first {
				color: #ccc;
				font-style: italic;
			}
			.brand .second {
				color: #fff;
				font-weight: bold;
			}
			
			.error {
				font-size:small; 
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
		  		border-color: #eed3d7;
		  		color: #b94a48; 
			}
		</style>

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../favicon.jpg">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		
		<style type="text/css" title="currentStyle">
			@import "../DataTables/media/css/demo_page.css";
			@import "../DataTables/media/css/demo_table_jui.css";
			@import "../DataTables/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
			@import "../DataTables/extras/TableTools/media/css/TableTools_JUI.css";
		</style>
		<script type="text/javascript" charset="utf-8" src="../DataTables/media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/extras/TableTools/media/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/extras/TableTools/media/js/TableTools.js"></script>
	
		<link rel="stylesheet" href="js/development-bundle/themes/base/jquery.ui.all.css" type="text/css">
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.core.js"></script>
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.datepicker.js"></script>
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.widget.js"></script>
	
		{literal}
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable( {
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>
		{/literal}
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	</head>
	
	
	<!--[if (gt IE 9)|!(IE)]><!-->
	<body class="">
	<!--<![endif]-->
	
	<div class="navbar">
		<div class="navbar-inner">
			<img src="../images/logopt.png">
			<p>
				<b>Selamat datang, <b>{$username}</b></br>
				Tanggal : {$date}</b>
			</p>
		</div>
	</div>