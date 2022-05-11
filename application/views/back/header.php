<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <div class="navbar-header">
            <a href="<?php echo base_url(); ?><?php echo $this->session->userdata('title'); ?>" class="navbar-brand">
                <img src="<?= base_url() . 'uploads/logo_image/cgr.png'  ?>" alt="<?php echo $system_name;?>" class="brand-icon" style="margin-top:10px; width:30%; height : 30px;">
                <div class="brand-title">
                    <span class="brand-text"><?php echo $system_name;?></span>
                </div>
            </a>
        </div>
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">
                <!--Navigation toogle button-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle">
                        <i class="fa fa-navicon fa-lg"></i>
                    </a>
                </li>
                <!--End Navigation toogle button-->
            </ul>
            <?php if(demo()){ ?>
                <ul class="nav navbar-top-links pull-left">
    			      <p style="margin-top: 20px;margin-left: 20px;"><i class="text-danger blink_me fa fa-exclamation-triangle" style="font-size: 16px"></i> For demo purpose many operations including deletion, emailing, file uploading are <b>DISABLED</b>
    		    </ul>
            <?php } ?>
            <ul class="nav navbar-top-links pull-right">
                <li>
                    <div class="lang-selected" style="margin-top:10px;">
                            <?php
                                if($this->session->userdata('title') == 'admin'){
                            ?>
                                <a href="<?php echo base_url(); ?>" target="_blank" class="btn btn-default">
                                    <i class="fa fa-desktop"></i>  <?php echo translate('visit_home_page');?>
                                </a>
                            <?php
                                } elseif ($this->session->userdata('title') == 'vendor') {
                            ?>
                                <a href="<?php echo $this->Crud_model->vendor_link($this->session->userdata('vendor_id')); ?>" target="_blank" class="btn btn-default">
                                    <i class="fa fa-desktop"></i>  <?php echo translate('visit_my_homepage');?>
                                </a>
                            <?php
                                }
                            ?>
                    </div>
                </li>
                <li id="dropdown-user" class="dropdown">
                    <a href="<?php echo base_url(); ?>template/back/#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right">
                            <?php
                                if($this->session->userdata('title') == 'admin'){
                            ?>
                                <img class="img-circle img-user media-object" src="<?php echo base_url(); ?>template/back/img/av1.png" alt="Profile Picture">
                            <?php
                                } elseif ($this->session->userdata('title') == 'vendor') {
                            ?>
                                <img class="img-circle img-user media-object" src="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $this->session->userdata('vendor_id'); ?>.png" alt="Profile Picture">
                            <?php
                                }
                            ?>
                        </span>
                        <div class="username hidden-xs">
							<?php
								if($this->session->userdata('title') == 'admin'){
									echo $this->session->userdata('admin_name');
								} elseif ($this->session->userdata('title') == 'vendor') {
									echo $this->session->userdata('vendor_name');
								}
							?>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_admin/">
                                    <i class="fa fa-user fa-fw fa-lg"></i> <?php echo translate('profile');?>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="<?php echo base_url(); ?><?php echo $this->session->userdata('title'); ?>/logout/" class="btn btn-primary">
                                <i class="fa fa-sign-out fa-fw"></i> <?php echo translate('logout');?>
                            </a>
                        </div>
                    </div>
                </li>
                <!--End user dropdown-->
            </ul>
        </div>
    </div>
</header>
<style>
    .blink_me {
    	animation: blinker 1.5s linear infinite;
    }
    @keyframes blinker {
    	50% {
    		opacity: 0;
    	}
    }
</style>
