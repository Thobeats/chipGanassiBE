<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th data-align="center"><?php echo translate('nav_title'); ?></th>
                <th data-align="center"><?php echo translate('nav_link'); ?></th>
                <th data-align="center"><?php echo translate('parent'); ?></th>
                <th data-align="center"><?php echo translate('action'); ?></th>
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
                        <?php echo $row['nav_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['nav_link']; ?>
                    </td>
                    <td>
                        <?php if($row['parent_id'] != 'nil'){ echo $this->db->get_where('home_navs', ['id' => $row['parent_id']])->row()->nav_name;}else{ echo ""; } ?>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-info btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                           onclick="ajax_modal('edit', '<?php echo translate('edit_race'); ?>', '<?php echo translate('successfully_edited!'); ?>', 'race_edit', '<?php echo $row['id']; ?>')" 
                           data-original-title="Edit" data-container="body">
                               <?php echo translate('edit'); ?>
                        </a>
                        <a class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                           onclick="delete_confirm('<?php echo $row['id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')"  
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

