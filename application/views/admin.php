<?php echo $this->load->view('head');?>

<div class="row " >
	<div class="col-xs-5 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network_admin.gif"  style="width:200px; hight:150px;  position:relative;  
				margin:auto;  
				display:block; "> 
			</div>
			<div class="panel-footer" align="center">ตั้งค่า network admin cctv</div>
			');?>       
		</div> 
	</div>
	<div class="col-xs-6 col-md-3 " align="center">  
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/network.jpg"  style="width:200px; hight:150px;  position:relative;  
				margin:auto;  
				display:block; "> 
			</div>
			<div class="panel-footer" align="center">ตั้งค่า cctv</div>
			');?>     
		</div>
	</div>
	<div class="col-xs-6 col-md-3 " align="center">
		<div class="panel panel-primary " >
			<?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
				<img src=" '.base_url().'image/pic_admin/cctv.jpg"  style="width:200px; hight:150px;  position:static;  
				margin:auto;  
				display:block; "> 
			</div>
			<div class="panel-footer" align="center">ตั้งค่า cctv</div>
			');?>     
		</div>
	</div>
</div>

<?php $this->load->view('footter');?>