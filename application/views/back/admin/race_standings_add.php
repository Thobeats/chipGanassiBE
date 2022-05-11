
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <div class="text-right">
            <select name="race_id" id="race_setup_id" onchange='getDrivers(event)'
                    class="form-control required select-box" style="width:100%">
                    <option value=""></option>
                <?php 
                    foreach($venues as $venue):
                ?>
                    <option value="<?= $venue['venue_id'] ?>"><?php $vid = $venue['venue_id']; echo venue_name($vid); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>
<div>
    <?php
    echo form_open(base_url() . 'admin/race_standings/update/'. $race_id, array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'race_standings_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div id="driver_points">
            
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