<h3>Work Experience:</h3>

<div class="form-group jobs">
	<label for="jobs-1">Latest or Current Employer: </label>
	<input type="text" class="form-control" name="jobs-1" id="jobs-1">

	<label for="jobs-1-dates">Start and End Date</label>
	<div class="row">
		<div class="col-sm-1">
			<input class="form-control" type="number" min="1" max="12" step="1" name="jobs-start-month-1">
		</div>
		<div class="col-sm-2">
			<input class="form-control" type="number" min="1970" max="2022" step="1" name="jobs-start-year-1">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-1">
			 <input class="form-control" type="number" min="1" max="12" step="1" name="jobs-end-month-1">
		</div>
		<div class="col-sm-2">
			<input class="form-control" type="number" min="1970" max="2022" step="1" name="jobs-end-year-1">
		</div>
	</div>
	
	<label for="jobs-decription-1">Job Description</label>
	<textarea class="form-control" name="jobs-description-1" id="jobs-description-1"></textarea>
</div>

<div id="jobs-empty"></div>
<div class="form-group">
	<button type="button" id="add-jobs" class="btn btn-default" data-toggle="modal" data-target="#jobs-modal">Add more jobs</button>
	
</div>
