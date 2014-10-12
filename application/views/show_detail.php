<?php $this->load->view('head');?>

<div class="row">

	<div class="col-md-3">
		<div class="navbar-default sidbar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<p class="lead">Support</p>
				<div class="list-group">
					<!-- <a href="index.php/admin_con" class="list-group-item">admin</a> -->
					<?php echo anchor('service_con/show_detail/Network_admin/',"Network_Admin",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/Network/',"Network",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/CCTV/',"CCTV",'class="list-group-item"');?>
					<?php echo anchor('service_con/show_detail/Profile_ago/',"ผลงานที่ผ่านมา",'class="list-group-item"');?>

				</div>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<h1 align="center"><span class="label label-info"><?php echo "Service & ".$page;?></span></h3><hr/>
			<div class="row">
				<?php
				foreach ($show_by_group as $key => $show_detail_by_group) {
				# code... show detail by group 
					?>				

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<?php $picture_name_array = explode(',', $show_detail_by_group->pic_name);?>
							<img src="<?php echo base_url().'image/pic_sale/'.$picture_name_array[0];?>" alt="" style="width:320px; height:150px;">
							
							<div class="caption">
								<h4 class="pull-right">xxxB.-</h4>
								<h4><?php echo anchor('service_con/show_detail_list/'.$show_detail_by_group->detail_id,$show_detail_by_group->group_name);?>
							</h4>
							<p><?php echo $show_detail_by_group->detail_text;?></p>
						</div>
						<div class="ratings">
							<p class="pull-right">15 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</p>
						</div>
					</div>
				</div>

				<?php
			}
			?>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<h4><a href="#">ยังมีที่ว่างสำหรับคุณ</a>
				</h4>
				<p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
				<a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footter');?>