<?php
	include_once'statics/header.php';
	include_once 'libs/list_todo.php';
	include_once 'libs/edit_todo.php';
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <!-- <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Menu</a> -->                
                <h2 class="create_todo_h2">Edit TODO</h2>
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
                	
                	<form method="post" action="edit.php?id=<?php echo $_GET['id']; ?>">

                	<?php foreach ($list_todo as $td) {
                		$given_array = array("Inbox","Read Later","Important");
                		$selected_array = array($td['label']);
                		$array_remaining = array_diff($given_array, $selected_array);
                	?>
						<div class="form-group">
							<label for="Title">Title </label>
							<input type="text" name="title" class="form-control" id="title" value="<?php echo $td['title']; ?>" >
						</div>
						<div class="form-group">
							<label for="Title">Description (optional) </label>
							<textarea class="form-control" name="description" id="description" rows="3"><?php echo $td['description']; ?></textarea>
						</div>
						<div class="form-group">
							<label for="Title">Due Date </label>
							<input type="date" name="due_date" class="form-control" id="due_date"  value="<?php echo $td['due_date']; ?>" >
						</div>
						<div class="form-group">
							<label for="Title">Label Under </label>
							<select name="label_under" class="form-control" id="label_under">
								<?php
									echo '<option value="'.$td['label'].'">'.$td['label'].'</option>';
									foreach ($array_remaining as $ar) {
										echo '<option value="'.$ar.'">'.$ar.'</option>';
								}
								?>
								<!-- <option value="">Select</option>
								<option value="Inbox">Inbox</option>
								<option value="Read Later">Read Later</option>
								<option value="Important">Important</option> -->
							</select>
						</div>

						<div class="form-group">
							<div id="seekbar">
								<div class="slidecontainer">
									<input type="range" min="0" max="100" value="<?php echo $td['progress'];?>" class="slider" id="seekbarRange">
									<p><span id="progressValue"></span></p>
								</div>								
							</div>
							<div id="progress">
								<?php echo $td['progress'];?>%
							</div>
							<input type="hidden" name="progress_value" value="<?php echo $td['progress'];?>" id="progress_value" >					
						</div>

						<div class="form-group">
							<button type="submit" name="edit_todo" value="Edit" id="edit_todo" class="btn btn-info">Save</button>
						</div>
                	<?php }  ?>

					</form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

</body>
<script>
	var slider = document.getElementById("seekbarRange");
	var output = document.getElementById("progress");
	output.innerHTML = slider.value+"%";

	slider.oninput = function() {
		output.innerHTML = this.value+"%";  
		document.getElementById("progress_value").value = this.value;
	}
</script>
</html>