<?php
	include_once'statics/header.php';
	include_once 'libs/create_todo.php';
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <!-- <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Menu</a> -->                
                <h2 class="create_todo_h2">Create TODO</h2>
                <div id="mainBody" class="col-sm-5">
                	<?php
                	if (isset($error)) {
                		echo '<div class="alert alert-danger col-sm-10">'.$error.'
                				</div>';
                	}
                	if (isset($success)) {
                		echo '<div class="alert alert-success col-sm-10">'.$success.'
                				</div>';
                	}
                	?>
                	<form method="post" action="add_new.php">
						<div class="form-group">
							<label for="Title">Title </label>
							<input type="text" name="title" class="form-control" id="title">
						</div>
						<div class="form-group">
							<label for="Title">Description (optional) </label>
							<textarea class="form-control" name="description" id="description" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="Title">Due Date </label>
							<input type="date" name="due_date" class="form-control" id="due_date">
						</div>
						<div class="form-group">
							<label for="Title">Label Under </label>
							<select name="label_under" class="form-control" id="label_under">
								<option value="">Select</option>
								<option value="Inbox">Inbox</option>
								<option value="Read Later">Read Later</option>
								<option value="Important">Important</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="create_todo" value="Create" id="create_todo" class="btn btn-info">Submit</button>
						</div>
					</form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

</body>
</body>
</html>