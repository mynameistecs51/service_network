<?php echo $this->load->view('head');?>

<div class="row " >
	<h3>Configuration <span class="glyphicon glyphicon-wrench"></span></h3><br/><br/>
	<div class="col-xs-5 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network_admin.jpg" style="width:200px; height:150px;">
			</div>
			<div class="panel-footer" align="center"><b> Network Admin </b></div>
			');?>       
		</div> 
	</div>
	<div class="col-xs-6 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network.jpg"  style="width:200px; height:150px;"> 
			</div>
			<div class="panel-footer" align="center"><b> Network  </b></div>
			');?>     
		</div>
	</div>
	<div class="col-xs-6 col-md-3 " align="center">
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/cctv.jpg"  style="width:200px; height:150px; "> 
			</div>
			<div class="panel-footer" align="center"><b> CCTV </b></div>
			');?>     
		</div>
	</div>
	<div class="col-xs-6 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/Bee-Customized-icon.jpg"  style="width:200px; height:150px; "> 
			</div>
			<div class="panel-footer" align="center"><b> ผลงานที่ผ่านมา  </b></div>
			');?>     
		</div>
	</div>

</div>

<?php $this->load->view('footter');?>