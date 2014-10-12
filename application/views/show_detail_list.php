<?php $this->load->view('head');?>
<div class="row">

	<div class="col-md-3">
		<div class="navbar-default sidbar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<p class="lead">Support</p>
				<div class="list-group">
					<!-- <a href="index.php/admin_con" class="list-group-item">admin</a> -->
					<?php echo anchor('service_con/show_detail/network_admin/',"Network_Admin",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/network/',"Network",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/cctv/',"CCTV",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/profile_ago/',"ผลงานที่ผ่านมา",'class="list-group-item"');?>
					<?php echo anchor('service_con/contact/Contact',"ติดต่อเรา",'class="list-group-item"');?>
				</div>
			</div>
		</div>
		<div class="navbar-default sidbar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<p class="lead">สิ่งที่น่าสนใจ</p>
				<div class="list-group">
					<!-- <a href="index.php/admin_con" class="list-group-item">admin</a> -->
					<?php echo anchor('#',"Cico",'class="list-group-item"');?>
					<?php echo anchor('#',"อื่น ๆ",'class="list-group-item"');?>
					<?php echo anchor('#',"อื่น ๆ ",'class="list-group-item"');?>
					<?php echo anchor('#',"อื่น ๆ",'class="list-group-item"');?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	<h2><span class='label label-info'>ผลงานที่ผ่านมา</span></h3><br/>
			<!-- ------------------------------------ -->
			<?php 
			foreach ($query_detail as $detail => $row) {
				$picture_name_array = explode(',', $row->pic_name);
				foreach ($picture_name_array as $key => $value_detail) { //show picture 
					echo '<img src='.base_url().'image/pic_sale/'.$value_detail.' alt="" width=350px height=220px> &nbsp;';

				}
					echo "<br/><br/>";

					//show detail text
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row->detail_text;
			}
			?>
		
	</div>
</div>
<?php $this->load->view('footter');?>