<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title> Bulk Order</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	    <link href="css/style.css" rel="stylesheet" type="text/css" />
	    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
	    <link rel="stylesheet" href="assets/material/material.min.css">

	    <style type="text/css">
			.mdl-textfield{
				padding: 28px 0;
			}
			div.mdl-textfield.mdl-js-textfield.mdl-textfield--floating-label.is-upgraded.is-focused > .mdl-textfield__label{
				color:#008acc;
			}
			div.mdl-textfield.mdl-js-textfield.mdl-textfield--floating-label.is-upgraded.is-focused > .mdl-textfield__input{
				color:gray;
			}
			input[type=number]::-webkit-inner-spin-button, 
			input[type=number]::-webkit-outer-spin-button { 
			    -webkit-appearance: none;
			    -moz-appearance: none;
			    appearance: none;
			    margin: 0; 
				}
	    </style>
</head>
<body>

	<section id="bulk_form" >
		<div class="container">
		
		<div class="rows">
			<div class="col-lg-6 col-xs-12 col-lg-offset-3" align="center">

					<form action="#">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="fname">
							<label class="mdl-textfield__label" for="sample3">First Name</label>
						</div>
						<br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="email" id="email">
							<label class="mdl-textfield__label" for="sample3">Email</label>
						</div>
						<br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"  >
							<input class="mdl-textfield__input" type="number" id="mobile"  pattern="-?[0-9]*(\.[0-9]+)?">
							<label class="mdl-textfield__label" for="sample3">Mobile</label>
							<span class="mdl-textfield__error">Enter a valid number!</span>
						</div>
						<br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="email" id="company">
							<label class="mdl-textfield__label" for="sample3">Company Name</label>
						</div>
							

						<br>		
					
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="showDes">
						  Show Designs
						</button>
						<br>
						<div id="p2" style="display:none;margin-top:20px;" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>

					</form>
			</div>
			</div>
		</div>			
	</section>


<!-- script for the page -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="assets/material/material.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script type="text/javascript">
 	$(document).ready(function(){

 		$('#showDes').click(function(){
 			$('#p2').show();
 		});

 	});


 	</script>
</body>
</html>