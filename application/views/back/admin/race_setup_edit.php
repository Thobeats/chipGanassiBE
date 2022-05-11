<?php
foreach ($category_data as $row) {
    ?>
    <div class="tab-pane fade active in" id="edit">
        <?php
        echo form_open(base_url() . 'admin/race_setup/update/' . $row['race_stand_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'race_setup_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('race_name'); ?>
            </label>
            <div class="col-sm-6">
                <select name="race_id" id="demo-hor-1" onchange='getVenue(event)'
                       class="form-control required">
                    <?php 
                        foreach($races as $race):
                    ?>
                        <option <?= $race['race_id'] == $row['race_id'] ? 'selected' : '' ?> value="<?= $race['race_id'] ?>"><?= $race['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="">
                <?php echo translate('venue'); ?>
            </label>
            <div class="col-sm-6">
                <select name="venue_id" id="venue_id"
                       class="form-control required" style="width:100%">
                  
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('drivers'); ?>
            </label>
            <div class="col-sm-6">
                <select name="driver_id" id="demo-hor-1"
                       class="form-control required">
                    <?php 
                        foreach($drivers as $driver):
                    ?>
                        <option value="<?= $driver['driver_id'] ?>" <?= $driver['driver_id'] == $row['driver_id'] ? 'selected' : '' ?>><?= $driver['firstname'] . " " . $driver['lastname'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>        
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('year'); ?>
            </label>
            <div class="col-sm-6">
               <input class="form-control required" name="year" type="text" value="<?= $row['season'] ?>">
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