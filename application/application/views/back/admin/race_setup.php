<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('race_setup'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
                         class="col-md-12" >
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
                                onclick="ajax_modal('add', '<?php echo translate('new_race_setup'); ?>', '<?php echo translate('successfully_added!'); ?>', 'race_setup_new', '','')">
                                    <?php echo translate('create_new_race_setup'); ?>
                        </button>
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
    var module = 'race_setup';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
</script>

