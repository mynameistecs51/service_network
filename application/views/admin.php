<?php echo $this->load->view('head');?>
<div class="row show-grid">

    <div class="col-md-8 col-md-offset-2">
        <table width="80%" border ="black" align="center ">
            <tr>
                <th>
                    <div class="panel panel-primary">
                        <?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
                            <img src=" '.base_url().'image/pic_admin/network_admin.gif"  style="width:200px; hight:150px; padding:10px;"> 
                        </div>
                        <div class="panel-footer" align="center">ตั้งค่า network_admin</div>
                        ');?>                           
                    </div>
                </th>
                <th>
                    <div class="panel panel-primary">
                        <?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
                            <img src=" '.base_url().'image/pic_admin/network.jpg"  style="width:200px; hight:150px; padding:10px;"> 
                        </div>
                        <div class="panel-footer" align="center">ตั้งค่า network</div>
                        ');?>       
                    </div>
                </th>
                <th>
                    <div class="panel panel-primary">
                        <?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
                            <img src=" '.base_url().'image/pic_admin/cctv.jpg"  style="width:200px; hight:150px; padding:10px;"> 
                        </div>
                        <div class="panel-footer" align="center">ตั้งค่า cctv</div>
                        ');?>       
                    </div>
                </th>
            </tr>
        </table>
    </div>
</div>
----------------------
<div class="row show-grid col-md-offset-2" >
    <div class="col-xs-5 col-md-3 " >  
        <div class="panel panel-primary " centered>
            <?php echo anchor('ctl_main/add_teacher','<div class="panel-body" >
                <img src=" '.base_url().'image/pic_admin/cctv.jpg"  style="width:200px; hight:150px; position:static;"> 
            </div>
            <div class="panel-footer" align="center">ตั้งค่า cctv</div>
            ');?>       
        </div> 
    </div>
    <div class="col-xs-6 col-md-3 " align="center">  
        <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3 " align="center">
        <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="...">
        </a>
    </div>
</div>
<?php $this->load->view('footter');?>