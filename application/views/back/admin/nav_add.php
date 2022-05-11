<div>
    <?php
    echo form_open(base_url() . 'admin/home_manager/add_nav/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'nav_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('nav_title'); ?>
            </label>
            <div class="col-sm-6">
                <input type="text" name="nav_name" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php echo translate('title'); ?>" >
            </div>
        </div>
    
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('nav_link'); ?>
            </label>
            <div class="col-sm-6">
                <input type="text" name="nav_link" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php echo translate('link'); ?>" >
            </div>
        </div>
   
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('parent'); ?>
            </label>
            <div class="col-sm-6">
                <select name="parent" id="" class='form-control'>
                    <option value="nil">nil</option>
                    <?php foreach($navs as $nav): ?>
                    <option value="<?= $nav['id'] ?>"><?= $nav['nav_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('position'); ?>
            </label>
            <div class="col-sm-6">
                <input type="text" name="position" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php echo translate('position'); ?>" >
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