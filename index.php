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
				<h3>Personal Details: </h3>
				
				<div class="form-group">
					<label for="name">Full name: </label>
					<input type="text" class="form-control personal" name="name" id="personal-1">
				</div>
				<div class="form-group">
					<label for="address">Street Address: </label>
					<input type="text" class="form-control personal" name="address" id="personal-2">
				</div>
				<div class="form-group">
					<label for="address">Postal Code and City: </label>
					<input type="text" class="form-control personal" name="address" id="personal-3">
				</div>
				<div class="form-group">
					<label for="email">Email Address: </label>
					<input type="email" class="form-control personal" name="email" id="personal-4">
				</div>
				<div class="form-group">
					<label for="phone">Phone: </label>
					<input type="text" class="form-control personal" name="phone" id="personal-5">
				</div>
				<div class="personal-empty"></div>
				<div class="form-group">
					<button type="button" id="add-personal" class="btn btn-default" data-toggle="modal" data-target="#personal-modal">Add more personal details</button>
					
					<div id="personal-modal" class="modal fade" role="dialog">
				  		<div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Add field</h4>
						      </div>
						      <div class="modal-body">
						        <form>
						        	<div class="form-group">
						        		<label for="title">Title or label of personal detail</label>
						        		<input type="text" class="form-control" name="title" id="personal-title" name="title">
						        	</div>
						        	<div class="form-group">
						        		<label for="type">Select field type:</label>
						        		<select class="form-control" name="type" id="personal-select">
						        			<option value="text">Text</option>
						        			<option value="number">Number</option>
						        			<option value="email">Email</option>
						        			<option value="textarea">Textarea</option>
						        		</select>
						        	</div>
						        	<button class="btn btn-info" type="button" id="save-personal" data-dismiss="modal">Add</button>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>	
					 	</div>
					</div> <!-- #pesonal-modal ends -->
					
				</div>
				
			</form>
		
		</div>
		<script src="js/add_field.js"></script>
	</body>
</html>
