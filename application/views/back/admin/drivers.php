<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('drivers'); ?></h1>
    </div>
    <div class="tab-base">

        <div class="panel panel-default" >
            <div class="panel-body">
                <div class="tab-content" >
                    <div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
                         class="col-md-12" >
                        <a 
                        class="btn btn-primary btn-labeled fa fa-pencil pull-right mar-rgt"
                        href="<?= base_url() . 'admin/drivers/new' ?>"
                        >
                            <?php echo translate('add_new_driver'); ?>
                        </a>
                    </div>
                    <br>
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'drivers';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
</script>

