<?php
foreach ($category_data as $row) {
    ?>
    <div class="tab-pane fade active in" id="edit">
        <?php
        echo form_open(base_url() . 'admin/races/update/' . $row['race_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'race_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('name'); ?>
                </label>
                <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" id="demo-hor-1" 
                           class="form-control required" placeholder="<?php echo translate('blog_category_name'); ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('status'); ?>
                </label>
                <div class="col-sm-6">
                        <input class='c_switchery' type="checkbox" id="sw" name='status' value="1"
                               data-set='status'
                               data-id='<?php echo $row['race_id']; ?>'
                               data-tm='<?php echo translate('photo_published'); ?>'
                               data-fm='<?php echo translate('photo_unpublished'); ?>'
                               <?php if ($row['status'] == '1') { ?>checked<?php } ?> />
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php
}
?>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });

        set_switchery();

        function set_switchery() {
            $(".c_switchery").each(function () {
                new Switchery($(this).get(0), {
                    color: 'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
                var changeCheckbox = $(this).get(0);
                var false_msg = $(this).data('fm');
                var true_msg = $(this).data('tm');
                
            });
        }
        
    });

</script>