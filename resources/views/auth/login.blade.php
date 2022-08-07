

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Login - USER TASKS System</title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/vendors.bundle.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/app.bundle.css')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets3/img/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets3/img/favicon/favicon-32x32.png')}}">
        <link rel="mask-icon" href="{{ asset('assets3/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/page-login.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/notifications/toastr/toastr.css')}}">
    </head>
    <body>
      
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <div class="row">
						<div class="col-sm-2">
							<img src="{{-- asset('assets3/sn2.png')--}}"   style="width: 50px; background: white; ">

						</div>
						<div class="col-sm-8">
							<span class="page-logo-text mr-1" style="font-size: 14px;font-weight: bold;margin-left: 13px;width: 91px;"><?php //echo $title; ?></span>
						</div>
						<div class="col-sm-2">
							<img src="" alt="BRS" aria-roledescription="logo" style="width: 50px; height: 40px;">
							<span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
						</div>
					</div>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form class="needs-validation" action="{{ route('login') }}" novalidate method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="username">Email Address</label>
                        <input type="email" name="email" class="form-control" value="<?php //if($_POST){ echo htmlspecialchars($_POST['email']);}else{echo "";} ?> " required>
                        <span class="help-block">Your Email Address</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <span class="help-block">
                            Your password
                        </span>
                    </div>
                    <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme"> Remember me</label>
                        </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-default float-right">login</button>
                </form>
                <br/>
                <div class="row">
					<div class="col col-sm-12 text-center" style="color: black;">
						<i><strong>©</strong> </i>
					</div>
				</div>
            </div>
            
        </div>
        <video poster="" id="bgvid" playsinline autoplay muted loop>
        </video>
        <script src="{{ asset('assets3/js/vendors.bundle.js')}}"></script>
        <script src="{{ asset('assets3/js/app.bundle.js')}}"></script>
        <script src="{{ asset('assets3/js/notifications/toastr/toastr.js')}}"></script>
        <!-- Page related scripts -->
        <script>
		$('#ts-success').show( function success() {
			Command: toastr["success"]("Login Successfully", "BRS System")
				toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": true,
				  "onclick": null,
				  "showDuration": 300,
				  "hideDuration": 100,
				  "timeOut": 5000,
				  "extendedTimeOut": 1000,
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
		});
	   $('#ts-error').show( function danger() {
			Command: toastr["error"]("Login Failed", "BRS System")
				toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": true,
				  "onclick": null,
				  "showDuration": 300,
				  "hideDuration": 100,
				  "timeOut": 5000,
				  "extendedTimeOut": 1000,
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
		});
	</script>
        <script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function()
		{
			'use strict';
			window.addEventListener('load', function()
			{
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form)
				{
					form.addEventListener('submit', function(event)
					{
						if (form.checkValidity() === false)
						{
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();

	</script>
    </body>
</html>
