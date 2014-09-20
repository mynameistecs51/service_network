<?php $this->load->view('head');?>


<div class="row  col-md-10 col-md-offset-1 ">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3><?php echo "Config ".$page;?> <span class="glyphicon glyphicon-wrench"></span></h3>
		</div>
		<div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#">เพิ่ม</a></li>
				<li><a href="#">ลบ</a></li>
				<li><a href="#">แกไข</a></li>
				<li><a href="#">ค้นหา</a></li>
			</ul>
			<br/>
			<div class="row col-md-offset-2">
				<?php echo form_open_multipart('admin_con/add_detail',' class="form-horizontal" role="form" ');?>

				<div class="form-group col-xs-6 col-xs-6 .col-md-4">
					<label for="input_search" class="col-sm-2 control-label">search</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="input_search" placeholder="Password">
					</div>
				</div>
				<div class="form-group col-xs-6">
					<label for="input_search" class="col-sm-2 control-label">group</label>
					<div class="col-sm-8">
						 <!-- <select class="form-control">
							<option>-----select----</option>
							<?php
							foreach ($show_group as $group => $group_value) {
							# code...					
								echo '<option value="'.$group_value->group_id.'">'.$group_value->group_name.'</option>';
							}
							?>
						</select> -->
						<?php 
							foreach ($show_group as $key => $group_value) {
								# code...
								if($group_value->group_name == $page){
									echo '<input type="text" class="form-control" id="input_group" value="'.$group_value->group_name.'" disabled>';
								}
							}
						?>
						<!-- <input type="text" class="form-control" id="input_group" value="<?php echo $page;?>" disabled> -->
					</div>
				</div>
				<div class="form-group col-xs-6">
					<label for="input_search" class="col-sm-2 control-label">detail	</label>
					<div class="col-sm-8">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group col-xs-6">
					<label for="input_search" class="col-sm-2 control-label">picture	</label>
					<div class="col-sm-8">
						<input type="file" class="form-control" id="input_search">
					</div>
				</div>

				<div class="col-sm-offset-8  col-xs-4">
					<button type="reset" class="btn btn-default">reset</button>
					<button type="submit" class="btn btn-default">save</button>
				</div>
			</div>
		</form>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>edit delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td>edit  delete</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>edit  delete</td>

				</tr>
				<tr>
					<td>3</td>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
					<td>edit  delete</td>

				</tr>
			</tbody>
		</table>	
	</div>
</div>
</div>
</div>
<?php $this->load->view('footter');?>