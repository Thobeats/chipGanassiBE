<div>
    <?php
    echo form_open(base_url() . 'admin/home_manager/update/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'update_logo',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1" >
                <?php echo translate('logo'); ?>
            </label>
            <div class="col-sm-6">
                <input type="file" name="nimg" id="demo-hor-1" 
                    class="form-control required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1" >
                <?php echo translate('logo_title'); ?>
            </label>
            <div class="col-sm-6">
                <input type="text" name="logo_title" id="demo-hor-1" 
                    class="form-control" placeholder="<?php echo translate('title'); ?>" >
            </div>
        </div>
    </div>
</form>
</div>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });

    });
</script>