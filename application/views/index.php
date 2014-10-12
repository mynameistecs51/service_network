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

    <div class="col-md-9">

        <div class="row carousel-holder">

            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="http://placehold.it/800x300" alt=""  style="width:850px; height:300px;">
                        </div>
                        
                        <?php    // code...picture slide show
                        foreach ($show_detail as $key => $value_detail){                              
                          $picture_name_array = explode(',', $value_detail->pic_name);  
                          foreach ($picture_name_array as $key => $value_picture_name) {
                                
                                echo "<div class='item'>";
                                   
                                echo "<img class='slide-image' src=".base_url()."image/pic_sale/".$value_picture_name." alt=' style='width:850px; height:300px;'>";                            
                                echo "</div>";
                            }
                        }
                        ?>

                </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

    </div>

    <div class="row">
        <?php 
        foreach ($show_detail as $key => $value_detail){
            ?>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <?php $picture_name_array = explode(',', $value_detail->pic_name);?>
                    <img src="<?php echo base_url().'image/pic_sale/'.$picture_name_array[0];?>" alt="" style="width:320px; height:150px;">
                    <div class="caption">
                        <h4 class="pull-right">xxxB.-</h4>
                        <h4><a href="#"><?php echo $value_detail->group_name;?></a>
                        </h4>
                        <p><?php echo $value_detail->detail_text;?></p>
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
            <?php 
        } 
        ?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <h4><a href="#">ยังมีที่ว่างสำหรับคุณ</a>
            </h4>
            <p>ถ้าหากคุณคิดว่าจะติดตั้งระบบเครือข่ายไม่ว่าจะเป็น กล้องวงจรปิด ระบบอินเเตอร์เน็ต หอพัก บ้าน อาคารสำนักงาน<a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
            <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">ติดต่อเรา</a>
        </div>
    </div>
</div>
</div><hr/>
<?php $this->load->view('footter');?>