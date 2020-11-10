<!DOCTYPE html>
<html>
<head>
	<?php echo view('header'); ?>
</head>
<body>
	<div class="dark_rum">
	<i class="fa fa-check x3"></i>
	<h2 style="display: inline;">This is an assummed Navigation Bar Brov!</h2>
	</div>
	<!-- first row called -->
	<?php echo view('first_row');?>

	<!-- second row -->
	<?php echo view('second_row');?>
	<?php echo view('footer');?>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript">
		let x = 2020;
		var y = 0;
		var z = x + y;
		document.getElementById('demo') .innerHTML = z;
	</script>

</body>
</html>