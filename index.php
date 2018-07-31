<!-- developed by Abhineet Singh -->
<?php
	include_once'statics/header.php';
	include_once 'libs/list_todo.php';
	include_once 'libs/delete.php';
?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <a href="#menu-toggle" class="btn btn-dark" id="menu-toggle"><span id="menuHide">Menu</span></a>
                <a href="add_new.php" class="btn btn-success floatRight"><i class="fa fa-plus"></i> Add New</a>
                <h2>Manage TODO</h2>
                <div id="mainBody">
                	
                	<div class="table-responsive-sm">
						<table class="table table-striped">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Title</td>
									<th scope="col">Snippet</td>
									<th scope="col">Due Date</td>
									<th scope="col">Time Left</td>
									<th scope="col">Progress</td>
									<th scope="col" width="20%" class="to_center">Actions</td>
								</tr>
							</thead>
							<tbody>
									<?php
									if ($list_todo !== 0) {
										foreach ($list_todo as $key => $value) {
											$today = strtotime("now");
											$due_date = strtotime($value['due_date']);
											if ($due_date > $today) {
												$timeleft = $due_date - $today;
												$timeleft = round((($timeleft/24)/60)/60); 
												$time_left = $timeleft.'day';
												if ($time_left<1) {
													$time_left = 'less than one day';
												}
											} else{
												$time_left = 'No time left';
											}
											$newProgress = $value['progress'];
											echo '
											<tr>
												<td>'.$value['title'].'</td>
												<td>'.$value['description'].'</td>
												<td>'.$value['due_date'].'</td>
												<td>'.$time_left.'</td>
												<td>
													<div class="progress">
													  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="'.$newProgress.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$newProgress.'%">'.$newProgress.'</div>
													</div>
												</td>
												<td  class="to_right">
													<a href="edit.php?label='.$value['title'].'&id='.$value['id'].' title='.$value['title'].'><button type="button" id= "edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></a> 
													<a href="index.php?label='.$value['title'].'&delete='.$value['id'].' title='.$value['title'].'><button type="button" id="delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
												</td>
											</tr>
											';	
										}
									} else{
										echo "<td colspan='6' align='center'>Sorry No Todo now</td>";
									}
									?>
							</tbody>
						</table>
					</div>               	
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /End wrapper -->
</body>
</html>