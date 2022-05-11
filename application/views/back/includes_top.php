<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $system_title; ?></title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Roboto Font [ OPTIONAL ]-->


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">


    <!--Activeit Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!--Animate.css [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/animate-css/animate.min.css" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/switchery/switchery.min.css" rel="stylesheet">

    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/summernote/summernote.min.css" rel="stylesheet">

    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/chosen/chosen.min.css" rel="stylesheet">



    <!--noUiSlider [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/back/plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">


    <!-- Bootstrap DateTime Picker -->
    <link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/Bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/Bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


    <!--Dropzone [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!--Demo script [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">

    <!--Countdown [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>template/back/css/countdown.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--SCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url(); ?>template/back/colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>

    <script src="<?php echo base_url(); ?>template/back/colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php $ext = $this->db->get_where('ui_settings', array('type' => 'fav_ext'))->row()->value; ?>
    <link rel="shortcut icon" href="<?= base_url() . 'uploads/logo_image/cgr.png'  ?>">
    <script>
        function sound(type) {}

        $(document).ready(function(){
            $('.select-box').select2();
        })
    </script>


</head>
