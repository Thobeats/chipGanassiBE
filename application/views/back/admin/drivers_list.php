<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th data-align="center"><?php echo translate('no'); ?></th>
                <th data-align="center"><?php echo translate('driver'); ?></th>
                <th data-align="center"><?php echo translate('team'); ?></th>
                <th data-align="center"><?php echo translate('sponsor'); ?></th>
                <th data-align="center"><?php echo translate('car'); ?></th>
                <th data-align="center"><?php echo translate('date_of_birth'); ?></th>
                <th data-align="center"><?php echo translate('residence'); ?></th>
                <th data-align="center"><?php echo translate('options'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach ($all_categories as $row) {
                $i++;
                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    
                    <td>
                        <?php echo $row['firstname'] . " " . $row['lastname']; ?>
                    </td>
                    <td>
                        <?php echo $row['team'];  ?>
                    </td>
                    <td>
                        <?php echo $row['sponsor'] ?>
                    </td>
                    <td>
                        <?php echo $row['car'] ?>
                    </td>
                    <td>
                        <?php echo $row['dob'] ?>
                    </td>              
                    <td>
                        <?php echo $row['residence'] ?>
                    </td>       
                    <td class="text-right">
                        <a class="btn btn-primary btn-xs btn-icon icon-lg fa fa-eye add-tooltip" data-toggle="tooltip" data-original-title= '<?= translate('view_driver') ?>'
                            href='<?= base_url() . 'admin/drivers/view/' . $i ?>' target="_blank">
                        </a>
                        <a class="btn btn-info btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                           onclick="ajax_modal('edit', '<?php echo translate('edit_race_schedule'); ?>', '<?php echo translate('successfully_edited!'); ?>', 'race_schedule_edit', '<?php echo $row['race_schedule_id']; ?>')" 
                           data-original-title="Edit" data-container="body">
                               <?php echo translate('edit'); ?>
                        </a>
                        <a class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                           onclick="delete_confirm('<?php echo $row['race_schedule_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')"  
                           data-original-title="Delete" data-container="body">
                               <?php echo translate('delete'); ?>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

