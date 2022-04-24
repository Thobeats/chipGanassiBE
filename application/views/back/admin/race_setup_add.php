<div>
    <?php
    echo form_open(base_url() . 'admin/race_setup/do_add/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'race_setup_new',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('race_name'); ?>
            </label>
            <div class="col-sm-6">
                <select name="race_id" id="demo-hor-1"
                       class="form-control required select-box" style="width:100%">
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
                <?php echo translate('drivers'); ?>
            </label>
            <div class="col-sm-6">
                <select name="driver_id[]" id="demo-hor-1"
                       class="form-control required select-box" style="width:100%" multiple>
                    <?php 
                        foreach($drivers as $driver):
                    ?>
                        <option value="<?= $driver['driver_id'] ?>"><?= $driver['firstname'] . " " . $driver['lastname'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('season'); ?>
            </label>
            <div class="col-sm-6">
               <input class="form-control" name="year" type="text" value="<?= $this->session->userdata('season') ?>" readonly>
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
    $(document).ready(function(){
            $('.select-box').select2(

            );
        })
</script>