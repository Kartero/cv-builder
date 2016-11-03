<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CV Builder - Compile your resume easily!</title>
		<meta name="description" content="Bootsrap powered web form which returns your CV as PDF. Easy to use.">
		<meta name="author" content="Tero Karhapää">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	</head>
	<body>
		<div class="container">
			<form action="pdf_creator.php" method="post">
				<?php include_once 'inc/all_forms.php'; // Compile form sections ?>
				
			</form>
			<?php include_once 'inc/modals.php'; // We don't want nested forms either..?>
		
		</div>
		<script src="js/add_field.js"></script>
	</body>
</html>
