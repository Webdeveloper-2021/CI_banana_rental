
<!DOCTYPE html>
<html lang="en" >
    <head>
    	<base href="">
            <meta charset="utf-8"/>
	        <title><?php echo $title;?></title>
	        <meta name="description" content="Check COVID"/>
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->
            <link href="/assets/login/css/login-3.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/css/style.bundle.css" rel="stylesheet" type="text/css"/>
	        <link rel="icon" href="/assets/img/core-img/favicon.ico">

        </head>
	<body  id="kt_body" style="background-image: url(/assets/login/media/bg/bg-10.jpg)"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >
	

	<div class="d-flex flex-column flex-root">
				<!--begin::Login-->
		<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/assets/login/media/bg/bg-1.jpg);">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-15">
						<a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        	<img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Monkey">
                    	</a>
					</div>
					<!--end::Login Header-->

					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-20">
							<h3><?php echo $this->lang->line('reset'); ?>?</h3>
							<p class="opacity-60 font-weight-bold"><?php echo $this->lang->line('restit'); ?></p>							
						</div>
						<form class="form">
							<div class="form-group">
								<label for="new_pwd" class="text-white">
                                    <?php echo $this->lang->line('npw'); ?> *
                                </label> 
                                <input type="password" id="new_pwd" placeholder="<?php echo $this->lang->line('npw'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5">
                                <div class="help-block">
                                    <a href="#" class="show-pwd" onclick="ch_ps_new(this)"><?php echo $this->lang->line('spw'); ?></a>
                                </div>                                
							</div>
							<div class="form-group">

                                <label for="re_new_pwd" class="text-white">
                                    <?php echo $this->lang->line('confirmpw'); ?> * 
                                </label> 
                                <input type="password" id="re_new_pwd" placeholder="<?php echo $this->lang->line('confirmpw'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5">
                                <div class="help-block">
                                    <a href="#" class="show-pwd" onclick="ch_ps_re(this)"><?php echo $this->lang->line('spw'); ?></a>
                                </div>

								
							</div>
							
							<div class="form-group text-center mt-10">
								<button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3" onclick="reset_pwd()"><?php echo $this->lang->line('reset'); ?></button>
							</div>
						</form>
						



             





					</div>
					<!--end::Login Sign in form-->


				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
<!--end::Main-->



<script>

    var pwd,repwd;
    function ch_ps_new(e){
        if($('#new_pwd').attr('type')=="password"){
            $('#new_pwd').attr('type','text');
            $(e).text('<?php echo $this->lang->line('hpw'); ?>');
        }else{
            $('#new_pwd').attr('type','password');
            $(e).text('<?php echo $this->lang->line('spw'); ?>');
        }
        
    }

    function ch_ps_re(e){
        if($('#re_new_pwd').attr('type')=="password"){
            $('#re_new_pwd').attr('type','text');
            $(e).text('<?php echo $this->lang->line('hpw'); ?>');
        }else{
            $('#re_new_pwd').attr('type','password');
            $(e).text('<?php echo $this->lang->line('spw'); ?>');
        }
        
    }

    function reset_pwd(){
        pwd = $('#new_pwd').val();
        repwd = $('#re_new_pwd').val();
        if(pwd==''){
            $('#new_pwd').focus();return;
        }else if(pwd!=repwd){
            $('#re_new_pwd').val('');
            $('#re_new_pwd').focus();return;
        }
        $.post(
            '/index.php/First/reset',
            {
                new_pwd:pwd,
                code:<?=$code;?>
            },
            function(data,status){
                if(data==1){
                    window.location.href = "/index.php/First";
                }else{
                    toastr_call("error","<?php echo $this->lang->line('errconfem'); ?>");
                }
            }
        );
    }
</script>
    


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="/assets/login/plugins/global/plugins.bundle.js"></script>
		    	   <script src="/assets/login/plugins/custom/prismjs/prismjs.bundle.js"></script>
		    	   <script src="/assets/login/js/scripts.bundle.js"></script>
				<!--end::Global Theme Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                            <script src="/assets/login/js/pages/custom/login/login-general.js"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>