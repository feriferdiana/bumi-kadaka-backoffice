<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bumi Kadaka Backoffice</title>
	<meta name="description" content="kadaka">
	<meta name="keywords" content="kadaka, ">
	<meta name="author" content="PT Bumi Kadaka Backoffice">
	<link rel="shortcut icon" href="assets/img/icons/ico-bumi-kadaka.png" />
	<!-- <link rel="canonical" href="https://naya.ai/" /> -->
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-6 col-lg-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center my-4 brand-login">
							<img src="assets/img/logo/logo-bumi-kadaka.svg" alt="Bumi Kadaka">
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="assets/img/avatars/user-pp.png" alt="" class="img-fluid rounded-circle mb-2" width="60" height="60" />
										<p class="lead">Sign in to your account to continue</p>
									</div>
									<form method="POST" action="action/action_login.php">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required />
										</div>
										<div class="mb-3">
											<!-- <div class="d-flex justify-content-between align-items-center">
												<label class="form-label">Password</label>
												<a href="#">Forgot password?</a>
											</div> -->
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required />
										</div>
										<div>
											<label class="form-check">
            								<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
												Remember me next time
												</span>
											</label>
										</div>
										<div class="text-center mt-3 d-grid">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>

										<div class="text-center mt-3 d-grid">
											<?php session_start(); ?>
											<?php if (isset($_SESSION['message'])) : ?>
												<label class="form-label"><?php echo $_SESSION['message']; ?></label>
												<?php unset($_SESSION['message']); ?>
											 <?php endif ?>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center"><a class="text-muted" href="#" target="_blank"><strong>PT. Bumi Kadaka</strong></a> - &copy; <?=date('Y');?></div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
</body>
</html>