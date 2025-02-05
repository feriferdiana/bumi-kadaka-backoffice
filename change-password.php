<?php
    session_start();
	include('header.php');
?>

		<!-- main wrapper -->
		<div class="main">

			<?php
				include('navbar.php');
			?>

			<!-- main -->
			<main class="content">
				<div class="container p-0">

                    <div class="mb-3 d-flex">
                        <h1 class="h3 text-purple-600 mt-1">
                            <strong>Ubah Password</strong>
                        </h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form action="action/action_change_password.php" method="post" enctype="multipart/form-data" class="row">
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Password Lama</label>
                                    <input type="password" name="old_pass" class="form-control" id="subsidy-name" required>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Password Baru</label>
                                    <input type="password" name="new_pass" class="form-control" id="subsidy-name" required>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" name="confirm_new_pass" class="form-control" id="subsidy-name" required>
                                </div>
                                
                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12" align="center">
                                    <?php if (isset($_SESSION['message_change_password'])) : ?>
                                        <label class="form-label"><?php echo $_SESSION['message_change_password']; ?></label>
                                        <?php unset($_SESSION['message_change_password']); ?>
                                    <?php endif ?>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			