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
				<li class="active"><?php echo anchor('admin_con/edit_admin','เพิ่ม');?></li>
				<li><a href="#">ค้นหา</a></li>
			</ul><br/>
			
			<div class="row col-md-offset-2">

				<?php echo form_open_multipart('admin_con/do_upload',' class="form-horizontal" role="form" ');?>
				<?php echo "<input type='hidden' name='page' value='".$page."'>";?>
				<div class="form-group col-xs-6 col-xs-6 .col-md-4">
					<label for="input_search" class="col-sm-2 control-label">search</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="input_search" name="input_search" placeholder="Search">
					</div>
				</div>
				<div class="form-group col-xs-6">
					<label for="input_group" class="col-sm-2 control-label">group</label>
					<div class="col-sm-8">
						<select class="form-control" id="input_group" name="input_group" readonly>
							<?php
								$group_detail_id ; // group_id

								foreach ($show_group as $group => $service_group) {
									// code...	select group ....

									if($service_group->group_name == $page){		
										$show_group_detail = $service_group->group_id; //ประกาศให้ใช้ร่วมกัน

										echo '<option value="'.$service_group->group_id.'">'.$service_group->group_name.'</option>';
									}
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group col-xs-6">
						<label for="input_detail" class="col-sm-2 control-label">detail	</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="3" id="input_detail" name="input_detail"></textarea>
						</div>
					</div>
					<div class="form-group col-xs-6">
						<label for="input_picture" class="col-sm-2 control-label">picture	</label>
						<div class="col-sm-8">
							<img id="show_pic" src="<?php echo base_url().'image/pic_admin/no-image.jpg';?>" style="width:130px; height:70px" /><br/>
							<input type="file" id="images" class="form-control" name="images[]" size="20" onchange="PreviewImage();" multiple/>
						</div>
					</div>

					<div class="col-sm-offset-8  col-xs-4">
						<button type="reset" class="btn btn-default" value="reset">reset</button>
						<button type="submit" class="btn btn-default" value="save">save</button>
					</div>
				</form>
			</div>  <!-- --- end class="row col-md-offset-2" --------- -->
			<hr>
			<table class="table table-hover">
				<thead>
					<tr >
						<th>#</th>
						<th   style="text-align:center;" >คำอธิบาย</th>
						<th>ภาพ</th>
						<th>group</th>
						<th>edit delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($query_service_by_group as $key => $service_group_value) {
						?>
						<tr >
							<td>
								#
							</td>
							<td width=400px>
								<?php echo $service_group_value->detail_text;	//โชว์ รายละเอียด?>
							</td>
							<td>	<!-- ///โชว์รูปภาพ -->
								<img src="<?php echo base_url()."image/pic_sale/".$service_group_value->pic_name ;?>" width=100px height=70px>			
								
							</td>
							<td >
							<?php
								echo "pictrue_name = ".explode(",",$service_group_value->pic_name);
								?>
							</td>
							<td>
								<?php echo $service_group_value->group_name;?>		<!-- //โชว์กลุ่ม -->
							</td>
							<td>
								<?php 
								echo anchor('admin_con/edit_file/'.$page.'/'.$service_group_value->detail_id,'แก้ไข  ','&nbsp;&nbsp;');
								echo anchor('admin_con/delete_file/'.$page.'/'.$service_group_value->detail_id.'/'.$service_group_value->pic_name,'ลบ	'); 
								?>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>	
		</div>
	</div>
</div>
</div>
<?php $this->load->view('footter');?>