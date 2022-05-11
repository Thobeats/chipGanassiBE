<div>
    <?php
    echo form_open(base_url() . 'admin/race_standings/update/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'race_standings_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <input type="hidden" name="race_id" value="<?= $race_id ?>">
        <?php 
            foreach($drivers as $driver):
        ?>
        <input type="hidden" name="race_stand_id[]" value="<?= $driver['race_stand_id'] ?>">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo driver_name($driver['driver']) ?>
                <input type="hidden" name="driver_id[]" value="<?= $driver['driver']?>">
            </label>
            <div class="col-sm-6">
                <input type="text" placeholder="Enter Points" name="points[]" class="form-control required" value="<?= $driver['points'] ?>"> 
            </div>
        </div>
        <?php endforeach; ?>
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

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            widgetPositioning: {
                horizontal: 'left',
                vertical: 'bottom'
            }, 
            minDate : '<?= date('m/d/Y') ?>'
        });

        $('#datetimepicker2').datetimepicker({
            widgetPositioning: {
                horizontal: 'left',
                vertical: 'bottom'
            },
            minDate : '<?= date('m/d/Y') ?>'
        });
    });
</script>