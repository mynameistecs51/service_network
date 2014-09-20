<?php $this->load->view('head');?>

<div class="row " >
	<h3>Configuration <span class="glyphicon glyphicon-wrench"></span></h3><br/><br/>
	<div class="col-xs-5 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('admin_con/edit_admin/Network_admin/','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network_admin.jpg" style="width:200px; height:150px;">
			</div>
			<div class="panel-footer" align="center"><b> Network Admin </b></div>
			');?>       
		</div> 
	</div>
	<div class="col-xs-6 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('admin_con/edit_admin/Network/','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network.jpg"  style="width:200px; height:150px;"> 
			</div>
			<div class="panel-footer" align="center"><b> Network  </b></div>
			');?>     
		</div>
	</div>
	<div class="col-xs-6 col-md-3 " align="center">
		<div class="panel panel-primary " >
			<?php echo anchor('admin_con/edit_admin/CCTV/','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/cctv.jpg"  style="width:200px; height:150px; "> 
			</div>
			<div class="panel-footer" align="center"><b> CCTV </b></div>
			');?>     
		</div>
	</div>
	<div class="col-xs-6 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('admin_con/edit_admin/Profile_ago/','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/Bee-Customized-icon.jpg"  style="width:200px; height:150px; "> 
			</div>
			<div class="panel-footer" align="center"><b> Profile_ago  </b></div>
			');?>     
		</div>
	</div>

</div>

<?php $this->load->view('footter');?>