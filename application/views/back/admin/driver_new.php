<?php

$action = base_url() . 'admin/drivers/do_add/';
if(isset($_SESSION['driver_details'])){
    $driver_details = $_SESSION['driver_details'];

    unset($_SESSION['driver_details']);

    $action = base_url() . 'admin/drivers/update/'. $driver_details['driver_id'];
    $form_title = translate('update_driver');

}


?>

<style>
    label{
        font-size : 14px;
    }
</style>
<div id="content-container">
    <div id="page-title" style="border-bottom: 1px solid lightgrey;">
        <h1 class="page-header text-overflow" ><?php echo isset($form_title) ? $form_title : translate('new_driver'); ?></h1>
    </div>
    <div class="tab-base" >
        <div class="panel">
    
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Default Tabs (Left Aligned)-->
                        <!--===================================================-->
                        <div class="tab-base">
                            <div class="tab-content">
                            <?php
                                echo form_open($action, array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => 'driver_new',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="first_name">
                                        <?php echo translate('first_name'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="first_name" id="first_name" value='<?= isset($driver_details) ? $driver_details['firstname'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="last_name">
                                        <?php echo translate('last_name'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="last_name" id="last_name" value='<?= isset($driver_details) ? $driver_details['lastname'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="team">
                                        <?php echo translate('team'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="team" id="team" value='<?= isset($driver_details) ? $driver_details['team'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="car">
                                        <?php echo translate('car'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="car" id="car" value='<?= isset($driver_details) ? $driver_details['car'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="birth_place">
                                        <?php echo translate('birth_place'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="birth_place" id="birth_place" value='<?= isset($driver_details) ? $driver_details['birthplace'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="date_of_birth">
                                        <?php echo translate('date_of_birth'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control required" name="date_of_birth" id="date_of_birth" value='<?= isset($driver_details) ? $driver_details['dob'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="sponsor">
                                        <?php echo translate('sponsor'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="sponsor" id="sponsor" value='<?= isset($driver_details) ? $driver_details['sponsor'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="weight">
                                        <?php echo translate('weight'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="weight" id="weight" value='<?= isset($driver_details) ? $driver_details['weight'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span>KG</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="height">
                                        <?php echo translate('height'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="height" id="height" value='<?= isset($driver_details) ? $driver_details['height'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span>FT</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="residence">
                                        <?php echo translate('residence'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control required" name="residence" id="residence" rows="5" value=''><?= isset($driver_details) ? $driver_details['residence'] : "" ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="crew_chief">
                                        <?php echo translate('crew_chief'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" name="crew_chief" id="crew_chief" value='<?= isset($driver_details) ? $driver_details['crew_chief'] : "" ?>'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="bio">
                                        <?php echo translate('bio'); ?>
                                    </label>
                                    <div class="col-sm-8 abstract">
                                        <textarea class="summernotes" data-height="300" data-name="description" id="bio" value=''><?= isset($driver_details) ? $driver_details['bio'] : "" ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="website">
                                        <?php echo translate('website'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="website" id="website" value='<?= isset($driver_details) ? $driver_details['website'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span class="fa fa-globe"></span>
                                            </span>
                                        </div>                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" >
                                        <?php echo translate('partnerships'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="partner" class='form-control'>
                                            <option value="">Select Partner</option>
                                            <?php foreach($partners as $partner): ?>
                                            <option value="<?= $partner['id'] ?>" <?= $partner['id'] == $driver_details['partner'] ? 'selected' : '' ?>><?= $partner['name'] ?></option>
                                           <?php endforeach; ?>
                                        </select>                                           
                                    </div>
                                </div>

                                <div class="form-group">
                                    
                                    <label class="col-sm-2 control-label" for="twitter">
                                        <?php echo translate('twitter'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="twitter" id="twitter" value='<?= isset($driver_details) ? $driver_details['twitter'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span class="fa fa-twitter"></span>
                                            </span>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="facebook">
                                        <?php echo translate('facebook'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="facebook" id="facebook" value='<?= isset($driver_details) ? $driver_details['facebook'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span class="fa fa-facebook"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="instagram">
                                        <?php echo translate('instagram'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="instagram" id="instagram" value='<?= isset($driver_details) ? $driver_details['instagram'] : "" ?>'/>
                                            <span class="input-group-addon">
                                                <span class="fa fa-instagram"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-is-inputsmall">
                                        <?php echo translate('image'); ?>
                                    </label>
                                    <div class="img_features col-sm-10">
                                        <div class="col-sm-3" style="border:1px solid #ccc; border-radius:5px;margin-right:10px; margin-bottom:10px;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <center>
                                                        <div class="col-sm-12" style="padding:10px;">
                                                            <img class="img-responsive img-border blah"  src="<?php echo base_url(); ?>uploads/<?= isset($driver_details) ? "photo_image/" .json_decode($driver_details['pro_img'])[0]->img : "others/default_image.png" ?>" style="width:100%;"  >
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="pull-left btn btn-sm btn-default btn-file btn-block">
                                                        <?php echo translate('select_image') . ' (' . translate('main') . ')*'; ?>
                                                        <input type="file" name="nimg[]" accept="image/*" class="form-control imgInp required" >
                                                        <input type="hidden" name="cnt[0]" id="cnt" class="form-control">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 
                                <div class="form-group text-right row">                                   
                                    <div class="col-md-12" style="margin-left:1%">
                                        <span class="btn btn-success btn-md btn-labeled fa fa-upload pull-right" onclick="form_submit('driver_new', '<?php echo translate('successfully_added!'); ?>'); proceed('to_add');" >
                                            <?php echo translate('upload'); ?>
                                        </span>
                                    </div>
                                </div>


                            </form>
                            </div>					            
                        </div>
                        <!--===================================================-->
                        <!--End Default Tabs (Left Aligned)-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="news_image_dummy" style="display:none; margin-top:10px">
    <div class="rem">
        <div class="col-sm-3" style="border:1px solid #ccc; border-radius:5px; margin-right:10px; margin-bottom:10px;">
            <div class="form-group">
                <div class="col-sm-12">
                    <center>
                        <div class="col-sm-12" style="padding:10px;">
                            <img class="img-responsive img-border blah"  src="<?php echo base_url(); ?>uploads/others/default_image.png" style="height:150px; width:100%;" >
                        </div>
                    </center>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8" style="margin-left:9px">
                        <span class="pull-left btn btn-sm btn-default btn-file" style="margin-left:-5px">
                            <?php echo translate('optional_image'); ?>
                            <input type="file" name="nimg[{{i}}]" class="form-control imgInp">
                        </span>
                        <input type="hidden" name="cnt[{{i}}]" class="form-control">
                    </div>
                    <div class="col-sm-8" style="margin-left:-12px">
                        <span class="pull-right btn btn-sm btn-danger removal" style="margin-left:5px">
                            <?php echo translate('remove'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="img_count" id="img_count" value="0" />
<input type="hidden" id="nums" value='1' />
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var dlt_cont_func = 'delete';
</script>


<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
            widgetPositioning: {
                horizontal: 'left',
                vertical: 'bottom'
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        function readURL_all(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var parent = $(input).closest('.form-group');
                reader.onload = function (e) {
                    parent.find('.wrap').hide('fast');
                    parent.find('.blah').attr('src', e.target.result);
                    parent.find('.wrap').show('fast');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".panel-body").on('change', '.imgInp', function () {
            readURL_all(this);
        });

        $('#add_images').click(function () {
            var news_image_dummy_html = $('#news_image_dummy').html();
            var l = $('#img_count').val();
            ln = parseInt(Number(l) + 1);
            news_image_dummy_html = news_image_dummy_html.replace(/{{i}}/g, ln);
            $('.img_features').append(news_image_dummy_html);
            $('#img_count').val(ln);
            $('#cnt').val(ln);
        });

        $('body').on('click', '.removal', function () {
            $(this).closest('.rem').remove();
        });
    });
</script>
<script>
function set_summer() {
    $('.summernotes').each(function () {
        var now = $(this);
        var h = now.data('height');
        var n = now.data('name');
        if (now.closest('.abstract').find('.val').length) {
        } else {
            now.closest('.abstract').append('<input type="hidden" class="val" name="' + n + '">');
            now.summernote({
                height: h,
                onChange: function () {
                    now.closest('.abstract').find('.val').val(now.code());
                }
            });
            now.closest('.abstract').find('.val').val(now.code());
        }
    });
}
$(document).ready(function () {
    $(".bootstrap-tagsinput").prop("class","bootstrap-tagsinput custom-input-field-1");
    set_select();
    set_summer();
});
function set_select() {
    $('.demo-chosen-select').chosen();
    $('.demo-cs-multiselect').chosen({width: '100%'});
}
function get_cat(id) {
    $.ajax({
        url: "<?=base_url()?>admin/blog_post/blog_post/sub_by_cat/"+id,
        success: function(result){
            $("#sub_cat_name").html(result);
            $("#sub_cat").show('slow');
            set_select();
        }
    });
}

</script>

<script>
    function video_sector(upload_type) {
        if (upload_type == 'upload') {
            $('#video_share').hide('slow');
            $('#video_upload').show('slow');
        } else if (upload_type == 'share') {
            $('#video_upload').hide('slow');
            $('#video_share').show('slow');
        }
    }
    function preview(v_link) {
        var site = $('.site').val();
        if (site == 'youtube') {
            var x = v_link.split('=');
            var video_link = x[1];
        } else if (site == 'dailymotion') {
            var temp = v_link.split('/');
            var x = temp[4].split('_');
            var video_link = x[0];
        } else if (site == 'vimeo') {
            var x = v_link.split('/');
            var video_link = x[3];
        }
        $('#vl').val(video_link);
        $('#video_preview').load('<?php echo base_url(); ?>admin/blog_video/preview/' + site + '/' + video_link);
    }
</script>
<script>
    (function localFileVideoPlayer() {
        'use strict'
        var URL = window.URL || window.webkitURL;
        var displayMessage = function (message, isError) {
            var element = document.querySelector('#message');
            element.innerHTML = message;
            element.className = isError ? 'error' : 'info';
        }
        var playSelectedFile = function (event) {
            var file = this.files[0];
            var type = file.type;
            var videoNode = document.querySelector('#upload_video');
            var canPlay = videoNode.canPlayType(type);
            if (canPlay === '')
                canPlay = 'no';
            //var message = 'Can play type "' + type + '": ' + canPlay ;
            var isError = canPlay === 'no';
            //displayMessage(message, isError) ;

            if (isError) {
                return
            }

            var fileURL = URL.createObjectURL(file);
            videoNode.src = fileURL;
        }
        var inputNode = document.querySelector('.videoInp');
        inputNode.addEventListener('change', playSelectedFile, false);
    })();

</script>

<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'drivers';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
</script>