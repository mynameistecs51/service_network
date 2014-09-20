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
					<?php echo anchor('service_con/show_detail/Portfolio_ago/',"ผลงานที่ผ่านมา",'class="list-group-item"');?>

				</div>
			</div>
		</div>
	</div>

	<div class="col-md-9">
	<h3><?php echo "Service & ".$page;?></h3><br/><hr/>
		<div class="row">

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url().'image/pic_sele/network_admin.jpg';?>" alt="" style="width:320px; height:150px;">
					<div class="caption">
						<h4 class="pull-right">xxxB.-</h4>
						<h4><a href="#">NetWork Admin</a>
						</h4>
						<p>ติดต่อหลังไมค์ <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url().'image/pic_sele/network1.jpg';?>" alt="" style="width:320px; height:150px;">
					<div class="caption">
						<h4 class="pull-right">xxxB.-</h4>
						<h4><a href="#">Network</a>
						</h4>
						<p>ติดต่อหลังไมค์</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url().'image/pic_sele/cctv.jpg';?>" alt="" style="width:320px; height:150px;">
					<div class="caption">
						<h4 class="pull-right">xxxB.-</h4>
						<h4><a href="#">CCTV</a>
						</h4>
						<p>ติดต่อหลังไมค์</p>
					</div>
					<div class="ratings">
						<p class="pull-right">31 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">xxxB.-</h4>
						<h4><a href="#">Fourth Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">6 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">xxxB.-</h4>
						<h4><a href="#">Fifth Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">18 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>                                      
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<h4><a href="#">Like this template?</a>
				</h4>
				<p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
				<a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footter');?>