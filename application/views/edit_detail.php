<?php $this->load->view('head');?>
<!-- โชว์รูปภาพก่อนอัพ -->
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript">

	function PreviewImage() {

		var oFReader = new FileReader();

		oFReader.readAsDataURL(document.getElementById("userfile").files[0]);

		oFReader.onload = function (oFREvent) {

			document.getElementById("show_pic").src = oFREvent.target.result;

		};

	} 

</script>
<!-- end jquery reader upload picture -->

<div class="row  col-md-10 col-md-offset-1 ">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3><?php echo "Config ".$page;?> <span class="glyphicon glyphicon-wrench"></span></h3>
		</div>	<!-- ---------------- end div class="panel-heading"---------------------- -->
		<div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
				<li ><?php echo anchor('admin_con/edit_admin/'.$page,'เพิ่ม');?></li>
				<li class="active"><a href="#">แก้ไข</a></li>
				<li><?php echo anchor('admin_con/search_detail/','ค้นหา');?></li>
			</ul><br/>
			
			<div class="row col-md-offset-2">

				<?php echo form_open_multipart('admin_con/update_detail',' class="form-horizontal" role="form" ');?>

				<div class="form-group col-xs-6 col-xs-6 .col-md-4">
					<label for="input_search" class="col-sm-2 control-label">search</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="input_search" name="input_search" placeholder="Search">
					</div>
				</div>
				<?php foreach ($query_detail_by_id as $detail => $detail_row) {
					# code... show detail by id
					echo "<input type='hidden' name='detail_id' value='".$detail_row->detail_id."'>";
					echo "<input type='hidden' name='page' value='".$page."'>";
				?>				
				<div class="form-group col-xs-6">
					<label for="input_group" class="col-sm-2 control-label">group</label>
					<div class="col-sm-8">
						<select class="form-control" id="input_group" name="input_group" >
							<?php
								foreach ($show_group as $group => $service_group) {
									// code...	select group ....
										$selected = ($service_group->group_name == $page? "selected":"");
									echo '<option value="'.$service_group->group_id.'"'.$selected.' >'.$service_group->group_name.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group col-xs-6">
						<label for="input_detail" class="col-sm-2 control-label">detail	</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="3" id="input_detail" name="input_detail"><?php echo $detail_row->detail_text;?> </textarea>
						</div>
					</div>
					<div class="form-group col-xs-6">
						<label for="input_picture" class="col-sm-2 control-label">picture	</label>
						<div class="col-sm-8">
							<img id="show_pic" src="<?php echo base_url().'image/pic_sale/'.$detail_row->pic_name;?>" style="width:130px; height:70px" /><br/>
							<input type="file" id="userfile" class="form-control" name="userfile" size="20" onchange="PreviewImage();" multiple value="xxxxxxx" />
						</div>
					</div>
				<?php
					}
				?>
					<div class="col-sm-offset-8  col-xs-4">
						<button type="reset" class="btn btn-default" value="reset">reset</button>
						<button type="submit" class="btn btn-default" value="save">update</button>
					</div>
				</form>
			</div>  <!-- --- end class="row col-md-offset-2" --------- -->
			<hr>
			
		</div>
	</div>
</div>
</div>
<?php $this->load->view('footter');?>