<?php
     $races = $this->db->get('races')->result_array();

     $step = $_GET['step'];
     $race_id = $this->input->get('race_id') ? $this->input->get('race_id') : $races[0]['race_id'];

?>

<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('race_standings'); ?></h1>
    </div>
    <div class="tab-base">

        <div class="panel panel-default" >
            <div class="panel-body">
                <div class="tab-content" > 
                    <ul class="nav nav-pills" style="background-color : whitesmoke;"> 
                        <?php 
                            foreach($races as $index => $race):
                        ?>
                        <li role="presentation" class="<?= $step == $index ? 'active' : '' ?>">
                            <a href="?step=<?= $index ?>&race_id=<?= $race['race_id'] ?>"><h4><?= $race['name'] ?></h4></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content" >
                    <div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
                         class="col-md-12" >
                        <button class="btn btn-primary btn-labeled fa fa-pencil pull-right mar-rgt" 
                                onclick="ajax_modal('add', '<?php echo translate('update_race_standings'); ?>', '<?php echo translate('successfully_added!'); ?>', 'race_standings_add', '<?= '?race_id=' . $race_id ?>','large')">
                                    <?php echo translate('update_race_standings'); ?>
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
    var module = 'race_standings';
    var list_cont_func = 'list?race_id=<?= $race_id ?>';
    var dlt_cont_func = 'delete';
</script>

