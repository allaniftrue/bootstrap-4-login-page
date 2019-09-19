<?php
	$ipaddress = $_SERVER['REMOTE_ADDR'];
    $macaddr = false;
    $arp = `arp $ipaddress`; #run the external command, break output into lines
    $lines = explode(" ", $arp);
	$macaddr = isset($lines[3]) ? $lines[3] : ''; #Actual code
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>AJM Business Center & I.T. Services</title>
	<link rel="stylesheet" href="css/captiveportal-bs.css">
	<link rel="stylesheet" type="text/css" href="css/captiveportal-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="logo">
					</div>
					<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active"
								id="home-tab"
								data-toggle="tab"
								href="#voucher"
								role="tab" aria-controls="voucher"
								aria-selected="true">Voucher</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
								id="profile-tab"
								data-toggle="tab"
								href="#member"
								role="tab"
								aria-controls="member"
								aria-selected="false">Member</a>
						</li>
					</ul>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" action="$PORTAL_ACTION$" novalidate="">
								<div class="tab-content" id="nav-tabContent">
									<div
										class="tab-pane fade show active"
										id="voucher"
										role="tabpanel"
										aria-labelledby="voucher-tab">

										<div class="form-group">
											<label for="voucher">Voucher Code</label>
											<input id="voucher" type="text" class="form-control" name="auth_voucher" value="" required autofocus>
											<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
											<div class="invalid-feedback">
												Invalid voucher
											</div>
										</div>
									</div>
									<!-- end of voucher -->
									<div
										class="tab-pane fade"
										id="member" role="tabpanel"
										aria-labelledby="member-tab">
										<div class="form-group">
											<label for="username">Username</label>
											<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
											<div class="invalid-feedback">
												Username is invalid
											</div>
										</div>

										<div class="form-group">
											<label for="password">Password
												<!-- <a href="forgot.html" class="float-right">
													Forgot Password?
												</a> -->
											</label>
											<input id="password" type="password" class="form-control" name="password" required data-eye>
											<div class="invalid-feedback">
												Password is required
											</div>
										</div>

										<div class="form-group">
											<div class="custom-checkbox custom-control">
												<input type="checkbox" name="remember" id="remember" class="custom-control-input">
												<label for="remember" class="custom-control-label">Remeber Me</label>
											</div>
										</div>

										<!--
										<div class="mt-4 text-center">
											Don't have an account? <a href="register.html">Create One</a>
										</div>
										-->
									</div>
									<p>
										By clicking submit you agree to the <a href="#" data-toggle="modal" data-target="#tnc">Terms and Conditions</a>.
									</p>
									<div class="form-group m-0">
										<input name="accept" type="submit" value="Continue" class="btn btn-primary btn-block">
									</div>
								</div>
							</form>


						</div>
					</div>
					<div class="footer">
						Copyright &copy; <?php echo date('Y'); ?> &mdash; AJM Business Center & I.T. Services
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="tnc" tabindex="-1" role="dialog" aria-labelledby="tncTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title" id="tncTitle">Modal title</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
 				<h4 align="center" class="mb-4">Terms and Conditions ("Terms")</h4>
                <p>Last updated: March 19, 2016</p>
                <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the WiFi (the "Service") operated by AJM Business Center & I.T. Services ("us", "we", or "our").</p>
                <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
                <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
                <p><strong>Links To Other Web Sites</strong></p>
                <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by AJM Business Center & I.T. Services.</p>
                <p>AJM Business Center & I.T. Services has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that AJM Business Center & I.T. Services shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
                <p><strong>Termination</strong></p>
                <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                <p><strong>Governing Law</strong></p>
                <p>These Terms shall be governed and construed in accordance with the laws of Philippines, without regard to its conflict of law provisions.</p>
                <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
                <p><strong>Changes</strong></p>
                <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 15 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
                <p><strong>Contact Us</strong></p>
                <p>If you have any questions about these Terms, please contact us.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">I agree</button>
			</div>
			</div>
		</div>
	</div>

	<script src="js/captiveportal-jquery.slim.min.js"></script>
	<script src="js/captiveportal-popper.min.js"></script>
	<script src="js/captiveportal-bs.js"></script>
	<script src="js/captiveportal-js.js"></script>
</body>
</html>
