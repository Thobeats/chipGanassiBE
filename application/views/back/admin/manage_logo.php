<style>
    label{
        font-size : 14px;
    }
</style>
<div id="content-container">
    <div id="page-title" style="border-bottom: 1px solid lightgrey;">
        <h1 class="page-header text-overflow" ><?= translate('manage_logo_and_navs'); ?></h1>
    </div>
    <div class="tab-base" >
        <div class="panel">
    
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <?php  $lg = $logo != "" ? $logo[0]['logo'] : 'cgr.png' ?>
                                    <div>
                                        <img src= '<?= base_url() . 'uploads/logo_image/' . $lg ?>' alt='' width='100px'>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <?php  $lg = $logo != "" ? $logo[0]['logo_title'] : 'logo title' ?>
                                    <h5><?= $lg ?></h5>
                                </div>
                                <div class="col-lg-6">
                                    <div >
                                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
                                                onclick="ajax_modal('update_logo', '<?php echo translate('update_logo'); ?>', '<?php echo translate('successfully_added!'); ?>', 'update_logo', '','')">
                                                    <?php echo translate('change_logo_and_title'); ?>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top: 10px">
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
                                onclick="ajax_modal('nav_add', '<?php echo translate('add_nav'); ?>', '<?php echo translate('successfully_added!'); ?>', 'nav_add', '','')">
                                    <?php echo translate('add_nav'); ?>
                        </button>
                        <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'home_manager';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
    
</script>
