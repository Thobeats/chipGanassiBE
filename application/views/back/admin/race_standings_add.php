<div>
    <?php
    echo form_open(base_url() . 'admin/race_schedule/do_add/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'race_standings_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('race_name') ?>
            </label>
            <div class="col-sm-6">
                <select name="race_id" id="demo-hor-1" 
                       class="form-control required">
                    <?php 
                        foreach($races as $race):
                    ?>
                        <option value="<?= $race['race_id'] ?>"><?= $race['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('from'); ?>
            </label>
            <div class="col-sm-6">
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control required" name="from_date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('to'); ?>
            </label>
            <div class="col-sm-6">
                <div class="input-group date" id="datetimepicker2">
                    <input type="text" class="form-control required" name="to_date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
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