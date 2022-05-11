<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">
	<title><?php echo translate('Login');?> | <?php echo $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;?></title>
	<?php
		$control = 'admin';
	?>
	<!--STYLESHEET-->
	<!--Roboto Font [ OPTIONAL ]-->
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">
	<!--Activeit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">

	<!--SCRIPT-->
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>
	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
	<!--<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value; $this->benchmark->mark_time();?>-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">

    <?php $theme =  $this->db->get_where('ui_settings',array('type' => 'header_color'))->row()->value;?>
    <style type="text/css">
        .panel-login{
            background: <?php echo $theme; ?> !important;
        }
    </style>
</head>

<body>
	<div id="container" class="cls-container"
    style="background:url(<?php echo base_url(); ?>uploads/others/ME-Detroit-1080.jpg); background-size: cover;">
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 50px !important;">
				<div class="panel-body">
                	<a class="box-inline" href="<?php echo base_url(); ?><?php echo $this->session->userdata('title'); ?>">
						<img src="<?php echo $this->Crud_model->logo('admin_login_logo'); ?>" class="log_icon">
					</a>
                    <hr class="hr-log">
					<p class="pad-btm"><?php echo translate('sign_in_to_your_account');?></p>
					<?php
						echo form_open(base_url() . ''.$control.'/login/', array(
							'method' => 'post',
							'id' => 'login'
						));
					?>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user" style="color:#fff !important;"></i></div>
								<input type="text" name="email" class="form-control email" placeholder="<?php echo translate('email'); ?>">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-key" style="color:#fff !important;"></i></div>
								<input type="password" name="password" class="form-control pass" placeholder="<?php echo translate('password'); ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 text-left">
                            	<div class="pad-ver">
									<a href="#" onclick="ajax_modal('forget_form','<?php echo translate('forget_password'); ?>','<?php echo translate('email_sent_with_new_password!'); ?>','forget','')" class="btn-link mar-rgt" style="color:#fff !important;"><?php echo translate('forgot_password');?> ?</a>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group text-right">
									<span class="btn btn-info btn-labeled fa fa-unlock-alt snbtn" onclick="form_submit('login')">
                                    	<?php echo translate('sign_in');?>
                                    </span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php if(demo()){ ?>
			<div class="cls-content" style="padding:0px !important;padding-top:0px !important;">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 0px !important; width:450px !important;">
				<div class="panel-body">
                	<div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td style="border-color:#fff !important;">Admin</td>
                                <td style="border-color:#fff !important;">admin@newspaper.com</td>
                                <td style="border-color:#fff !important;">1234</td>
                                <td style="border-color:#fff !important;">
                                    <div class="btn btn-info btn-xs admina">copy</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-color:#fff !important;">Editor</td>
                                <td style="border-color:#fff !important;">editor@newspaper.com</td>
                                <td style="border-color:#fff !important;">1234</td>
                                <td style="border-color:#fff !important;">
                                    <div class="btn btn-info btn-xs editora">copy</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-color:#fff !important;">Reporter</td>
                                <td style="border-color:#fff !important;">news_reporter@newspaper.com</td>
                                <td style="border-color:#fff !important;">1234</td>
                                <td style="border-color:#fff !important;">
                                    <div class="btn btn-info btn-xs reportera">copy</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-color:#fff !important;">Accountant</td>
                                <td style="border-color:#fff !important;">accountant@newspaper.com</td>
                                <td style="border-color:#fff !important;">1234</td>
                                <td style="border-color:#fff !important;">
                                    <div class="btn btn-info btn-xs accounta">copy</div>
                                </td>
                            </tr>
                        </table>
                        <p>N.B.: We just made this Table for Demo purposes only</p>
                	</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

	<script>
		$(document).ready(function(e){
			$('.admina').click(function(e){
				$('.email').val('admin@newspaper.com');
				$('.pass').val('1234');
			});
			$('.editora').click(function(e){
				$('.email').val('editor@newspaper.com');
				$('.pass').val('1234');
			});
			$('.accounta').click(function(e){
				$('.email').val('accountant@newspaper.com');
				$('.pass').val('1234');
			});
			$('.reportera').click(function(e){
				$('.email').val('news_reporter@newspaper.com');
				$('.pass').val('1234');
			});
		});
	</script>

	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>

	<!--Activeit Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/activeit.min.js"></script>

	<!--Background Image [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/demo/bg-images.js"></script>

	<!--Bootbox Modals [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootbox/bootbox.min.js"></script>

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/ajax_login.js"></script>

	<script>
        var base_url = '<?php echo base_url(); ?>'
        var cancdd = '<?php echo translate('cancelled'); ?>'
        var req = '<?php echo translate('this_field_is_required'); ?>'
		var sing = '<?php echo translate('signing_in...'); ?>';
		var nps = '<?php echo translate('new_password_sent_to_your_email'); ?>';
		var lfil = '<?php echo translate('login_failed!'); ?>';
		var wrem = '<?php echo translate('wrong_e-mail_address!_try_again'); ?>';
		var lss = '<?php echo translate('login_successful!'); ?>';
		var sucss = '<?php echo translate('SUCCESS!'); ?>';
		var rpss = "<?php echo translate('reset_password'); ?>";
        var user_type = '<?php echo $control; ?>';
        var module = 'login';
		var unapproved = '<?php echo translate('account_not_approved._wait_for_approval.'); ?>';

		window.addEventListener("keydown", checkKeyPressed, false);

		function checkKeyPressed(e) {
		    if (e.keyCode == "13") {
		        $('.snbtn').click();
		    }
		}
    </script>
</body>
</html>
