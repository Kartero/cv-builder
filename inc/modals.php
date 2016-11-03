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
	
	<div id="jobs-modal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add a Job Experience</h4>
		      </div>
		      <div class="modal-body">
		        <form>
		        	<button class="btn btn-info" type="button" id="save-jobs" data-dismiss="modal">Add</button>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>	
	 	</div>
	</div> <!-- #jobs-modal ends -->