<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th data-align="center"><?php echo translate('no'); ?></th>
                <th data-align="center"><?php echo translate('name'); ?></th>
                
                <!-- <th data-align="center"><?php echo translate('options'); ?></th> -->
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
                        <?php echo $row['name'] ?>
                    </td>
                          
                    <!-- <td class="text-right">
                        <a class="btn btn-info btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            href="<?= base_url() . 'admin/partners/edit/' . $row['driver_id']; ?>" target="_blank"
                           data-original-title="Edit" data-container="body">
                               <?php echo translate('edit'); ?>
                        </a>
                        <a class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                           onclick="delete_confirm('<?php echo $row['driver_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')"  
                           data-original-title="Delete" data-container="body">
                               <?php echo translate('delete'); ?>
                        </a>
                    </td> -->
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

