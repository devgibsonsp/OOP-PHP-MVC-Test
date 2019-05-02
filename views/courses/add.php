<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add a course</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Course Name</label>
    		<input type="text" name="course_name" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Course CRN</label>
    		<input type="text" name="course" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>courses">Cancel</a>
    </form>
  </div>
</div>